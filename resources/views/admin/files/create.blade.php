@extends('admin.master-form')

@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Add File Details</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">Files</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Add File Details</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="card-head">
                        <header>Add File Details</header>
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
                        <div class="col-lg-12 p-t-20">
                            <label class="control-label col-md-3">Upload File Photos</label>
                            <form id="id_dropzone" class="dropzone" action="{{route('admin.store.file')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="type" value="room">
                                <input type="hidden" name="unique" value="2">
                                <div class="dz-message">
                                    <div class="dropIcon">
                                        <i class="material-icons">cloud_upload</i>
                                    </div>
                                    <h3>Drop files here or click to upload.</h3>
                                    <em>(This is just a demo. Selected files are <strong>not</strong>
                                        actually uploaded.)
                                    </em>
                                </div>
                                <div id="success-msg" class="alert-success text-center"></div>
                            </form>
                            {{--  --}}
                            <script type="text/javascript">
                                    Dropzone.options.dropzone =
                                    {
                                        maxFilesize: 12,
                                        renameFile: function(file) {
                                            var dt = new Date();
                                            var time = dt.getTime();
                                        return time+file.name;
                                        },
                                        acceptedFiles: ".jpeg,.jpg,.png,.gif",
                                        addRemoveLinks: true,
                                        timeout: 5000,
                                        success: function(file, response)
                                        {
                                            console.log(response);
                                        },
                                        error: function(file, response)
                                        {
                                        return false;
                                        }
                            };
                            </script>
                            {{--  --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
