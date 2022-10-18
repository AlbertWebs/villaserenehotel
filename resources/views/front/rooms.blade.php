@extends('front.master')

@section('content')
<!-- Page Banner Start -->
<div class="page__banner" data-background="{{asset('theme/assets/img/banner/page-banner-9.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page__banner-title">
                    <h1>Book a Room Today</h1>
                    <div class="page__banner-title-menu">
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><span>-</span>Book with Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner End -->



<!-- Modern Room Area Start -->
<div class="modern__room section-padding" >
    <div class="container" >
        <div class="row">
            <div class="row deluxe__area-active" >
                <?php $rooms = DB::table('rooms')->get(); ?>
                @foreach($rooms as $room)

                    <div class="col-xl-6 col-lg-{{$room->width}} mb-30 {{$room->room_type}} room-width" style="border-radius:10px;">
                        <div class="deluxe__area-item" style="border-radius:10px;">
                            <div class="deluxe__area-item-image" style="border-radius:10px;">
                                <img style="border-radius:10px;" class="img__full" src="{{url('/')}}/uploads/rooms/{{$room->thumbnail}}" alt="">
                            </div>
                            <div class="deluxe__area-item-content" style="border-radius:10px;">
                                <h6><a href="#"><span>KES {{$room->price}}</span> / Night</a></h6>
                                <h4><a href="{{url('/')}}/bookings/{{$room->slug}}">{{$room->room_type}} | Room Number{{$room->room_number}}</a></h4>
                                <a class="simple-btn" href="{{url('/')}}/bookings/{{$room->slug}}"><i class="far fa-chevron-right"></i>Booking Now</a>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </div>
</div>
<!-- Modern Room Area End -->
@endsection
