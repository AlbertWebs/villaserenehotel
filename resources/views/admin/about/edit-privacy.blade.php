@extends('admin.master-form')

@section('content')
	<!-- start page content -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Privacy Policy</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                href="{{route('admin.home')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="#">About Us</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Privacy Policy</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <div class="card-head">
                            <header>Update Privacy Policy</header>
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
                        <form method="post" action="{{route('admin.update.about')}}">
                            @csrf
                        <div class="card-body row">


                            <div class="col-lg-12 p-t-20">
                                <div class="mdl-textfield mdl-js-textfield txt-full-width">
                                    <textarea class="mdl-textfield__input" rows="4" id="article_ckeditor" name="privacies">{{$About->privacies}}</textarea>
                                    <label class="mdl-textfield__label" for="text7">Privacy Policy</label>
                                </div>
                            </div>
                            <script src="https://amanivehiclesounds.co.ke/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
                            <script>
                                CKEDITOR.replace( 'article_ckeditor' );
                            </script>

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
