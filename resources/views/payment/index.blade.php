@extends('front.master-payment')

@section('content')
@foreach ($Rooms as $rooms)

<!-- Contact Area Start -->
<div class="contact__area section-padding pb-0">
    <div class="container">
        <div class="row" style="margin:0 auto !important;">

            <div class="col-xl-12 col-lg-12">
                <div class="contact__area-form" style="max-width:600px">
                    <h3 class="mb-35">Book {{$rooms->room_type}} Room</h3>
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

    </div>
</div>
<!-- Contact Area End -->
<br><br>
@endforeach
@endsection
