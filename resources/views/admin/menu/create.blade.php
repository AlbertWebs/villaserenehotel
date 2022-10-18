@extends('admin.master-form')

@section('content')
	<!-- start page content -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Add Menu</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                href="{{route('admin.home')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="#">Booking</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Add Menu</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <div class="card-head">
                            <header>Add Menu</header>
                            <button id="panel-button"
                                class="mdl-button mdl-js-button mdl-button--icon pull-right"
                                data-upgraded=",MaterialButton">
                                <i class="material-icons">more_vert</i>
                            </button>
                            {{--
                                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                                    data-mdl-for="panel-button">
                                    <li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
                                    </li>
                                    <li class="mdl-menu__item"><i class="material-icons">print</i>Another action
                                    </li>
                                    <li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
                                        here</li>
                                </ul>
                            --}}
                        </div>
                        <form method="post" action="{{route('admin.store.menu')}}">
                            @csrf
                        <div class="card-body row">

                            <div class="col-lg-6 p-t-20">
                                <div
                                    class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input" type="text" id="txtFirstName" name="title" required>
                                    <label class="mdl-textfield__label">Title</label>
                                </div>
                            </div>
                            <div class="col-lg-6 p-t-20">
                                <div
                                    class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class="mdl-textfield__input" type="text" id="txtFirstName" name="price" required>
                                    <label class="mdl-textfield__label">Price</label>
                                </div>
                            </div>



                            {{--  --}}
                            <div class="col-lg-6 p-t-20">
                                <div
                                    class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                                    <input class="mdl-textfield__input" type="text" id="list2" value="" readonly
                                        tabIndex="-1" name="category" required>
                                    <label for="list2" class="pull-right margin-0">
                                        <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                                    </label>
                                    <label for="list2" class="mdl-textfield__label">Category</label>
                                    <ul data-mdl-for="list2" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                        <li class="mdl-menu__item" data-val="Brunch">Brunch</li>
                                        <li class="mdl-menu__item" data-val="Lunch">Lunch</li>
                                        <li class="mdl-menu__item" data-val="Kid">Kid</li>
                                        <li class="mdl-menu__item" data-val="Desserts">Desserts</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-6 p-t-20">
                                <div
                                    class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                                    <input class="mdl-textfield__input" type="text" id="list1" value="none" readonly
                                        tabIndex="-1" name="parent" required>
                                    <label for="list1" class="pull-right margin-0">
                                        <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                                    </label>
                                    <label for="list1" class="mdl-textfield__label">Parent</label>
                                    <ul data-mdl-for="list1" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                        <li class="mdl-menu__item" data-val="Ugali">Ugali</li>
                                        <li class="mdl-menu__item" data-val="Rice">Rice</li>
                                        <li class="mdl-menu__item" data-val="Spaghetti">Spaghetti</li>

                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-6 p-t-20">
                                <div
                                    class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                                    <input class="mdl-textfield__input" type="text" id="list3" value="Child" readonly
                                        tabIndex="-1" name="role" required>
                                    <label for="list3" class="pull-right margin-0">
                                        <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                                    </label>
                                    <label for="list3" class="mdl-textfield__label">Role</label>
                                    <ul data-mdl-for="list3" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                        <li class="mdl-menu__item" data-val="Child">Child</li>
                                        <li class="mdl-menu__item" data-val="Parent">Parent</li>
                                    </ul>
                                </div>
                            </div>
                            {{--  --}}

                            <div class="col-lg-6 p-t-20">
                                <div class="mdl-textfield mdl-js-textfield txt-full-width">
                                    <textarea class="mdl-textfield__input" rows="4" id="education" name="content" required></textarea>
                                    <label class="mdl-textfield__label" for="text7">Content</label>
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
