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
<div class="modern__room section-padding">
    <div class="container">
        <div class="row">
            @foreach ($Rooms as $rooms)
            <?php
                $File = App\Models\File::where('room_id',$rooms->id)->first();
            ?>

            <div class="col-xl-4 col-lg-6 col-md-6 md-mb-30" style="margin-bottom:20px">
                <div class="deluxe__three-item">
                    <div class="deluxe__three-item-image">
                        <img style="border-radius:10px; border:5px solid #a7a7a7;" class="room-image-rooms" src="{{url('/')}}/uploads/rooms/{{$File->filename}}" alt="">
                        <div class="deluxe__three-item-image-content" style="border-radius:10px; display:">
                            <h4><a href="{{url('/')}}/bookings/{{$rooms->slug}}">{{$rooms->room_type}}</a><span>KES {{$rooms->price}}/Night</span></h4>
                            <p>{{$rooms->comment}} </p>
                            <div class="deluxe__three-item-image-content-meta">
                                <ul>
                                    <li><i class="fal fa-bed-alt"></i>({{$rooms->bed_capacity}}) bed's</li>
                                    <li><i class="fal fa-users"></i>({{$rooms->bed_capacity}}) Guest's</li>
                                </ul>
                            </div>
                            <div class="deluxe__three-item-image-content-bottom">
                                <a class="simple-btn" href="{{url('/')}}/bookings/{{$rooms->slug}}"><i class="far fa-chevron-right"></i>Book Now</a>
                                @if($rooms->status == "1")
                                <p><span style="font-weight: 900" class="text-success"><i class="fas fa-check text-success"></i> Available</span> <i class="fas fa-star text-warning"></i><span>{{$rooms->ratings_value}}</span>{{$rooms->ratings}}</p>
                                @else
                                <p><span style="font-weight: 900" class="text-danger"><i class="fas fa-frown text-danger"></i> Booked</span> <i class="fas fa-star text-warning"></i><span>{{$rooms->ratings_value}}</span>{{$rooms->ratings}}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</div>
<!-- Modern Room Area End -->
@endsection
