<!DOCTYPE html>
<html lang="en">
    <?php $Setting = \App\Models\Setting::find('1'); ?>
<head>
	<!-- Start Meta -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="description" content="Villa Serene Hotel - Luxury Hotel In Kitale, Restaurant in Kitale "/>
	<meta name="keywords" content="Villa Serene Hotel"/>
	<meta name="author" content="Designekta Studios">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- OG --}}
    <link rel="canonical" href="{{url('/')}}"/>
    <meta property="og:description" content="Villa Serene Hotel - Luxury Hotel In Kitale, Restaurant in Kitale">
    <meta property="og:image" content="{{url('/')}}/favicon/apple-icon180.jpeg" />
    <meta property="fb:app_id" content="431980657174772" />
    <meta property="og:title" content="Villa Serene Hotel  - Best Lodging Hotel in Kitale - Self Contain Rooms" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{url('/')}}" />
    {{--  --}}
	<!-- Title of Site -->
	<title>Villa Serene Hotel  - Best Lodging Hotel in Kitale - Self Contain Rooms</title>
	<!-- Favicons -->
	@include('favicon')
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('theme/assets/css/bootstrap.min.css')}}">
	<!-- Font Awesome CSS -->
	<link rel="stylesheet" href="{{asset('theme/assets/css/all.css')}}">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="{{asset('theme/assets/css/animate.css')}}">
	<!-- Nice Select CSS -->
	<link rel="stylesheet" href="{{asset('theme/assets/css/nice-select.css')}}">
	<!-- Swiper Bundle CSS -->
	<link rel="stylesheet" href="{{asset('theme/assets/css/swiper-bundle.min.css')}}">
	<!-- Magnific Popup CSS -->
	<link rel="stylesheet" href="{{asset('theme/assets/css/magnific-popup.css')}}">
	<!-- Mean Menu CSS -->
	<link rel="stylesheet" href="{{asset('theme/assets/css/meanmenu.min.css')}}">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="{{asset('theme/assets/sass/style.css')}}">
</head>

