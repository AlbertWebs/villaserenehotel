@extends('front.master')

@section('content')
<!-- Page Banner Start -->
<div class="page__banner" data-background="{{asset('theme/assets/img/banner/page-banner-9.jpeg')}}">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page__banner-title">
                    <h1>Copyright Statement</h1>
                    <div class="page__banner-title-menu">
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><span>-</span>Copyright Statement</li>
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
            <div class="col-xl-12 col-lg-12 lg-mb-30">
                <p>
                    {!!html_entity_decode($About->copyright)!!}
                </p>


            </div>

        </div>
        <hr>
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
