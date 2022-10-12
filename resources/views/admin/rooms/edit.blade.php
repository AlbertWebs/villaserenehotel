@extends('admin.master-form')

@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Update Room Details</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">Rooms</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Update Room Details</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="card-head">
                        <header>Update Room Details</header>
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
                    <form action="{{route('admin.update.room', ['id'=>$Room->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body row">
                            <div class="col-lg-6 p-t-20">
                                <div
                                    class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input" type="text" id="txtRoomNo" name="room_number" value="{{$Room->room_number}}">
                                    <label class="mdl-textfield__label">Room Number</label>
                                </div>
                            </div>
                            <div class="col-lg-6 p-t-20">
                                <div
                                    class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                                    <input class="mdl-textfield__input" type="text" id="list3"  name="room_type" value="{{$Room->room_type}}" readonly
                                        tabIndex="-1">
                                    <label for="list3" class="pull-right margin-0">
                                        <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                                    </label>
                                    <label for="list3" class="mdl-textfield__label">Room Type</label>
                                    <ul data-mdl-for="list3" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                        <li class="mdl-menu__item" data-val="1">Single</li>
                                        <li class="mdl-menu__item" data-val="2">Double</li>
                                        <li class="mdl-menu__item" data-val="3">Single Budget</li>
                                        <li class="mdl-menu__item" data-val="4">Family</li>

                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-6 p-t-20">
                                <div
                                    class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                                    <input class="mdl-textfield__input" type="text" id="sample3" value="{{$Room->meal}}" name="meal"
                                        readonly tabIndex="-1">
                                    <label for="sample3" class="pull-right margin-0">
                                        <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                                    </label>
                                    <label for="sample2" class="mdl-textfield__label">Meal</label>
                                    <ul data-mdl-for="sample3"
                                        class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                        <li class="mdl-menu__item" data-val="1">Free Breakfast</li>
                                        <li class="mdl-menu__item" data-val="2">Free Dinner</li>
                                        <li class="mdl-menu__item" data-val="3">Free Breakfast &amp; Dinner</li>
                                        <li class="mdl-menu__item" data-val="4">Free Welcome Drink</li>
                                        <li class="mdl-menu__item" data-val="5">No Free Food</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 p-t-20">
                                <div
                                    class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                                    <input class="mdl-textfield__input" type="text" id="sample4" value="{{$Room->cancellation_charges}}" name="cancellation_charges"
                                        readonly tabIndex="-1">
                                    <label class="pull-right margin-0">
                                        <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                                    </label>
                                    <label class="mdl-textfield__label">Cancellation Charges</label>
                                    <ul data-mdl-for="sample4"
                                        class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                        <li class="mdl-menu__item" data-val="1">Free Cancellation</li>
                                        <li class="mdl-menu__item" data-val="2">10% Before 24 Hours</li>
                                        <li class="mdl-menu__item" data-val="1">No Cancellation Allow</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 p-t-20">
                                <div
                                    class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                                    <input class="mdl-textfield__input" type="text" id="list2" value="{{$Room->bed_capacity}}" readonly name="bed_capacity"
                                        tabIndex="-1">
                                    <label for="list2" class="pull-right margin-0">
                                        <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                                    </label>
                                    <label for="list2" class="mdl-textfield__label">Bad Capacity</label>
                                    <ul data-mdl-for="list2" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                        <li class="mdl-menu__item" data-val="1">1</li>
                                        <li class="mdl-menu__item" data-val="2">2</li>
                                        <li class="mdl-menu__item" data-val="3">3</li>
                                        <li class="mdl-menu__item" data-val="4">4</li>
                                        <li class="mdl-menu__item" data-val="5">5</li>
                                        <li class="mdl-menu__item" data-val="6">6</li>
                                        <li class="mdl-menu__item" data-val="7">7</li>
                                        <li class="mdl-menu__item" data-val="8">8</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-6 p-t-20">
                                <div
                                    class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input" type="text" name="price" value="{{$Room->price}}"
                                        pattern="-?[0-9]*(\.[0-9]+)?" id="text7">
                                    <label class="mdl-textfield__label" for="text7">Rent Per Night</label>
                                    <span class="mdl-textfield__error">Number required!</span>
                                </div>
                            </div>

                            <div class="col-lg-12 p-t-20">
                                <div class="mdl-textfield mdl-js-textfield txt-full-width">
                                    <textarea class="mdl-textfield__input" rows="4" id="education" name="comment">{{$Room->comment}}</textarea>
                                    <label class="mdl-textfield__label" for="text7">Room Details</label>
                                </div>
                            </div>
                            <div class="col-lg-6 p-t-20">
                                <label class="form-label" for="customFile">Thumbnail</label>
                                <input type="file" name="file" class="form-control" id="customFile" />
                            </div>
                            <div class="col-lg-6 p-t-20">
                                <img style="width:300px" src="{{url('/')}}/uploads/rooms/{{$Room->thumbnail}}" alt="{{$Room->room_type}}">
                            </div>
                            <input type="hidden" name="image_cheat" value="{{$Room->thumbnail}}">
                            <div class="col-lg-12 p-t-20 text-center">
                                <button type="submit
                                "
                                    class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Submit</button>
                                <button type="button"
                                    class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default">Cancel</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
