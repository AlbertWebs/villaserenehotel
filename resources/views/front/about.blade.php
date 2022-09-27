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
                    <h2>Book now and save up to 35% On hotel rooms</h2>
                    <p>hasellus nisi sapien, rutrum placerat sapien eu, rhoncus tempus felis. Nulla non pulvinar enim, vel viverra nunc. Integer condimentum vulputate justo. Morbi rhoncus elit in tellus viverra, vel fermentum orci dictum. Vestibulum non nisi commodo, tincidunt elit non, consectetur tellus. Fusce in commodo velit. In dapibus dui vitae tortor ullamcorper mollis.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="offers__area-image">
                    <img class="img__full" src="{{asset('theme/assets/img/features/offers.jpg')}}" alt="">
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
                        <h4>Room Cleaning</h4>
                        <p>Proin massa augue, lacinia at blandit ac, Fringilla scelerisque tortor. Mauris</p>
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
                        <h4>Car Parking</h4>
                        <p>Proin massa augue, lacinia at blandit ac, Fringilla scelerisque tortor. Mauris</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 lg-mb-30">
                <div class="services__two-item">
                    <span>03</span>
                    <div class="services__two-item-icon">
                        <img src="{{asset('theme/assets/img/icon/swimming-pool.png')}}" alt="">
                    </div>
                    <div class="services__two-item-content">
                        <h4>Swimming pool</h4>
                        <p>Proin massa augue, lacinia at blandit ac, Fringilla scelerisque tortor. Mauris</p>
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
                        <p>Proin massa augue, lacinia at blandit ac, Fringilla scelerisque tortor. Mauris</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services Two End -->
<!-- Gallery Area Start -->
<div class="gallery__area section-padding pb-0 overflow-hidden">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-sm-3 sm-mb-10">
                <div class="gallery__area-item">
                    <a class="img-popup" href="{{asset('theme/assets/img/features/gallery-1.jpg')}}"><img class="img__full" src="{{asset('theme/assets/img/features/gallery-1.jpg')}}" alt=""></a>
                </div>
            </div>
            <div class="col-sm-3 sm-mb-10">
                <div class="gallery__area-item">
                    <a class="img-popup" href="{{asset('theme/assets/img/features/gallery-2.jpg')}}"><img class="img__full" src="{{asset('theme/assets/img/features/gallery-2.jpg')}}" alt=""></a>
                </div>
            </div>
            <div class="col-sm-3 sm-mb-10">
                <div class="gallery__area-item">
                    <a class="img-popup" href="{{asset('theme/assets/img/features/gallery-3.jpg')}}"><img class="img__full" src="{{asset('theme/assets/img/features/gallery-3.jpg')}}" alt=""></a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="gallery__area-item">
                    <a class="img-popup" href="{{asset('theme/assets/img/features/gallery-4.jpg')}}"><img class="img__full" src="{{asset('theme/assets/img/features/gallery-4.jpg')}}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Gallery Area End -->
<!-- Modern Room Area Start -->
<div class="modern__room section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6 mb-30">
                <div class="deluxe__three-item">
                    <div class="deluxe__three-item-image">
                        <img src="{{asset('theme/assets/img/hotel/hotel-10.jpg')}}" alt="">
                        <div class="deluxe__three-item-image-content">
                            <h4><a href="room-details.html">Double Room</a><span>$219/Night</span></h4>
                            <p>Praesent non ullamcorper ligula. Proin a mi vitae massa lacinia</p>
                            <div class="deluxe__three-item-image-content-meta">
                                <ul>
                                    <li><i class="fal fa-bed-alt"></i>(3) bed's</li>
                                    <li><i class="fal fa-users"></i>(4) Guest's</li>
                                </ul>
                            </div>
                            <div class="deluxe__three-item-image-content-bottom">
                                <a class="simple-btn" href="#"><i class="far fa-chevron-right"></i>Read More</a>
                                <p><i class="fas fa-star"></i><span>4.8</span>2k</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 md-mb-30">
                <div class="deluxe__three-item">
                    <div class="deluxe__three-item-image">
                        <img src="{{asset('theme/assets/img/hotel/hotel-11.jpg')}}" alt="">
                        <div class="deluxe__three-item-image-content">
                            <h4><a href="room-details.html">Small Suite</a><span>$188/Night</span></h4>
                            <p>Praesent non ullamcorper ligula. Proin a mi vitae massa lacinia</p>
                            <div class="deluxe__three-item-image-content-meta">
                                <ul>
                                    <li><i class="fal fa-bed-alt"></i>(2) bed's</li>
                                    <li><i class="fal fa-users"></i>(3) Guest's</li>
                                </ul>
                            </div>
                            <div class="deluxe__three-item-image-content-bottom">
                                <a class="simple-btn" href="#"><i class="far fa-chevron-right"></i>Read More</a>
                                <p><i class="fas fa-star"></i><span>4.4</span>2k</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 md-mb-30">
                <div class="deluxe__three-item">
                    <div class="deluxe__three-item-image">
                        <img src="{{asset('theme/assets/img/hotel/hotel-12.jpg')}}" alt="">
                        <div class="deluxe__three-item-image-content">
                            <h4><a href="room-details.html">Luxury room</a><span>$229/Night</span></h4>
                            <p>Praesent non ullamcorper ligula. Proin a mi vitae massa lacinia</p>
                            <div class="deluxe__three-item-image-content-meta">
                                <ul>
                                    <li><i class="fal fa-bed-alt"></i>(3) bed's</li>
                                    <li><i class="fal fa-users"></i>(6) Guest's</li>
                                </ul>
                            </div>
                            <div class="deluxe__three-item-image-content-bottom">
                                <a class="simple-btn" href="#"><i class="far fa-chevron-right"></i>Read More</a>
                                <p><i class="fas fa-star"></i><span>3.7</span>2k</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modern Room Area End -->
@endsection
