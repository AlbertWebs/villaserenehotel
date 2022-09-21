<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;
use App\Models\Booking;
use App\Models\SendEmail;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $Bookings = Booking::all();
         return view('admin.bookings.index', compact('Bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Bookings = Booking::all();
        return view('admin.bookings.create', compact('Bookings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookingRequest $request)
    {
        $Bookings = new Booking;
        $Bookings->name  = Input::get('name');
        $Bookings->email  = Input::get('email');
        $Bookings->gender  = Input::get('gender');
        $Bookings->mobile  = Input::get('mobile');
        $Bookings->address  = Input::get('address');
        $Bookings->arrive  = Input::get('arrive');
        $Bookings->depart  = Input::get('depart');
        $Bookings->persons  = Input::get('persons');
        $Bookings->room_type  = Input::get('room_type');
        $Bookings->save();
        // Send Email
        return Redirect::back();
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookingRequest  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookingRequest $request, Booking $booking)
    {
        $booking->update($request->all());
        return redirect()->route('admin.booking.index')->with('success', 'Booking ' . $booking->name . ' udpated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
