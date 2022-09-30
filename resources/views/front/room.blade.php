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
                <div class="col-xl-3 col-lg-4 lg-mb-30">
                    <div class="all__sidebar">
                        <div class="all__sidebar-item">
                            <h5>Your Price</h5>
                            <div class="all__sidebar-item-price">
                                <ul>
                                    <li><i class="fal fa-bed-alt"></i>({{$rooms->bed_capacity}}) bed's</li>
                                    <li><i class="fal fa-users"></i>({{$rooms->bed_capacity}}) Guest's</li>
                                </ul>
                                <h4>KES {{$rooms->price}}<span>/Night</span></h4>
                                <a class="theme-btn" href="contact.html">Book Now<i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>

                        <div class="all__sidebar-item">
                            <h5>Search Now</h5>
                            <div class="all__sidebar-item-booking">
								<div class="all__sidebar-item-booking-item mb-10">
									<select name="select">
										<option value="1">Check In</option>
										<option value="2">Check In</option>
										<option value="3">Check In</option>
										<option value="4">Check In</option>
										<option value="5">Check In</option>
									</select>
								</div>
								<div class="all__sidebar-item-booking-item mb-10">
									<select name="select">
										<option value="1">Check Out</option>
										<option value="2">Check Out</option>
										<option value="3">Check Out</option>
										<option value="4">Check Out</option>
										<option value="5">Check Out</option>
									</select>
								</div>
								<div class="all__sidebar-item-booking-item mb-30">
									<select name="select">
										<option value="1">Room</option>
										<option value="2">1 Room</option>
										<option value="3">2 Room</option>
										<option value="4">3 Room</option>
										<option value="5">4 Room</option>
									</select>
								</div>
								<a class="theme-btn" href="#">Check<i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="room__details-right">
                        <div class="room__details-right-content">
                            <h3 class="mb-25">Luxury Room is the best online room for luxury hotels</h3>
                            <p class="mb-25">Praesent non ullamcorper ligula. Proin a mi vitae massa lacinia sollicitudin eget eu ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque consectetur rhoncus lobortis. Curabitur sit amet velit sagittis, pellentesque diam euismod, faucibus quam. Cras non rhoncus ipsum. Quisque mattis arcu metus, a fermentum justo semper in. Aliquam egestas metus at nunc aliquam</p>
                            <p class="m-0">id molestie ex ornare. Aliquam id arcu vel sem pretium porttitor non maximus diam. Quisque urna turpis, euismod sed elementum vel, pellentesque eu eros. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus musc.</p>
                            <div class="row mt-35 mb-35">
                                <?php
                                    $File = App\Models\File::where('unique',$rooms->id)->get();
                                ?>
                                @foreach ($File as $files)
                                <div class="col-sm-6 sm-mb-30">
                                    <img class="img__full" src="{{url('/')}}/uploads/images/{{$files->filename}}" alt="">
                                </div>
                                @endforeach

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
                                            <h6>Room Cleanig</h6>
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
                                        <h5>Do you pay before or after booking a hotel?</h5>
                                        <i class="far fa-long-arrow-up"></i>
                                    </div>
                                    <div class="room__details-right-faq-item-card-header-content active">
                                        <p>Praesent non ullamcorper ligula. Proin a mi vitae massa lacinia sollicitudin eget eu ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque consectetur rhoncus lobortis. Curabitur sit amet velit sagittis, pellentesque diam euismod, faucibus quam. Cras non rhoncus ipsum. Quisque mattis arcu metus, a fermentum justo semper in.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="room__details-right-faq-item">
                                <div class="room__details-right-faq-item-card">
                                    <div class="room__details-right-faq-item-card-header">
                                        <h5>What documents are needed for hotel booking?</h5>
                                        <i class="far fa-long-arrow-down"></i>
                                    </div>
                                    <div class="room__details-right-faq-item-card-header-content display-none">
                                        <p>Praesent non ullamcorper ligula. Proin a mi vitae massa lacinia sollicitudin eget eu ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque consectetur rhoncus lobortis. Curabitur sit amet velit sagittis, pellentesque diam euismod, faucibus quam. Cras non rhoncus ipsum. Quisque mattis arcu metus, a fermentum justo semper in.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="room__details-right-faq-item">
                                <div class="room__details-right-faq-item-card">
                                    <div class="room__details-right-faq-item-card-header">
                                        <h5>Do hotels charge your card before you check in?</h5>
                                        <i class="far fa-long-arrow-down"></i>
                                    </div>
                                    <div class="room__details-right-faq-item-card-header-content display-none">
                                        <p>Praesent non ullamcorper ligula. Proin a mi vitae massa lacinia sollicitudin eget eu ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque consectetur rhoncus lobortis. Curabitur sit amet velit sagittis, pellentesque diam euismod, faucibus quam. Cras non rhoncus ipsum. Quisque mattis arcu metus, a fermentum justo semper in.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- Room Details End -->

@endforeach
@endsection
