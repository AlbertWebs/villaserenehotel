@extends('admin.master-form')

@section('content')
	<!-- start page content -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Add File File</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                href="{{route('admin.home')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="#">File</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Add File</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <div class="card-head">
                            <header>Add File File</header>
                            <button id="panel-button"
                                class="mdl-button mdl-js-button mdl-button--icon pull-right"
                                data-upgraded=",MaterialButton">
                                <i class="material-icons">more_vert</i>
                            </button>
                            {{-- <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                                data-mdl-for="panel-button">
                                <li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
                                </li>
                                <li class="mdl-menu__item"><i class="material-icons">print</i>Another action
                                </li>
                                <li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
                                    here</li>
                            </ul> --}}
                        </div>
                        <form method="post" action="{{route('admin.update.file', ['id'=>$File->id])}}" enctype="multipart/form-data">
                            @csrf
                        <div class="card-body row">



                            @if($File->type == "room")
                            <?php $Room = \App\Models\Room::find($File->unique); ?>
                            <div class="col-lg-6 p-t-20">
                                <div
                                    class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                                    <input class="mdl-textfield__input" type="text" id="sample2" value="{{$File->unique}}"
                                        readonly tabIndex="-1" name="unique">
                                    <label for="sample2" class="pull-right margin-0">
                                        <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                                    </label>
                                    <label for="sample2" class="mdl-textfield__label">Room Number: {{$Room->room_number}}</label>
                                    <ul data-mdl-for="sample2"
                                        class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                        <?php $Rooms = \App\Models\Room::all(); ?>
                                        @foreach ($Rooms as $item)
                                        <li class="mdl-menu__item" data-val="{{$item->id}}">Room Number: {{$item->room_number}}</li>
                                        @endforeach


                                    </ul>
                                </div>
                            </div>
                            @else
                            <div class="col-lg-6 p-t-20">
                                <div
                                    class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input" type="text" id="txtRoomNo" value="{{$File->unique}}" name="unique">
                                    <label class="mdl-textfield__label">Location</label>
                                </div>
                            </div>
                            @endif
                            <div class="col-lg-6 p-t-20">
                                <div
                                    class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                                    <input class="mdl-textfield__input" type="text" id="list3" value="{{$File->type}}" name="type" readonly
                                        tabIndex="-1">
                                    <label for="list3" class="pull-right margin-0">
                                        <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                                    </label>
                                    <label for="list3" class="mdl-textfield__label">Type</label>
                                    <ul data-mdl-for="list3" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                        <li class="mdl-menu__item" data-val="1">room</li>
                                        <li class="mdl-menu__item" data-val="2">banner</li>
                                        <li class="mdl-menu__item" data-val="3">background</li>
                                        <li class="mdl-menu__item" data-val="4">Slider</li>

                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-6 p-t-20">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" name="file" id="inputGroupFile01"
                                        aria-describedby="inputGroupFileAddon01">
                                      <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-lg-6 p-t-20">
                                  {{--  --}}
                                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a
                                    href="{{url('/')}}/uploads/images/{{$File->filename}}" data-sub-html="Demo Description">
                                    <img class="img-fluid img-thumbnail"
                                        src="{{url('/')}}/uploads/images/{{$File->filename}}" alt=""> </a>
                                   </div>
                            </div>

                            <input type="hidden" name="image_cheat" value="{{$File->filename}}">


                            <div class="col-lg-12 p-t-20 text-center">
                                <button type="submit"
                                    class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Save Changes</button>
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
    <!-- end page content -->
@endsection
