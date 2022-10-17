@extends('front.master')

@section('content')
<!-- Page Banner Start -->
<div class="page__banner" data-background="{{asset('theme/assets/img/banner/page-banner-9.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page__banner-title">
                    <h1>About Us</h1>
                    <div class="page__banner-title-menu">
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><span>-</span>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner End -->
<!-- Company Offers Start -->
<div class="offers__area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="offers__area-title">
                    <span class="subtitle__one">Company Offers</span>
                    <h2>Book now and save up to 15% On hotel rooms</h2>
                    <p>
                        Located in light industrial zoning allows for very quiet nights. There are important amenities within 10 miles. Our houses offer every convenience and feel just like “home”. This concept sets us apart and places us at the forefront of providing exceptional lodging services.We would be honored to serve you on your next visit to Villa Serene Hotel.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="offers__area-image">
                    <img class="img__full" style="border-radius:10px;" src="{{url('/')}}/uploads/images/hotels/Restaurant-main.jpeg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Company Offers End -->
<!-- Services Two Start -->
<div class="services__two">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-4 col-md-6 xl-mb-30">
                <div class="services__two-item">
                    <span>01</span>
                    <div class="services__two-item-icon">
                        <img src="{{asset('theme/assets/img/icon/cleaning-1.png')}}" alt="">
                    </div>
                    <div class="services__two-item-content">
                        <h4>Clean Rooms</h4>
                        <p>Villa Serene Hotel Ensures all rooms are cleaned and well Disinfected</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 lg-mb-30">
                <div class="services__two-item">
                    <span>02</span>
                    <div class="services__two-item-icon">
                        <img src="{{asset('theme/assets/img/icon/car-parking.png')}}" alt="">
                    </div>
                    <div class="services__two-item-content">
                        <h4>Free Parking</h4>
                        <p>Self-parking is available at Villa Serene Hotel
                            Over-sized parking is available upon request.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 lg-mb-30">
                <div class="services__two-item">
                    <span>03</span>
                    <div class="services__two-item-icon">
                        <img src="{{asset('theme/assets/img/icon/list-7.png')}}" alt="">
                    </div>
                    <div class="services__two-item-content">
                        <h4>WiFi</h4>
                        <p>Enjoy High Speed Internet at the Comfort of Your Room or Restaurant</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="services__two-item">
                    <span>04</span>
                    <div class="services__two-item-icon">
                        <img src="{{asset('theme/assets/img/icon/location-1.png')}}" alt="">
                    </div>
                    <div class="services__two-item-content">
                        <h4>PickUp & Drop</h4>
                        <p>We Organise PickUp and Drop Services for our visitors upon request</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services Two End -->
<!-- Gallery Area Start -->
{{-- <div class="gallery__area section-padding pb-0 overflow-hidden">
    <div class="container-fluid p-0">
        <div class="row">
            @foreach($File as $files)
            <div class="col-sm-3 sm-mb-10">
                <div class="gallery__area-item">
                    <a class="img-popup" href="{{url('/')}}/uploads/images/{{$files->filename}}"><img class="img__full room-image-rooms" src="{{url('/')}}/uploads/images/{{$files->filename}}" alt=""></a>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div> --}}
<!-- Gallery Area End -->
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
                        <img style="border-radius:10px; border:5px solid #a7a7a7;" class="room-image-rooms" src="{{url('/')}}/uploads/images/{{$rooms->thumbnail}}" alt="">
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
