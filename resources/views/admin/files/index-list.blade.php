@extends('admin.master-list')

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


                            <div class="table-scrollable">
                                <table class="table table-hover table-checkable order-column full-width" id="example4">
                                    <thead>
                                        <tr>
                                            <th class="center"></th>
                                            <th class="center"> ID Number </th>
                                            <th class="center"> Type </th>

                                            <th class="center"> Last Update </th>
                                            <th class="center"> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($Files as $files)
                                        <tr class="odd gradeX">
                                            <td class="user-circle-img">
                                                <img width="100" height="100" src="{{url('/')}}/uploads/images/{{$files->filename}}" alt="">
                                            </td>
                                            <td class="center">{{$files->id}}</td>

                                            <td class="center">{{$files->type}}</td>

                                            <td class="center">
                                                <span class="label label-sm label-success">{{$files->created_at}} </span>
                                            </td>
                                            <td class="center">
                                                <a href="{{route('admin.edit.file', ['id'=>$files->id])}}" class="btn btn-tbl-edit btn-xs">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a href="{{route('admin.delete.file', ['id'=>$files->id])}}" class="btn btn-tbl-delete btn-xs">
                                                    <i class="fa fa-trash-o "></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>




                        </div>
                        {{--  --}}
                        <div class="row p-b-20">
                            <div class="col-md-6 col-sm-6 col-6">
                                <div class="btn-group">
                                    <a href="{{route('admin.new.file')}}" id="addRow" class="btn btn-info">
                                        Add More <i class="fa fa-plus"></i>
                                    </a>
                                    &nbsp;
                                    <a href="{{route('admin.view.file')}}" id="addRow" class="btn btn-success">
                                        Go to Gallery <i class="fa fa-image"></i>
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
