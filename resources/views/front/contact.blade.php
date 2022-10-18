@extends('front.master')

@section('content')
<!-- Page Banner Start -->
<div class="page__banner" data-background="{{asset('theme/assets/img/banner/page-banner-9.jpeg')}}">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page__banner-title">
                    <h1>Contact Us</h1>
                    <div class="page__banner-title-menu">
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><span>-</span>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner End -->
<!-- Contact Area Start -->
<div class="contact__area section-padding pb-0">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-5 lg-mb-30">
                <div class="contact__area-title">
                    <h3 class="mb-25">Get In Touch</h3>
                    <p>
                        We have created a unique lodging concept geared to the seasoned business traveler and we are the #1 comfort hotel services in Kitale.
                    </p>
                </div>
                <div class="contact__area-info">
                    <div class="contact__area-info-item">
                        <div class="contact__area-info-item-icon">
                            <i class="fal fa-phone-alt"></i>
                        </div>
                        <div class="contact__area-info-item-content">
                            <span>Emergency Help</span>
                            <h6><a href="tel:+{{$Setting->mobile_one}}">+{{$Setting->mobile_one}}</a></h6>
                        </div>
                    </div>
                    <div class="contact__area-info-item">
                        <div class="contact__area-info-item-icon">
                            <i class="fal fa-envelope"></i>
                        </div>
                        <div class="contact__area-info-item-content">
                            <span>Quick Email</span>
                            <h6><a href="mailto:{{$Setting->email_one}}">{{$Setting->email_one}}</a></h6>
                        </div>
                    </div>
                    <div class="contact__area-info-item">
                        <div class="contact__area-info-item-icon">
                            <i class="fal fa-map-marker-alt"></i>
                        </div>
                        <div class="contact__area-info-item-content">
                            <span>Office Address</span>
                            <h6><a href="#">{{$Setting->address}} </a></h6>
                        </div>
                    </div>
                </div>
                <div class="contact__area-social">
                    <ul>
                        <li><a href="{{$Setting->facebook}}"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li><a href="{{$Setting->twitter}}"><i class="fab fa-twitter"></i></a>
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
            <div class="col-xl-7 col-lg-7">
                <div class="contact__area-form">
                    <h3 class="mb-35">Send Massage</h3>
                    <form action="#">
                        <div class="row">
                            <div class="col-sm-6 mb-30">
                                <div class="contact__area-form-item">
                                    <i class="fal fa-user"></i>
                                    <input type="text" name="name" placeholder="Full Name" required="required">
                                </div>
                            </div>
                            <div class="col-sm-6 sm-mb-30">
                                <div class="contact__area-form-item">
                                    <i class="far fa-envelope-open"></i>
                                    <input type="email" name="email" placeholder="Email Address" required="required">
                                </div>
                            </div>
                            <div class="col-sm-6 mb-30">
                                <div class="contact__area-form-item">
                                    <i class="far fa-phone-alt"></i>
                                    <input type="text" name="phone" placeholder="Phone" required="required">
                                </div>
                            </div>
                            <div class="col-sm-6 sm-mb-30">
                                <div class="contact__area-form-item">
                                    <i class="far fa-address-book"></i>
                                    <input type="text" name="subject" placeholder="Subject" required="required">
                                </div>
                            </div>
                            <div class="col-sm-12 mb-30">
                                <div class="contact__area-form-item">
                                    <i class="far fa-comments"></i>
                                    <textarea name="message" placeholder="Type your comments...."></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact__area-form-item">
                                    <button class="theme-btn" type="submit">Submit Now<i class="fal fa-long-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="contact__area-map section-padding">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15956.936409299358!2d35.0377822!3d0.9805141!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6708e8b6d497e298!2sVilla%20Serene%20Hotel!5e0!3m2!1sen!2ske!4v1664196473893!5m2!1sen!2ske" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Area End -->
@endsection
