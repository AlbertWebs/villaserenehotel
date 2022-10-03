@extends('front.master')

@section('content')
@foreach ($Rooms as $rooms)


<!-- Page Banner Start -->
<div class="page__banner" data-background="{{asset('theme/assets/img/banner/page-banner-9.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page__banner-title">
                    <h1>{{$rooms->room_type}} Room</h1>
                    <div class="page__banner-title-menu">
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><span>-</span>{{$rooms->room_type}} Room</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner End -->

	<!-- Room Details Start -->
    <div class="room__details section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 lg-mb-30">
                    <div class="all__sidebar">
                        <div class="all__sidebar-item">
                            <h5>Your Price</h5>
                            <div class="all__sidebar-item-price">
                                <ul>
                                    <li><i class="fal fa-bed-alt"></i>({{$rooms->bed_capacity}}) bed's</li>
                                    <li><i class="fal fa-users"></i>({{$rooms->bed_capacity}}) Guest's</li>
                                </ul>
                                <h4>KES {{$rooms->price}}<span>/Night</span></h4>
                                {{-- <a class="theme-btn" href="{{url('/')}}/book-now/{{$rooms->slug}}">Book Now<i class="fal fa-long-arrow-right"></i></a> --}}
                            </div>
                        </div>

                        <div class="all__sidebar-item">
                            <h5>Book Online <i class="far fa-calendar"></i></h5>
                            <div class="all__sidebar-item-booking">
                            <form acton="{{route('initiate-payment')}}" method="POST">
                                @csrf

								<div class="all__sidebar-item-booking-item mb-10">
									<div class="col-sm-12 mb-30">
                                        <div class="contact__area-form-item">
                                            <i class="far fa-user"></i>
                                            <input type="text" name="first_name" placeholder="Full Name" required="required">
                                        </div>
                                    </div>
								</div>
                                <div class="all__sidebar-item-booking-item mb-10">
									<div class="col-sm-12 mb-30">
                                        <div class="contact__area-form-item">
                                            <i class="far fa-envelope"></i>
                                            <input type="email" name="email" placeholder="email address" required="required">
                                        </div>
                                    </div>
								</div>
                                <input type="hidden" name="amount" value="{{$rooms->price}}">
                                <input type="hidden" name="currency" value="KES">
                                <div class="all__sidebar-item-booking-item mb-10">
									<div class="col-sm-12 mb-30">
                                        <div class="contact__area-form-item">
                                            <i class="far fa-phone"></i>
                                            <input type="text" name="mobile" placeholder="Mobile" required="required">
                                        </div>
                                    </div>
								</div>
                                <div class="all__sidebar-item-booking-item mb-10">
									<div class="col-sm-12 mb-30">
                                        <div class="contact__area-form-item">
                                            <i class="far fa-map-marker"></i>
                                            <input type="text" name="address" placeholder="address" required="required">
                                        </div>
                                    </div>
								</div>
                                <div class="all__sidebar-item-booking-item mb-10">
                                   <div class="row">
                                        <div class="col-sm-6 mb-30">
                                            <div class="contact__area-form-item">
                                                <i class="far fa-calendar"></i>
                                                <input type="date" name="arrive" placeholder="arrive" required="required">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mb-30">
                                            <div class="contact__area-form-item">
                                                <i class="far fa-calendar"></i>
                                                <input type="date" name="depart" placeholder="depart" required="required">
                                            </div>
                                        </div>
                                   </div>
								</div>
                                <div class="all__sidebar-item-booking-item mb-10">
                                    <div class="row">
                                        <div class="col-sm-6 mb-30">
                                            <div class="contact__area-form-item">
                                                <i class="far fa-home"></i>
                                                <input type="number" name="persons" placeholder="persons" required="required">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mb-30">
                                            <div class="contact__area-form-item">
                                                <i class="far fa-home"></i>
                                                <input type="text" value="{{$rooms->room_type}}" name="room_type" placeholder="address" required="required">
                                            </div>
                                        </div>
                                    </div>
								</div>

                                <button class="theme-btn" type="submit">Submit Now<i class="fal fa-long-arrow-right"></i></button>
                            </form>





                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8">
                    <div class="room__details-right">
                        <div class="room__details-right-content">
                            <h3 class="mb-25">{{$rooms->room_type}} Room - {{$rooms->comment}}</h3>
                            <p class="mb-25">Praesent non ullamcorper ligula. Proin a mi vitae massa lacinia sollicitudin eget eu ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque consectetur rhoncus lobortis. Curabitur sit amet velit sagittis, pellentesque diam euismod, faucibus quam. Cras non rhoncus ipsum. Quisque mattis arcu metus, a fermentum justo semper in. Aliquam egestas metus at nunc aliquam</p>
                            <p class="m-0">id molestie ex ornare. Aliquam id arcu vel sem pretium porttitor non maximus diam. Quisque urna turpis, euismod sed elementum vel, pellentesque eu eros. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus musc.</p>
                            <div class="row mb-35">
                                <?php
                                    $File = App\Models\File::where('unique',$rooms->id)->get();
                                ?>

                                <!-- Gallery Area Start -->
                                <div class="gallery__area section-padding pb-0 overflow-hidden">
                                    <div class="container-fluid p-0">
                                        <div class="row">
                                            @foreach ($File as $files)
                                            <div class="col-lg-3 col-sm-12 sm-mb-10" style="margin-bottom:10px;">
                                                <div class="gallery__area-item">
                                                    <a class="img-popup" href="{{url('/')}}/uploads/images/{{$files->filename}}"><img style="border-radius:10px; border:5px solid #a7a7a7;" class="img__full room-image" src="{{url('/')}}/uploads/images/{{$files->filename}}" alt=""></a>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <!-- Gallery Area End -->

                            </div>
                            <h3 class="mb-25">Special check-in instructions</h3>
                            <p class="mb-25">Praesent non ullamcorper ligula. Proin a mi vitae massa lacinia sollicitudin eget eu ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque consectetur rhoncus lobortis. Curabitur sit amet velit sagittis, pellentesque diam euismod, faucibus quam. Cras non rhoncus ipsum. Quisque mattis arcu metus, a fermentum justo semper in. Aliquam egestas metus at nunc aliquam</p>
                            <p class="m-0">id molestie ex ornare. Aliquam id arcu vel sem pretium porttitor non maximus diam. Quisque urna turpis, euismod sed elementum vel, pellentesque eu eros. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus musc.</p>
                        </div>
                        <div class="room__details-right-list">
                            <h3>Amenities</h3>
                            <div class="row mt-35">
                                <div class="col-md-4 col-sm-6 mb-35">
                                    <div class="room__details-right-list-item">
                                        <div class="room__details-right-list-item-icon">
                                            <img src="{{asset('theme/assets/img/icon/list-1.png')}}" alt="">
                                        </div>
                                        <div class="room__details-right-list-item-title">
                                            <h6>Room Cleaning</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 sm-mb-35">
                                    <div class="room__details-right-list-item">
                                        <div class="room__details-right-list-item-icon">
                                            <img src="{{asset('theme/assets/img/icon/list-2.png')}}" alt="">
                                        </div>
                                        <div class="room__details-right-list-item-title">
                                            <h6>Car Parking</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 sm-mb-35">
                                    <div class="room__details-right-list-item">
                                        <div class="room__details-right-list-item-icon">
                                            <img src="{{asset('theme/assets/img/icon/list-3.png')}}" alt="">
                                        </div>
                                        <div class="room__details-right-list-item-title">
                                            <h6>Pick Up & Drop</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 mb-35">
                                    <div class="room__details-right-list-item">
                                        <div class="room__details-right-list-item-icon">
                                            <img src="{{asset('theme/assets/img/icon/list-7.png')}}" alt="">
                                        </div>
                                        <div class="room__details-right-list-item-title">
                                            <h6>Home Wi-Fi</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 md-mb-35">
                                    <div class="room__details-right-list-item">
                                        <div class="room__details-right-list-item-icon">
                                            <img src="{{asset('theme/assets/img/icon/list-8.png')}}" alt="">
                                        </div>
                                        <div class="room__details-right-list-item-title">
                                            <h6>BreakFast</h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="room__details-right-faq mt-50">
                            <div class="room__details-right-faq-item">
                                <div class="room__details-right-faq-item-card">
                                    <div class="room__details-right-faq-item-card-header">
                                        <h5>
                                            Do I pay when I book or when I leave my hotel?
                                        </h5>
                                        <i class="far fa-long-arrow-up"></i>
                                    </div>
                                    <div class="room__details-right-faq-item-card-header-content active">
                                        <p>
                                            Most of your bookings will be pay when you leave. Exceptions to this, special offers etc, may require you to pay when you book. This will be made clear to you during booking process.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="room__details-right-faq-item">
                                <div class="room__details-right-faq-item-card">
                                    <div class="room__details-right-faq-item-card-header">
                                        <h5>I have made a booking where is my confirmation email?</h5>
                                        <i class="far fa-long-arrow-down"></i>
                                    </div>
                                    <div class="room__details-right-faq-item-card-header-content display-none">
                                        <p>
                                            We strive to make sure our system is as infallible as is possible but, sometimes we do have a few technical problems. If you have not got your confirmation then telephone us on +254796050620 and we will get it manually resent to you A.S.A.P.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="room__details-right-faq-item">
                                <div class="room__details-right-faq-item-card">
                                    <div class="room__details-right-faq-item-card-header">
                                        <h5>Where is the hotel / B&B located, and how do I get there?</h5>
                                        <i class="far fa-long-arrow-down"></i>
                                    </div>
                                    <div class="room__details-right-faq-item-card-header-content display-none">
                                        <p>
                                            The confirmation email sent following a booking provides the hotels full address, directions, telephone number and transport information. this is as provided to us by the establishments themselves. If they don't know how to get there no one will.
                                            <br>
                                            Also, our hotel brochure pages have a map link on them. This will give you a map of the local street layout, which you can print out. Our aim is to make it as easy as possible for you to get there once you have booked.
                                            <br>
                                            Lastly, We are on google and you can find us on this <a href="https://goo.gl/maps/JcFdrJwRJmRRLXxy7"><strong>Map to Villa Serene Hotel</strong></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            {{--  --}}
                            <div class="room__details-right-faq-item">
                                <div class="room__details-right-faq-item-card">
                                    <div class="room__details-right-faq-item-card-header">
                                        <h5>What is provided in the price? Is breakfast included?</h5>
                                        <i class="far fa-long-arrow-down"></i>
                                    </div>
                                    <div class="room__details-right-faq-item-card-header-content display-none">
                                        <p>
                                            The individual hotel pages that you view give definitive details regarding the facilities, services and what is included in your booking price. This is stipulated on an individual hotel by hotel and room by room basis. There should also be confirmation of this on the booking pages as you go through our system. If it does not say breakfast included then it will be charged for separately by the hotel.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            {{--  --}}
                            {{--  --}}
                            <div class="room__details-right-faq-item">
                                <div class="room__details-right-faq-item-card">
                                    <div class="room__details-right-faq-item-card-header">
                                        <h5>How do I cancel my booking?</h5>
                                        <i class="far fa-long-arrow-down"></i>
                                    </div>
                                    <div class="room__details-right-faq-item-card-header-content display-none">
                                        <p>
                                            The confirmation email sent following a booking of accommodation provides details for cancellation. There is a link that allows you to cancel your booking.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            {{--  --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- Room Details End -->

@endforeach
@endsection
