@extends('front.master-payment')

@section('content')


<div class="jumbotron text-center" style="min-height:300px">
    <h1 class="display-3">Thank You!</h1>
    <p class="lead"><strong>Thank You For Booking With Us</strong> </p>
    <p class="lead"><strong>Please check your email</strong> for further instructions maps and our office contacts</p>
    <hr>
    <p>
      Having trouble? <a href="{{url('/')}}/contact-us">Contact us</a>
    </p>
    <p class="lead">
      <a class="btn btn-success btn-lg" href="{{url('/')}}" role="button">Continue to homepage</a>
    </p>
  </div>
@endsection
