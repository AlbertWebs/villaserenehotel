@extends('admin.master-list')

@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">All Menus</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="{{route('admin.home')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">Menu</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">All Menus</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>All Menus</header>
                        <div class="tools">
                            <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                            <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                            <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="row p-b-20">
                            <div class="col-md-6 col-sm-6 col-6">
                                <div class="btn-group">
                                    <a href="{{route('admin.new.menu')}}" id="addRow" class="btn btn-info">
                                        Add Menu <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="table-scrollable">
                            <table class="table table-hover table-checkable order-column full-width"
                                id="example4">
                                <thead>
                                    <tr>
                                        <th class="center"></th>
                                        <th class="center"> Title </th>
                                        <th class="center"> Category </th>
                                        <th class="center"> Role </th>
                                        <th class="center"> Parent </th>
                                        <th class="center"> Content </th>

                                        <th class="center"> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Menus as $Menu)
                                    <tr class="odd gradeX">
                                        <td class="user-circle-img">
                                            {{$Menu->id}}
                                        </td>
                                        <td class="center">{{$Menu->title}}</td>
                                        <td class="center">{{$Menu->category}} </td>
                                        <td class="center">{{$Menu->role}} </td>
                                        <td class="center">{{$Menu->parent}} </td>
                                        <td class="center">{{$Menu->content}} </td>

                                        <td class="center">
                                            <a href="{{route('admin.edit.menu', ['id'=>$Menu->id])}}" class="btn btn-tbl-edit btn-xs">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <a href="{{route('admin.delete.menu', ['id'=>$Menu->id])}}" class="btn btn-tbl-delete btn-xs">
                                                <i class="fa fa-trash-o "></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
