@extends('admin.master-gallery')

@section('content')
<!-- start page content -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Gallery</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">Apps</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Gallery</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="card-head">
                        <header>Gallery</header>
                        <button id="panel-button"
                            class="mdl-button mdl-js-button mdl-button--icon pull-right"
                            data-upgraded=",MaterialButton">
                            <i class="material-icons">more_vert</i>
                        </button>
                        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                            data-mdl-for="panel-button">
                            <li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
                            </li>
                            <li class="mdl-menu__item"><i class="material-icons">print</i>Another action
                            </li>
                            <li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
                                here</li>
                        </ul>
                    </div>
                    <div class="card-body row">
                        <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a
                                    href="{{asset('admins/assets/img/image-gallery/1.jpg')}}" data-sub-html="Demo Description">
                                    <img class="img-fluid img-thumbnail"
                                        src="{{asset('admins/assets/img/image-gallery/thumb/thumb-1.jpg')}}" alt=""> </a> </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a
                                    href="{{asset('admins/assets/img/image-gallery/2.jpg')}}" data-sub-html="Demo Description">
                                    <img class="img-fluid img-thumbnail"
                                        src="{{asset('admins/assets/img/image-gallery/thumb/thumb-2.jpg')}}" alt=""> </a> </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a
                                    href="{{asset('admins/assets/img/image-gallery/3.jpg')}}" data-sub-html="Demo Description">
                                    <img class="img-fluid img-thumbnail"
                                        src="{{asset('admins/assets/img/image-gallery/thumb/thumb-3.jpg')}}" alt=""> </a> </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a
                                    href="{{asset('admins/assets/img/image-gallery/4.jpg')}}" data-sub-html="Demo Description">
                                    <img class="img-fluid img-thumbnail"
                                        src="{{asset('admins/assets/img/image-gallery/thumb/thumb-4.jpg')}}" alt=""> </a> </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a
                                    href="{{asset('admins/assets/img/image-gallery/5.jpg')}}" data-sub-html="Demo Description">
                                    <img class="img-fluid img-thumbnail"
                                        src="{{asset('admins/assets/img/image-gallery/thumb/thumb-5.jpg')}}" alt=""> </a> </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a
                                    href="{{asset('admins/assets/img/image-gallery/6.jpg')}}" data-sub-html="Demo Description">
                                    <img class="img-fluid img-thumbnail"
                                        src="{{asset('admins/assets/img/image-gallery/thumb/thumb-6.jpg')}}" alt=""> </a> </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a
                                    href="{{asset('admins/assets/img/image-gallery/7.jpg')}}" data-sub-html="Demo Description">
                                    <img class="img-fluid img-thumbnail"
                                        src="{{asset('admins/assets/img/image-gallery/thumb/thumb-7.jpg')}}" alt=""> </a> </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a
                                    href="{{asset('admins/assets/img/image-gallery/8.jpg')}}" data-sub-html="Demo Description">
                                    <img class="img-fluid img-thumbnail"
                                        src="{{asset('admins/assets/img/image-gallery/thumb/thumb-8.jpg')}}" alt=""> </a> </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a
                                    href="{{asset('admins/assets/img/image-gallery/9.jpg')}}" data-sub-html="Demo Description">
                                    <img class="img-fluid img-thumbnail"
                                        src="{{asset('admins/assets/img/image-gallery/thumb/thumb-9.jpg')}}" alt=""> </a> </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a
                                    href="{{asset('admins/assets/img/image-gallery/10.jpg')}}" data-sub-html="Demo Description">
                                    <img class="img-fluid img-thumbnail"
                                        src="{{asset('admins/assets/img/image-gallery/thumb/thumb-10.jpg')}}" alt=""> </a>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a
                                    href="{{asset('admins/assets/img/image-gallery/11.jpg')}}" data-sub-html="Demo Description">
                                    <img class="img-fluid img-thumbnail"
                                        src="{{asset('admins/assets/img/image-gallery/thumb/thumb-11.jpg')}}" alt=""> </a>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a
                                    href="{{asset('admins/assets/img/image-gallery/12.jpg')}}" data-sub-html="Demo Description">
                                    <img class="img-fluid img-thumbnail"
                                        src="{{asset('admins/assets/img/image-gallery/thumb/thumb-12.jpg')}}" alt=""> </a>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a
                                    href="{{asset('admins/assets/img/image-gallery/13.jpg')}}" data-sub-html="Demo Description">
                                    <img class="img-fluid img-thumbnail"
                                        src="{{asset('admins/assets/img/image-gallery/thumb/thumb-13.jpg')}}" alt=""> </a>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a
                                    href="{{asset('admins/assets/img/image-gallery/14.jpg')}}" data-sub-html="Demo Description">
                                    <img class="img-fluid img-thumbnail"
                                        src="{{asset('admins/assets/img/image-gallery/thumb/thumb-14.jpg')}}" alt=""> </a>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a
                                    href="{{asset('admins/assets/img/image-gallery/15.jpg')}}" data-sub-html="Demo Description">
                                    <img class="img-fluid img-thumbnail"
                                        src="{{asset('admins/assets/img/image-gallery/thumb/thumb-15.jpg')}}" alt=""> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end page content -->
@endsection
