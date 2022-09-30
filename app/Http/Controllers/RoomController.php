<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRoomRequest;
use App\Http\Requests\UpdateRoomRequest;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Rooms = Room::all();
        return view('admin.rooms.index', compact('Rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Rooms = Room::all();
        return view('admin.rooms.create', compact('Rooms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRoomRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $room_type = $request->room_type;
        $room_number = $request->room_number;
        $combine = $room_type . ' ' . $room_number;
        $slug = \Str::slug($combine);
        $request->request->add(['slug' => $slug]);
        $booking = Room::create($request->except(['_token']));
        return redirect()->route('admin.view.room')->with('success', 'Room ' . $booking->id . ' created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        $Booking = Booking::find($booking);
        return view('admin.bookings.edit', compact('Booking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit($room)
    {
        $Room = Room::find($room);
        return view('admin.rooms.edit', compact('Room'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRoomRequest  $request
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $room_type = $request->room_type;
        $room_number = $request->room_number;
        $combine = $room_type . ' ' . $room_number;
        $slug = \Str::slug($combine);
        $request->request->add(['slug' => $slug]);
        $data = $request->except(['_token']);
        Room::where('id',$id)->update($data);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy($room)
    {
        Room::where('id',$room)->delete();
        return redirect()->route('admin.view.room');
    }
}
