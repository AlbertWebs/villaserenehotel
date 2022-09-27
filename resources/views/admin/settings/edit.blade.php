@extends('admin.master-form')

@section('content')
	<!-- start page content -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Site Settings</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                href="{{route('admin.home')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="#">Site Settings</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Update Settings</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <div class="card-head">
                            <header>Update Site Settings</header>
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
                        <form method="post" action="{{route('admin.update.setting')}}">
                            @csrf
                        <div class="card-body row">

                            <div class="col-lg-12 p-t-20">
                                <div
                                    class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input" type="text" id="txtFirstName" name="sitename" value="{{$Setting->sitename}}">
                                    <label class="mdl-textfield__label">Sitename</label>
                                </div>
                            </div>

                            <div class="col-lg-6 p-t-20">
                                <div
                                    class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input" type="email" id="txtemail" name="email_one" value="{{$Setting->email_one}}">
                                    <label class="mdl-textfield__label">Email One</label>
                                    <span class="mdl-textfield__error">Enter Valid Email Address!</span>
                                </div>
                            </div>


                            <div class="col-lg-6 p-t-20">
                                <div
                                    class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input" type="email" id="txtemail" name="email_two" value="{{$Setting->email_two}}">
                                    <label class="mdl-textfield__label">Email Two</label>
                                    <span class="mdl-textfield__error">Enter Valid Email Address!</span>
                                </div>
                            </div>

                            <div class="col-lg-6 p-t-20">
                                <div
                                    class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input" type="text"
                                        pattern="-?[0-9]*(\.[0-9]+)?" id="text5" name="mobile_one" value="{{$Setting->mobile_one}}">
                                    <label class="mdl-textfield__label" for="text5">Mobile Number</label>
                                    <span class="mdl-textfield__error">Number required!</span>
                                </div>
                            </div>

                            <div class="col-lg-6 p-t-20">
                                <div
                                    class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input" type="text"
                                        pattern="-?[0-9]*(\.[0-9]+)?" id="text5" name="mobile_two" value="{{$Setting->mobile_two}}">
                                    <label class="mdl-textfield__label" for="text5">Mobile Number</label>
                                    <span class="mdl-textfield__error">Number required!</span>
                                </div>
                            </div>

                            <div class="col-lg-6 p-t-20">
                                <div
                                    class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input" type="text" id="txtCity" name="address" value="{{$Setting->address}}">
                                    <label class="mdl-textfield__label">Address</label>
                                </div>
                            </div>

                            <div class="col-lg-6 p-t-20">
                                <div
                                    class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input" type="url" id="txtCity" name="url" value="{{$Setting->url}}">
                                    <label class="mdl-textfield__label">URL</label>
                                </div>
                            </div>

                            <div class="col-lg-6 p-t-20">
                                <div
                                    class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input" type="text" id="txtCity" name="facebook" value="{{$Setting->facebook}}">
                                    <label class="mdl-textfield__label">Facebook</label>
                                </div>
                            </div>

                            <div class="col-lg-6 p-t-20">
                                <div
                                    class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input" type="url" id="txtCity" name="twitter" value="{{$Setting->twitter}}">
                                    <label class="mdl-textfield__label">Twitter</label>
                                </div>
                            </div>

                            <div class="col-lg-6 p-t-20">
                                <div
                                    class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input" type="text" id="txtCity" name="linkedin" value="{{$Setting->linkedin}}">
                                    <label class="mdl-textfield__label">Linkedin</label>
                                </div>
                            </div>

                            <div class="col-lg-6 p-t-20">
                                <div
                                    class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input" type="url" id="txtCity" name="instagram" value="{{$Setting->instagram}}">
                                    <label class="mdl-textfield__label">instagram</label>
                                </div>
                            </div>





                            <div class="col-lg-12 p-t-20">
                                <div class="mdl-textfield mdl-js-textfield txt-full-width">
                                    <textarea class="mdl-textfield__input" rows="4" id="education" name="map">{{$Setting->map}}</textarea>
                                    <label class="mdl-textfield__label" for="text7">Map iFrame</label>
                                </div>
                            </div>

                            <div class="col-lg-12 p-t-20 text-center">
                                <button type="submit"
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
    <!-- end page content -->
@endsection
