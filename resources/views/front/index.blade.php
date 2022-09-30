@extends('front.master')

@section('content')
	<!-- Banner Area Start -->
	<div class="banner__area" data-background="{{asset('theme/assets/img/bg-3.jpg')}}">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="banner__area-title">
						<h1>Karibu Kitale<span>Villa Serene Hotel</span></h1>
                        {{-- <h1>Best Hotel in Kitale<span>Home Away From Home</span></h1> --}}
						<div class="banner__area-title-video">
							<div class="video__play">
								<a class="video-popup" href="https://www.youtube.com/watch?v=2DRHznazSLI"><i class="fas fa-play"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<form action="#">
					<div class="check__area">
						<div class="check__area-item">
							<p>Check In<input id="date" type="date"></p>
						</div>
						<div class="check__area-item">
							<p>Check Out<input id="date2" type="date"></p>
						</div>
						<div class="check__area-item">
							<div class="check__area-item-room">
								<p>Room</p>
								<select name="select">
									<option value="single">Single</option>
									<option value="double">Double</option>
								</select>
							</div>
						</div>
						<div class="check__area-item button">
							<button class="theme-btn" type="submit">Check Now</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Banner Area End -->
	<!-- Accommodations Area Start -->
	<div class="accommodations__area section-padding">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-5 col-lg-6 lg-mb-30">
					<div class="accommodations__area-title">
						<span class="subtitle__one">Food & Accommodations</span>
						<h2>Welcome to Villa Serene Hotel</h2>
						<p>
                            Located in light industrial zoning allows for very quiet nights. There are important amenities within 10 miles.
