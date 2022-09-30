@extends('admin.master-list')

@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">All Rooms</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="{{route('admin.home')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">Room</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">All Rooms</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>All Rooms</header>
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
                                    <a href="{{route('admin.new.room')}}" id="addRow" class="btn btn-info">
                                        Add New <i class="fa fa-plus"></i>
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
                                        <th class="center"> Room Number </th>
                                        <th class="center"> Type </th>
                                        <th class="center"> Meal </th>
                                        <th class="center"> Cancellation Charges </th>
                                        <th class="center"> Bed Capacity </th>
                                        <th class="center"> Price </th>
                                        <th class="center"> Availability </th>
                                        <th class="center"> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Rooms as $Room)
                                    <tr class="odd gradeX">
                                        <td class="user-circle-img">
                                            <img src="{{asset('admins/image/istockphoto-1300845620-612x612.png')}}" alt="">
                                        </td>
                                        <td class="center">{{$Room->room_number}}</td>
                                        <td class="center"><a href="tel:{{$Room->room_type}}">
                                            {{$Room->room_type}} </a></td>
                                        <td class="center"><a href="mailto:{{$Room->meal}} ">
                                            {{$Room->meal}} </a></td>
                                        <td class="center">{{$Room->cancellation_charges}}</td>
                                        <td class="center">{{$Room->bed_capacity}}</td>
                                        <td class="center">{{$Room->price}}</td>
                                        <td class="center">
                                            @if($Room->status == "1")
                                            <span class="label label-sm label-success">Available </span>
                                            @else
                                            <span class="label label-sm label-danger">Booked! </span>
                                            @endif
                                        </td>
                                        <td class="center">
                                            <a href="{{route('admin.edit.room', ['id'=>$Room->id])}}" class="btn btn-tbl-edit btn-xs">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <a href="{{route('admin.delete.room', ['id'=>$Room->id])}}" class="btn btn-tbl-delete btn-xs">
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