<body>
	<!-- Preloader start -->
	<div class="theme-loader">
		<div class="spinner">
			<div class="double-bounce1"></div>
			<div class="double-bounce2"></div>
		</div>
	</div>
	<!-- Preloader end -->
	<!-- Header Area Start -->
	<div class="header__sticky">
		<div class="header__area">
			<div class="container custom__container">
				<div class="header__area-menubar">
					<div class="header__area-menubar-left">
						<div class="header__area-menubar-left-logo">
							<a href="{{url('/')}}"><img src="{{url('/')}}/uploads/logo/logo.png" alt=""></a>
							<div class="responsive-menu"></div>
						</div>
					</div>
					<div class="header__area-menubar-right">
						<div class="header__area-menubar-right-menu menu-responsive">
							<ul id="mobilemenu">
								{{-- <li><a href="{{url('/')}}">Home</a>

								</li> --}}
                                <li><a href="{{url('/about-us')}}">About Us</a>

								</li>

                                <li><a href="{{url('/')}}#restaurant">Restaurant</a>

								</li>
                                <li><a href="{{url('/')}}/bookings">Rooms</a>

								</li>


								<li><a href="{{url('/contact-us')}}"><span class="fa fa-map-marker"></span> Find Us</a></li>
							</ul>
						</div>
					</div>
					<div class="header__area-menubar-right-box">
						<div class="header__area-menubar-right-box-btn">
							<a class="theme-btn" href="{{url('/')}}/bookings">Book Now<i class="fal fa-long-arrow-right"></i></a>
                            <a class="theme-btn" href="tel:{{$Setting->mobile_one}}">Call Us<i class="fal fa-phone"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Header Area End -->
    @yield('content')
	<!-- Footer Area Start -->
	<div class="footer__area">
		<div class="container">
			<div class="row">
				<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 sm-mb-30">
					<div class="footer__area-widget">
						<div class="footer__area-widget-about">
							<div class="footer__area-widget-about-logo">
								<a href="{{url('/')}}"><img  src="{{url('/')}}/uploads/logo/logo.png" alt=""></a>
							</div>

							<p>We have created a unique lodging concept geared to the seasoned business traveler and we are the #1 comfort hotel services in Kitale.</p>
							<div class="footer__area-widget-about-social">
								<ul>
                                    <li><a href="{{$Setting->facebook}}"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li><a target="new" href="https://tawk.to/chat/633fce7c54f06e12d898dfbf/1geojt6ic"><i class="fa fa-comment"></i></a>
                                    </li>
                                    <li><a href="{{$Setting->instagram}}"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li><a href="{{$Setting->linkedin}}"><i class="fab fa-linkedin"></i></a>
                                    </li>
                                    <li><a target="new" href="https://goo.gl/maps/oddymmdLVoFDvv9A8"><i class="fa fa-map-marker"></i></a>
                                    </li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 lg-mb-30">
					<div class="footer__area-widget">
						<h5>Information</h5>
						<div class="footer__area-widget-contact">
							<div class="footer__area-widget-contact-item">
								<div class="footer__area-widget-contact-item-icon">
									<i class="fal fa-map-marked-alt"></i>
								</div>
								<div class="footer__area-widget-contact-item-content">
									<span><a href="#">{{$Setting->address}}</a></span>
								</div>
							</div>
							<div class="footer__area-widget-contact-item">
								<div class="footer__area-widget-contact-item-icon">
									<i class="fal fa-envelope-open-text"></i>
								</div>
								<div class="footer__area-widget-contact-item-content">
									<span><a href="mailto:{{$Setting->email_one}}">{{$Setting->email_one}}</a></span>
								</div>
							</div>
							<div class="footer__area-widget-contact-item">
								<div class="footer__area-widget-contact-item-icon">
									<i class="fal fa-phone-alt"></i>
								</div>
								<div class="footer__area-widget-contact-item-content">
									<span><a href="tel:{{$Setting->mobile_one}}">{{$Setting->mobile_one}}</a></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-2 col-lg-2 col-md-5 col-sm-4 sm-mb-30">
					<div class="footer__area-widget">
						<h5>Quick Links</h5>
						<div class="footer__area-widget-menu">
							<ul>
								<li><a href="{{url('/')}}"><i class="fal fa-angle-double-right"></i>Home</a></li>
								<li><a href="{{url('/')}}"><i class="fal fa-angle-double-right"></i>Restaurant</a></li>
								<li><a href="{{url('/')}}"><i class="fal fa-angle-double-right"></i>Rooms</a></li>
								<li><a href="{{url('/')}}/contact-us"><i class="fal fa-angle-double-right"></i>Contact Us</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-7 col-sm-8">
					<div class="footer__area-widget">
						<h5>Subscribe</h5>
						<div class="footer__area-widget-subscribe">
							<form action="#">
								<input type="text" name="email" placeholder="Email Address" required="">
								<button type="submit"><i class="fal fa-hand-pointer"></i></button>
							</form>
						</div>
                        {{-- <br>
                        <div class="footer__area-widget-about-logo">
                            <a style="border:4px solid #a7a7a7" href="https://www.tripadvisor.com/Hotel_Review-g678698-d21505946-Reviews-Villa_Serene_Hotel-Kitale_Rift_Valley_Province.html"><img style="width:150px; height:auto"  src="{{url('/')}}/uploads/icons/trip.jpg" alt=""></a>
                            <a style="border:4px solid #a7a7a7" href="https://www.airbnb.com/rooms/46559026?guests=1&adults=1&s=67&unique_share_id=5de32231-8c45-415b-b3ec-5a7b2005b1e8"><img style="width:150px; max-height:70px; height:auto" src="{{url('/')}}/uploads/icons/Airbnb-logo.jpg" alt=""></a>

                            <a style="border:4px solid #a7a7a7" href="https://www.booking.com/hotel/ke/villa-serene.html"><img style="width:150px; max-height:70px; height:auto" src="{{url('/')}}/uploads/icons/Booking-Logo.png" alt=""></a>
                            <a style="border:4px solid #a7a7a7" href="https://planetofhotels.com/en/kenya/kitale/villa-serene-hotel"><img style="width:150px; max-height:70px; height:auto" src="{{url('/')}}/uploads/icons/planet-of-hotels_full_1565010282.jpg" alt=""></a>
                        </div> --}}
					</div>
				</div>
			</div>
		</div>
        <br>
        <center>
            <div class="footer__area-widget-about-logo">
                <a class="partner-logo"  href="https://www.tripadvisor.com/Hotel_Review-g678698-d21505946-Reviews-Villa_Serene_Hotel-Kitale_Rift_Valley_Province.html"><img style="width:150px; height:auto"  src="{{url('/')}}/uploads/icons/trip.jpg" alt=""></a>
                <a class="partner-logo"  href="https://www.airbnb.com/rooms/46559026?guests=1&adults=1&s=67&unique_share_id=5de32231-8c45-415b-b3ec-5a7b2005b1e8"><img style="width:150px; max-height:70px; height:auto" src="{{url('/')}}/uploads/icons/Airbnb-logo.jpg" alt=""></a>
                <a class="partner-logo"  href="https://www.booking.com/hotel/ke/villa-serene.html"><img style="width:150px; max-height:70px; height:auto" src="{{url('/')}}/uploads/icons/Booking.Com-Logo.jpg" alt=""></a>
                <a class="partner-logo"  href="http://hikersbay.com/africa/kenya/hotel/ke/villa-serene-kitale.html?lang=en"><img style="width:150px; max-height:70px; height:auto" src="{{url('/')}}/uploads/icons/hikerbay.jpg" alt=""></a>
                <a class="partner-logo"  href="https://planetofhotels.com/en/kenya/kitale/villa-serene-hotel"><img style="width:150px; max-height:70px; height:auto" src="{{url('/')}}/uploads/icons/planet-of-hotels_full_1565010282.jpg" alt=""></a>


            </div>
        </center>
		<div class="copyright__area">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-xl-7 col-lg-7 col-md-7 md-mb-10">
						<div class="copyright__area-left md-t-center">
							<p>Copyright © {{date('Y')}} <a href="{{url('/')}}">{{$Setting->sitename}}</a> All Rights Reserved | Powered by <a href="https://designekta.com">Designekta Studios</a></p>
						</div>
					</div>
					<div class="col-xl-5 col-lg-5 col-md-5">
						<div class="copyright__area-right t-right md-t-center">
							<ul>
								<li><a href="{{url('/')}}/copyright-statement">Copyright Statement</a></li>
								<li><a href="{{url('/')}}/terms-and-conditions">Terms of Conditions</a></li>
								<li><a href="{{url('/')}}/privacy-policy">Privacy Policy</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Area End -->
	<!-- Scroll Btn Start -->
	<div class="scroll-up">
		<svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102"><path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" /> </svg>
	</div>
	<!-- Scroll Btn End -->
	<!-- Main JS -->
	<script src="{{asset('theme/assets/js/jquery-3.6.0.min.js')}}"></script>
	<!-- Bootstrap JS -->
	<script src="{{asset('theme/assets/js/bootstrap.min.js')}}"></script>
	<!-- Counter Up JS -->
	<script src="{{asset('theme/assets/js/jquery.counterup.min.js')}}"></script>
	<!-- Popper JS -->
	<script src="{{asset('theme/assets/js/popper.min.js')}}"></script>
	<!-- Magnific Popup JS -->
	<script src="{{asset('theme/assets/js/jquery.magnific-popup.min.js')}}"></script>
	<!-- Nice Select JS -->
	<script src="{{asset('theme/assets/js/jquery.nice-select.min.js')}}"></script>
	<!-- Swiper Bundle JS -->
	<script src="{{asset('theme/assets/js/swiper-bundle.min.js')}}"></script>
	<!-- Waypoints JS -->
	<script src="{{asset('theme/assets/js/jquery.waypoints.min.js')}}"></script>
	<!-- Mean Menu JS -->
	<script src="{{asset('theme/assets/js/jquery.meanmenu.min.js')}}"></script>
	<!-- Isotope JS -->
	<script src="{{asset('theme/assets/js/isotope.pkgd.min.js')}}"></script>
	<!-- Custom JS -->
	<script src="{{asset('theme/assets/js/custom.js')}}"></script>
</body>

</html>