Our houses offer every convenience and feel just like “home”. This concept sets us apart and places us at the forefront of providing exceptional  lodging services.We would be honored to serve you on your next visit to Villa Serene Hotel.
                        </p>
						<a class="theme-btn" href="{{url('/')}}/about-us">Read More<i class="fal fa-long-arrow-right"></i></a>
					</div>
				</div>
				<div class="col-xl-7 col-lg-6">
					<div class="accommodations__area-right">
						<div class="accommodations__area-right-image">
							<img style="border-radius:10px; max-height:350px; max-width:530px;" src="{{url('/')}}/uploads/images/badroom.png" alt="">
							<div class="accommodations__area-right-image-two">
								<img style="border-radius:10px" src="{{url('/')}}/uploads/images/foood.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Accommodations Area End -->
	<!-- Deluxe Area Start -->
	<div class="deluxe__area section-padding">
		<div class="container">
			<div class="row align-items-end mb-60">
				<div class="col-xl-5">
					<div class="deluxe__area-title">
						<span class="subtitle__one">Single & Double</span>
						<h2>Our Rooms</h2>
					</div>
				</div>
				<div class="col-xl-7">
					<div class="deluxe__area-btn">
						<ul>
							<li class="active" data-filter="*">All Rooms</li>
							<li data-filter=".luxury">Luxury</li>
							<li data-filter=".single">Single</li>
							<li data-filter=".suite">Small Suite</li>
							<li data-filter=".family">Family</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row deluxe__area-active">
				<div class="col-xl-3 col-lg-4 mb-30 suite">
					<div class="deluxe__area-item">
						<div class="deluxe__area-item-image" style="border-radius:10px;">
							<img style="border-radius:10px;" class="img__full" src="{{asset('theme/assets/img/luxury/luxury-1.jpg')}}" alt="">
						</div>
						<div class="deluxe__area-item-content">
							<h6><a href="#"><span>KES 13400</span> / Night</a></h6>
							<h4><a href="room-details.html">Small Suite</a></h4>
							<a class="simple-btn" href="{{url('/')}}/book-room/room-slung"><i class="far fa-chevron-right"></i>Booking Now</a>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-8 mb-30 suite">
					<div class="deluxe__area-item deluxe__area-item-hover">
						<div class="deluxe__area-item-image">
							<img style="border-radius:10px;" class="img__full" src="{{asset('theme/assets/img/luxury/luxury-2.jpg')}}" alt="">
						</div>
						<div class="deluxe__area-item-content">
							<h6><a href="#"><span>KES 19900</span> / Night</a></h6>
							<h4><a href="room-details.html">Deluxe Room</a></h4>
							<a class="simple-btn" href="{{url('/')}}/book-room/room-slung"><i class="far fa-chevron-right"></i>Booking Now</a>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 mb-30 family">
					<div class="deluxe__area-item">
						<div class="deluxe__area-item-image">
							<img style="border-radius:10px;" class="img__full" src="{{asset('theme/assets/img/luxury/luxury-3.jpg')}}" alt="">
						</div>
						<div class="deluxe__area-item-content">
							<h6><a href="#"><span>KES 31900</span> / Night</a></h6>
							<h4><a href="room-details.html">Family Room</a></h4>
							<a class="simple-btn" href="{{url('/')}}/book-room/room-slung"><i class="far fa-chevron-right"></i>Booking Now</a>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-8 lg-mb-30 single">
					<div class="deluxe__area-item">
						<div class="deluxe__area-item-image">
							<img style="border-radius:10px;" class="img__full" src="{{asset('theme/assets/img/luxury/luxury-4.jpg')}}" alt="">
						</div>
						<div class="deluxe__area-item-content">
							<h6><a href="#"><span>KES 16900</span> / Night</a></h6>
							<h4><a href="room-details.html">Single Room</a></h4>
							<a class="simple-btn" href="{{url('/')}}/book-room/room-slung"><i class="far fa-chevron-right"></i>Booking Now</a>
						</div>
					</div>
				</div>
				<div class="col-xl-6 luxury">
					<div class="deluxe__area-item" style="border-radius:10px;">
						<div class="deluxe__area-item-image">
							<img style="border-radius:10px;" class="img__full" src="{{asset('theme/assets/img/luxury/luxury-5.jpg')}}" alt="">
						</div>
						<div class="deluxe__area-item-content">
							<h6><a href="#"><span>KES 24900</span> / Night</a></h6>
							<h4><a href="room-details.html">Luxury Room</a></h4>
							<a class="simple-btn" href="{{url('/')}}/book-room/room-slung"><i class="far fa-chevron-right"></i>Booking Now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Deluxe Area End -->
	<!-- Video Area Start -->
	<div class="video__area" data-background="{{asset('theme/assets/img/Restaurant-main.jpeg')}}">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xxl-6 col-xl-7 col-lg-8">
					<div class="video__area-title">
						<h2>Book hotel Rooms, Free WiFI , Free Parking & Amazing Meals.</h2>
					</div>
				</div>
				<div class="col-xxl-6 col-xl-5 col-lg-4">
					<div class="video__area-right">
						<div class="video__play">
							<a class="video-popup" href="https://www.youtube.com/watch?v=2DRHznazSLI"><i class="fas fa-play"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Video Area End -->
	<!-- Services Area Start -->
	<div class="services__area section-padding">
		<div class="container">
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 lg-mb-30">
					<div class="services__area-item">
						<div class="services__area-item-icon">
							<img src="{{asset('theme/assets/img/icon/cleaning.png')}}" alt="">
						</div>
						<div class="services__area-item-content">
							<h5><a href="#">Clean Rooms</a></h5>
							<p>
                                 Villa Serene Hotel Ensures all rooms are cleaned and well Disinfected
                            </p>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 sm-mb-30">
					<div class="services__area-item">
						<div class="services__area-item-icon">
							<img src="{{asset('theme/assets/img/icon/wifi.png')}}" alt="">
						</div>
						<div class="services__area-item-content">
							<h5><a href="#">Room Wifi</a></h5>
							<p>
                                Enjoy High Speed Internet at the Comfort of Your Room or Restaurant
                            </p>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
					<div class="services__area-item">
						<div class="services__area-item-icon">
							<img src="{{asset('theme/assets/img/icon/location.png')}}" alt="">
						</div>
						<div class="services__area-item-content">
							<h5><a href="#">Pickup & Drop</a></h5>
							<p>We Organise PickUp and Drop Services for our visitors upon request</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Services Area End -->
	<!-- Feature Area Start -->
	<div class="feature__area">
		<div class="container">
			<div class="row align-items-center bg-left mb-60">
				<div class="col-xl-6 col-lg-6">
					<div class="feature__area-image">
						<img style="border-radius:10px" class="img__full" src="{{url('/')}}/uploads/images/hotels/Restaurant-main.jpeg" alt="">
					</div>
				</div>
				<div class="col-xl-6 col-lg-6">
					<div class="feature__area-left">
						<div class="feature__area-left-title">
							<span class="subtitle__one">Our Food</span>
							<h2>Our Restaurant</h2>
							<p>
                                Experience the pleasure of fine dining at Villa Serene Restaurant. The restaurant serves all day meals with a spread of diverse African cuisine. Villa Serene is operational 24/7 with all three major meals. Apart from excellent and comforting and family friendly setup, the restaurant boasts of a beautiful surrounding where you can cherish the scene of mother nature making it the finest luxury lodgins in Kitale.
                            </p>
							<a class="theme-border-btn" href="{{url('/')}}/about-us">Learn More<i class="fal fa-long-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row align-items-center bg-right mb-60">
				<div class="col-xl-6 col-lg-6  order-last order-lg-first">
					<div class="feature__area-left">
						<div class="feature__area-left-title">
							<span class="subtitle__one">Worried about Security? WE GOT YOU!</span>
							<h2>Free Parking Space</h2>
							<p>
                                Our Villa is located at a secured/fenced compound ensuring that all vehicles parked within the compound is safe during the stay period.
                                Self-parking is available at Villa Serene Hotel<br>
                                Over-sized parking is available upon request.
                            </p>
							<a class="theme-border-btn" href="{{url('/')}}/bookings">Explore<i class="fal fa-long-arrow-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6">
					<div class="feature__area-image">
						<img style="border-radius:10px" class="img__full" src="{{url('/')}}/uploads/images/parking.jpg" alt="">
					</div>
				</div>
			</div>
			<div class="row align-items-center bg-left mb-60">
				<div class="col-xl-6 col-lg-6">
					<div class="feature__area-image">
						<img style="border-radius:10px" class="img__full" src="{{url('/')}}/uploads/images/268155528.jpg" alt="">
					</div>
				</div>
				<div class="col-xl-6 col-lg-6">
					<div class="feature__area-left">
						<div class="feature__area-left-title">
							<span class="subtitle__one">Accommodations</span>
							<h2>Our Rooms</h2>
							<p>
                                Unwind in the magic of our rooms, from waking up to the sound of nature, to enjoy the peace and serenity of Our Villa. All our rooms are self contained well spaced and are equipped with basic facilities.
                                <br><br>
                                For those yearning to experience unmatched sophistication, book one of our best hotel rooms in Kitale and let us take care of the rest.
                            </p>
                            <p>

                            </p>
							<a class="theme-border-btn" href="{{url('/')}}/bookings">Book Now<i class="fal fa-long-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- Feature Area End -->
	<!-- Testimonial Area Start -->
	<div class="testimonial__area section-padding pb-0">
		<div class="container" style="border-radius:10px">
			<div class="row" >
				<div class="col-xl-12" >
				   <div class="testimonial__area-bg" style="border-radius:10px !important;">
					<div class="swiper testimonial__slider">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="testimonial__area-item">
									<div class="testimonial__area-item-image">
										<img class="img__full" src="{{url('/')}}/uploads/images/avatar.png" alt="">
									</div>
									<div class="testimonial__area-item-content">
										<h4>Joanne Yego</h4>
										<span>Customer</span>
										<p>The customer service is commendable, starting from reception, room service, restaurant with sweet fresh food which is served generously. I would recommend anyone to stay here during your trips around Kitale town</p>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="testimonial__area-item">
									<div class="testimonial__area-item-image">
										<img class="img__full" src="{{url('/')}}/uploads/images/avatar.png" alt="">
									</div>
									<div class="testimonial__area-item-content">
										<h4>GORDON OCHIENG</h4>
										<span>Customer</span>
										<p>Just as the name goes,,a very serene place to be ,very quiet,lovely food and really well presented people to host you.The rooms are outstanding and very clean too</p>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="testimonial__area-item">
									<div class="testimonial__area-item-image">
										<img class="img__full" src="{{url('/')}}/uploads/images/avatar.png" alt="">
									</div>
									<div class="testimonial__area-item-content">
										<h4>Joan Chebet</h4>
										<span>Customer</span>
										<p>The rooms are very nice and clean but what actually stood out was the services, they offer really good services and they are very polite, the food is also nice 🥰 loved everything</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="testimonial__area-item-dots">
						<div class="pagination"></div>
					</div>
				   </div>
				</div>
			</div>
		</div>
	</div>
	<!-- Testimonial Area End -->
	<!-- Blog Area Start -->
	<div class="blog__area section-padding">
		<div class="container">
			<div class="row mb-60">
				<div class="col-xl-12">
					<div class="blog__area-title">
						<span class="subtitle__one">Our Blog</span>
						<h2>Read Our Blog amd News</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-4 col-lg-6 xl-mb-30">
					<div class="blog__area-item">
						<div class="blog__area-item-image">
							<a href="blog-details.html"><img src="{{asset('theme/assets/img/blog/blog-1.jpg')}}" alt=""></a>
						</div>
						<div class="blog__area-item-content">
							<div class="blog__area-item-content-box">
								<div class="blog__area-item-content-box-date">
									<h3>27</h3>
									<span>July 2022</span>
								</div>
								<div class="blog__area-item-content-box-title">
									<h5><a href="blog-details.html">The ultimate guide to finding the best hotels in your area.</a></h5>
								</div>
							</div>
							<div class="blog__area-item-content-btn">
								<a class="simple-btn-2" href="blog-details.html">Read More<i class="fal fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6 lg-mb-30">
					<div class="blog__area-item blog__area-item-hover">
						<div class="blog__area-item-image">
							<a href="blog-details.html"><img src="{{asset('theme/assets/img/blog/blog-2.jpg')}}" alt=""></a>
						</div>
						<div class="blog__area-item-content">
							<div class="blog__area-item-content-box">
								<div class="blog__area-item-content-box-date">
									<h3>27</h3>
									<span>July 2022</span>
								</div>
								<div class="blog__area-item-content-box-title">
									<h5><a href="blog-details.html">Book a room Today most Affordable Rates.</a></h5>
								</div>
							</div>
							<div class="blog__area-item-content-btn">
								<a class="simple-btn-2" href="blog-details.html">Read More<i class="fal fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6">
					<div class="blog__area-item">
						<div class="blog__area-item-image">
							<a href="blog-details.html"><img src="{{asset('theme/assets/img/blog/blog-3.jpg')}}" alt=""></a>
						</div>
						<div class="blog__area-item-content">
							<div class="blog__area-item-content-box">
								<div class="blog__area-item-content-box-date">
									<h3>27</h3>
									<span>July 2022</span>
								</div>
								<div class="blog__area-item-content-box-title">
									<h5><a href="blog-details.html">Hotel Booking is the best choice for hotel booking.</a></h5>
								</div>
							</div>
							<div class="blog__area-item-content-btn">
								<a class="simple-btn-2" href="blog-details.html">Read More<i class="fal fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Blog Area End -->
@endsection
