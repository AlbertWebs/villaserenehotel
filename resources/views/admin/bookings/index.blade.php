@extends('admin.master-list')

@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">All Bookings</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="{{route('admin.home')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">Booking</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">All Bookings</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>All Bookings</header>
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
                                    <a href="{{route('admin.new.booking')}}" id="addRow" class="btn btn-info">
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
                                        <th class="center"> Name </th>
                                        <th class="center"> Mobile </th>
                                        <th class="center"> Email </th>
                                        <th class="center"> Arrive </th>
                                        <th class="center"> Depart </th>
                                        <th class="center"> Room Type </th>
                                        <th class="center"> Payment </th>
                                        <th class="center"> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Bookings as $Booking)
                                    <tr class="odd gradeX">
                                        <td class="user-circle-img">
                                            <img src="{{asset('admins/image/istockphoto-1300845620-612x612.png')}}" alt="">
                                        </td>
                                        <td class="center">{{$Booking->name}}</td>
                                        <td class="center"><a href="tel:{{$Booking->mobile}}">
                                            {{$Booking->mobile}} </a></td>
                                        <td class="center"><a href="mailto:{{$Booking->email}} ">
                                            {{$Booking->email}} </a></td>
                                        <td class="center">{{date('d'), strtotime($Booking->arrive)}}/{{date('m'), strtotime($Booking->arrive)}}/{{date('Y'), strtotime($Booking->arrive)}}</td>
                                        <td class="center">{{date('d'), strtotime($Booking->depart)}}/{{date('m'), strtotime($Booking->depart)}}/{{date('Y'), strtotime($Booking->depart)}}</td>
                                        <td class="center">{{$Booking->room_type}}</td>
                                        <td class="center">
                                            <span class="label label-sm label-success">Paid </span>
                                        </td>
                                        <td class="center">
                                            <a href="{{route('admin.edit.booking', ['id'=>$Booking->id])}}" class="btn btn-tbl-edit btn-xs">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <a href="{{route('admin.delete.booking', ['id'=>$Booking->id])}}" class="btn btn-tbl-delete btn-xs">
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
