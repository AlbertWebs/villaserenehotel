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

                            @foreach ($Files as $files)
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20">
                                <a href="{{url('/')}}/uploads/images/{{$files->filename}}" data-sub-html="Demo Description">
                                    <img class="img-fluid img-thumbnail" src="{{url('/')}}/uploads/images/{{$files->filename}}" style="height:200px" alt="">
                                </a>
                            </div>
                            @endforeach



                        </div>
                        {{--  --}}
                        <div class="row p-b-20">
                            <div class="col-md-6 col-sm-6 col-6">
                                <div class="btn-group">
                                    <a href="{{route('admin.new.file')}}" id="addRow" class="btn btn-info">
                                        Add More <i class="fa fa-plus"></i>
                                    </a>
                                    &nbsp;
                                    <a href="{{route('admin.list.file')}}" id="addRow" class="btn btn-success">
                                        Edit Images <i class="fa fa-edit"></i>
                                    </a>
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
<!-- end page content -->
@endsection
