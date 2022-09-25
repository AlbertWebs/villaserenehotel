<div class="sidebar-container">
    <div class="sidemenu-container navbar-collapse collapse fixed-menu">
        <div id="remove-scroll">
            <ul class="sidemenu page-header-fixed p-t-20" data-keep-expanded="false" data-auto-scroll="true"
                data-slide-speed="200">
                <li class="sidebar-toggler-wrapper hide">
                    <div class="sidebar-toggler">
                        <span></span>
                    </div>
                </li>
                <li class="sidebar-user-panel">
                    <div class="user-panel">
                        <div class="row">
                            <div class="sidebar-userpic">
                                <img src="{{asset('admins/assets/img/myPhoto.jpeg')}}" class="img-responsive" alt="{{Auth::User()->name}}"> </div>
                        </div>
                        <div class="profile-usertitle">
                            <div class="sidebar-userpic-name"> {{Auth::User()->name}}</div>
                            <div class="profile-usertitle-job"> Manager </div>
                        </div>
                        <div class="sidebar-userpic-btn">
                            <a class="tooltips" href="user_profile.html" data-placement="top"
                                data-original-title="Profile">
                                <i class="material-icons">person_outline</i>
                            </a>
                            <a class="tooltips" href="email_inbox.html" data-placement="top"
                                data-original-title="Mail">
                                <i class="material-icons">mail_outline</i>
                            </a>
                            <a class="tooltips" href="chat.html" data-placement="top"
                                data-original-title="Chat">
                                <i class="material-icons">chat</i>
                            </a>
                            <a class="tooltips" href="{{ route('logout') }}" data-placement="top"
                                data-original-title="Logout">
                                <i class="material-icons">input</i>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="menu-heading">
                    <span>-- Main</span>
                </li>
                <li class="nav-item start active">
                    <a href="{{url('/')}}/admin" class="nav-link nav-toggle">
                        <i class="material-icons">dashboard</i>
                        <span class="title">Dashboard</span>
                        <span class="selected"></span>
                        <span class="arrow open"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item active">
                            <a href="{{url('/')}}/admin" class="nav-link ">
                                <i class="fa fa-edit"></i>
                                <span class="title">Admin Dashboard</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a target="new" href="{{url('/')}}/" class="nav-link ">
                                <i class="fa fa-globe"></i> <span class="title">Website</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle">
                        <i class="material-icons">email</i>
                        <span class="title">Email</span>
                        <span class="arrow"></span>
                        <span class="label label-rouded label-menu label-danger">new</span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="email_inbox.html" class="nav-link ">
                                <span class="title">Inbox</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="email_view.html" class="nav-link ">
                                <span class="title">View Mail</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="email_compose.html" class="nav-link ">
                                <span class="title">Compose Mail</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle">
                        <i class="material-icons">business_center</i>
                        <span class="title">Booking</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{route('admin.new.booking')}}" class="nav-link ">
                                <span class="title">New Booking</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.view.booking') }}" class="nav-link ">
                                <span class="title">View Bookings</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle">
                        <i class="material-icons">vpn_key</i>
                        <span class="title">Rooms</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('admin.new.room') }}" class="nav-link ">
                                <span class="title">Add Room Details</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.view.room') }}" class="nav-link ">
                                <span class="title">View All Rooms</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle">
                        <i class="material-icons">collections</i>
                        <span class="title">Images</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('admin.new.file') }}" class="nav-link ">
                                <span class="title">Add Image</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.view.file') }}" class="nav-link ">
                                <span class="title">View All Files</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.list.file') }}" class="nav-link ">
                                <span class="title">Edit Files</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle">
                        <i class="material-icons">group</i>
                        <span class="title">Staff</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="add_staff.html" class="nav-link ">
                                <span class="title">Add Staff Details</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="all_staffs.html" class="nav-link ">
                                <span class="title">View All Staffs</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="edit_staff.html" class="nav-link ">
                                <span class="title">Edit Staff Details</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle">
                        <i class="material-icons">local_taxi</i>
                        <span class="title">Transportation</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="add_vehicle.html" class="nav-link ">
                                <span class="title">Add Vehicle Details</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="all_vehicles.html" class="nav-link ">
                                <span class="title">View All Vehicle</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="edit_vehicle.html" class="nav-link ">
                                <span class="title">Edit Vehicle Details</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle">
                        <i class="fa fa-gavel"></i>
                        <span class="title">Legal Pages</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{route('admin.view.privacy')}}" class="nav-link ">
                                <span class="title">Privacy Policy</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.view.term')}}" class="nav-link ">
                                <span class="title">Terms and Conditions</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.edit.copyright')}}" class="nav-link ">
                                <span class="title">Copyright</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle">
                        <i class="fa fa-info"></i>
                        <span class="title">Information</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{route('admin.edit.about')}}" class="nav-link ">
                                <span class="title">About Us</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.edit.welcome')}}" class="nav-link ">
                                <span class="title">Welcome Note</span>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle">
                        <i class="fa fa-cog"></i>
                        <span class="title">Site Settings</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{route('admin.edit.setting')}}" class="nav-link ">
                                <span class="title">Site Settings</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.edit.logo')}}" class="nav-link ">
                                <span class="title">Logo & Icons</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.edit.credential')}}" class="nav-link ">
                                <span class="title">Site Credentials</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{route('logout')}}" class="nav-link">
                        <i class="fa fa-power-off"></i>
                        <span class="title">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
