<?php

namespace App\Http\Controllers;
use Pesapal;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Models\Payment;
use AmrShawky\LaravelCurrency\Facade\Currency;
use Illuminate\Support\Facades\Input;
use App\Models\Booking;
use Mail;
use Session;

class PaymentsController extends Controller
{
    public function make_payments($slung){
        $Rooms = \App\Models\Room::where('slug',$slung)->get();
        return view('payment.index', compact('Rooms'));
    }

    public function payment(Request $request){//initiates payment
        $PostAmount = $request -> amount;
        $numberOfpersons = $request->persons;
        $amount = $PostAmount*$numberOfpersons;

        $postDescription = $request->description;

        $description = "New Booking for $postDescription for $numberOfpersons person(s) on $request->arrive to $request->depart";
        // dd($description);

        if($request->currency == "KES"){
            $amount = $amount;
        }elseif($request->currency == "USD"){
            $amount = Currency::convert()->from('USD')->to('KES')->amount($amount)->get();
        }elseif($request->currency == "GBP"){
            $amount = Currency::convert()->from('GBP')->to('KES')->amount($amount)->get();
        }elseif($request->currency == "EUR"){
            $amount = Currency::convert()->from('EUR')->to('KES')->amount($amount)->get();
        }

        // Create Booking
        $booking = Booking::create($request->all());
        if($booking){
            //Send Email With Invoice
        }

        $payments = new Payment;
        $payments -> businessid = 1; //Business ID
        $payments -> transactionid = Pesapal::random_reference();
        $payments -> status = 'NEW'; //if user gets to iframe then exits, i prefer to have that as a new/lost transaction, not pending
        $payments -> amount = (int)$amount;
        $payments -> currency = $request->currency;
        $payments -> user_id = $request->email;
        $payments -> save();

        $UserName = Session::put('UserName', $request->name);
        $UserMobile = Session::put('UserMobile', $request->mobile);

        $message = "Hello $request->name, <br> $description";

        $this->sendEmail($message,$request->email,$request->name);

        $details = array(
            'amount' => $payments -> amount,
            'description' => 'Villa-Serene-Hotel-'.$description,
            'type' => 'MERCHANT',
            'first_name' => $request->name,
            'last_name' => $request->name,
            'email' => $request->email,
            'phonenumber' => $request->mobile,
            'reference' => $payments -> transactionid,
            'height'=>'200px',
            'currency' => 'KES'
        );

        $iframe=Pesapal::makePayment($details);

        return view('payment.index', compact('iframe'));
    }

    public function sendEmail($message,$email,$name){
        $messageee = ''.$message.'';
        $data = array(
            'content'=>$messageee,
        );

        $subject = "Your Booking Summary";
        $appEmail = 'mailer@villaserenehotel.com';
        $SenderEmail = $appEmail;
        $SenderName = "Vlla Serene Hotel";
        $toVariable = $email;
        $toVariableName = $name;
        Mail::send('email', $data, function($message) use ($subject,$SenderEmail,$SenderName,$toVariable,$toVariableName,$email,$name){
            $message->from($toVariable , $toVariableName);
            $message->to($SenderEmail, $SenderName)->cc('albertmuhatia@gmail.com')->replyTo($toVariable, $toVariableName)->subject($subject);
        });
    }

    public function paymentsuccess(Request $request)//just tells u payment has gone thru..but not confirmed
    {
        // send message
        $trackingid = $request->input('pesapal_transaction_tracking_id');
        $ref = $request->input('pesapal_merchant_reference');

        try {

            $this->sendSMS($trackingid,$ref);

          } catch (\Exception $e) {

              echo $e->getMessage();
          }


        $payments = Payment::where('transactionid',$ref)->first();
        $payments -> trackingid = $trackingid;
        $payments -> status = 'Confirmed';
        $payments -> save();
        //go back home
        $payments=Payment::all();
        return view('payment.thankyou', compact('payments'));
    }
    public function sendSMS($trackingid,$ref){
        $name = Session::get('UserName');
        $phone = Session::get('UserMobile');
        $message = "Hello $name, Your booking with tracking Id $trackingid has been received. Welcome to Villa Serene Hotel";
        $senderid = "DESIGNEKTA";

        $url = 'https://bulk.cloudrebue.co.ke/api/v1/send-sms';
        $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvYnVsay5jbG91ZHJlYnVlLmNvLmtlXC8iLCJhdWQiOiJodHRwczpcL1wvYnVsay5jbG91ZHJlYnVlLmNvLmtlXC8iLCJpYXQiOjE2NTM5Nzc0NTEsImV4cCI6NDgwOTczNzQ1MSwiZGF0YSI6eyJlbWFpbCI6ImluZm9AZGVzaWduZWt0YS5jb20iLCJ1c2VyX2lkIjoiMTQiLCJ1c2VySWQiOiIxNCJ9fQ.N3y4QhqTApKi46YSiHmkaoEctO9z6Poc4k1g44ToyjA";

            $post_data=array(
            'sender'=>$senderid,
            'phone'=>$phone,
            'correlator'=>'Whatever',
            'link_id'=>null,
            'message'=>$message
            );

        $data_string = json_encode($post_data);
        $ch = curl_init( $url );
        curl_setopt( $ch, CURLOPT_POST, 1);
        curl_setopt( $ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt( $ch, CURLOPT_HEADER, 0);
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER,
            array(
                'Content-Type: application/json',
                'Accept: application/json',
                'Authorization:Bearer '.$token,
                'Content-Length: ' . strlen($data_string)
                )
            );

        $response = curl_exec($ch);
        curl_close($ch);
    }
    //This method just tells u that there is a change in pesapal for your transaction..
    //u need to now query status..retrieve the change...CANCELLED? CONFIRMED?
    public function paymentconfirmation(Request $request)
    {

        $trackingid = $request->input('pesapal_transaction_tracking_id');
        $merchant_reference = $request->input('pesapal_merchant_reference');
        $pesapal_notification_type= $request->input('pesapal_notification_type');

        //use the above to retrieve payment status now..
        $this->checkpaymentstatus($trackingid,$merchant_reference,$pesapal_notification_type);
    }
    //Confirm status of transaction and update the DB
    public function checkpaymentstatus($trackingid,$merchant_reference,$pesapal_notification_type){
        $status=Pesapal::getMerchantStatus($merchant_reference);
        $payments = Payment::where('trackingid',$trackingid)->first();
        $payments -> status = $status;
        $payments -> payment_method = "PESAPAL";//use the actual method though...
        $payments -> save();
        return "success";
    }


    public function make_payment(){
        $page_title = 'We will be Back Soon';
        return view('payments.business.make-payment',compact('page_title'));
    }
}
