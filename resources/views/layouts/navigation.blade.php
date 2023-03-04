
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">





                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="/images/users/avatar-9.jpg" alt="user-image" class="rounded-circle">
                            <span class="ml-1"><i class="mdi mdi-chevron-down">{{ Auth::user()->name }}</i> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>

                            <!-- item-->
                            <a href="{{ route('profile.edit') }}" class="dropdown-item notify-item">
                                <i class="fe-user"></i>
                                <span>Profile</span>
                            </a>

                            <!-- item-->


                            <div class="dropdown-divider"></div>


                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a class="dropdown-item" href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                   <i class="dripicons-exit d-inline-block text-muted me-2"></i> {{ __('Log Out') }}
                                </a>
                            </form>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                            <i class="fe-settings noti-icon"></i>
                        </a>
                    </li>


                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="index.html" class="logo text-center">
                        <span class="logo-sm-2" style="color:white">
                            <span><h1>HR Audit</h1></span>
                        </span>
                        {{-- <span class="logo-sm">
                            <!-- <span class="logo-sm-text-dark">U</span> -->
                            <img src="{{asset('images/logo-sm.png') }}" alt="" height="28">
                        </span> --}}
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile waves-effect waves-light">
                            <i class="fe-menu"></i>
                        </button>
                    </li>



                </ul>
            </div>
            <!-- end Topbar -->


            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">



                            <li>
                                <a href="index.html">
                                    <i class="fe-airplay"></i>
                                    <span class="badge badge-danger badge-pill float-right">3</span>
                                    <span> Dashboard </span>
                                </a>
                            </li>





                         <li>

                            <a href="{{ route('personal.details.create')}}">
                                <i class="mdi mdi-image-frame "></i>
                                <span> BioData Form </span>
                            </a>
                        </li>
                         <li>

                            <a href="{{ route('personal.details.index')}}">
                                <i class="mdi mdi-playlist-check"></i>
                                <span>BioData List</span>
                            </a>
                        </li>





                            <li>
                                <a href="javascript: void(0);">
                                    <i class="fe-briefcase"></i>
                                    <span> Access Management </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{ route('access.users.index')}}">Users</a></li>
                                    <li><a href="{{ route('access.roles.index')}}">Roles</a></li>
                                    <li><a href="{{ route('access.permissions.index')}}">Permissions</a></li>
                                   </ul>
                            </li>

                            <li>

                                <a href="{{ route('personal.details.report')}}">
                                    <i class="mdi mdi-playlist-check"></i>
                                    <span>Reports</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class=" mdi mdi-settings "></i>
                                    <span> Settings </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">



                                    <li>
                                        <a href="{{ route('department.create') }}">
                                            <i class=" mdi mdi-circle-double "></i>

                                            <span> Department </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('employment.term.create')}}">
                                            <i class="  mdi mdi-circle-double "></i>

                                            <span> Employment Term </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('ethnicity.create') }}">
                                            <i class="mdi mdi-circle-double "></i>

                                            <span> Ethnicity </span>
                                        </a>
                                    </li>






                                    <li>
                                        <a href="{{ route('job.grade.create')}}">
                                            <i class="  mdi mdi-circle-double "></i>

                                            <span> Job Grade </span>
                                        </a>
                                    </li>












                                </ul>
                            </li>






                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

