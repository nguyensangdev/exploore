            <!-- Topbar Start -->
            <div class="navbar-custom">
                    <ul class="list-unstyled topnav-menu float-right mb-0">

                        <li class="d-none d-sm-block">
                            <form class="app-search">
                                <div class="app-search-box">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <div class="input-group-append">
                                            <button class="btn" type="submit">
                                                <i class="fe-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </li>


                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                {{-- <img src="{{asset('admin/assets/images/users/user-1.jpg')}}" alt="user-image" class="rounded-circle"> --}}
                                <span class="pro-user-name ml-1">
                                    Geneva <i class="mdi mdi-chevron-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-user"></i>
                                    <span>My Account</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-settings"></i>
                                    <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-lock"></i>
                                    <span>Lock Screen</span>
                                </a>

                                <div class="dropdown-divider"></div>

                                <!-- item-->
                                <a href="/logoutAdmin" class="dropdown-item notify-item">
                                    <i class="fe-log-out"></i>
                                    <span>Logout</span>
                                </a>

                            </div>
                        </li>


                    </ul>

                    <!-- LOGO -->
                    <div class="logo-box">
                        <a href="/admin" class="logo text-center">
                            <span class="logo-lg">
                                <img src="{{asset('public/client/img/logo/logo-white-color-1.png')}}" alt="" height="24">
                                <!-- <span class="logo-lg-text-light">UBold</span> -->
                            </span>
                            <span class="logo-sm">
                                <!-- <span class="logo-sm-text-dark">U</span> -->
                                <img src="{{asset('public/client/img/logo/logo-white-color-1.png')}}" alt="" height="18">
                            </span>
                        </a>
                    </div>

                    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                        <li>
                            <button class="button-menu-mobile waves-effect waves-light">
                                <i class="fe-menu"></i>
                            </button>
                        </li>


                        {{-- <li class="dropdown dropdown-mega d-none d-lg-block">
                            <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                Mega Menu
                                <i class="mdi mdi-chevron-down"></i>
                            </a>
                            <div class="dropdown-menu dropdown-megamenu">
                                <div class="row">
                                    <div class="col-sm-8">

                                        <div class="row">


                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center mt-3">
                                            <h3 class="text-dark">Special Discount Sale!</h3>
                                            <h4>Save up to 70% off.</h4>
                                            <button class="btn btn-primary btn-rounded mt-3">Download Now</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </li> --}}
                    </ul>
                </div>
                <!-- end Topbar -->

                <!-- ========== Left Sidebar Start ========== -->
                <div class="left-side-menu">

                    <div class="slimscroll-menu">

                        <!--- Sidemenu -->
                        <div id="sidebar-menu">

                            <ul class="metismenu" id="side-menu">

                                <li class="menu-title">Navigation</li>

                                <li>
                                    <a href="javascript: void(0);">
                                        <i class="fe-airplay"></i>
                                        <span class="badge badge-success badge-pill float-right">4</span>
                                        <span> Dashboards </span>
                                    </a>

                                </li>

                                <li>
                                    <a href="/hotel">
                                        <i class="fas fa-hotel"></i>
                                        <span>Hotel</span>
                                        
                                    </a>

                                </li>
                                <?php if(Auth::check()){
                                    $user = Auth::user();
                                    if($user->permissions == 0){                     
                                echo '<li>
                                <li>
                                <a href="javascript: void(0);">
                                    <i class="fas fa-torii-gate"></i>
                                    <span> Tour Management </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="/tour">
                                        <span>Tour</span>
                                    </a>
                                    </li>
                                    <li>
                                       <a href="/tourDay">
                                        <span>Tour day</span>
                                        
                                    </a>
                                    </li>
                                </ul>
                                <li>
                                    <a href="/news">
                                    <i class="fas fa-newspaper"></i>
                                        <span>Blog</span>
                                        
                                    </a>

                                </li>
                                <li>
                                    <a href="/comment">
                                        <i class="fas fa-comments"></i>
                                        <span>Comment</span>
                                        
                                    </a>

                                </li>
                                <li>
                                    <a href="/user">
                                        <i class="fe-users"></i>
                                        <span>Account</span>
                                        
                                    </a>
                                </li>';}
                                }?>
                                 <li>
                                        <a href="javascript: void(0);">
                                            <i class="fe-briefcase"></i>
                                            <span> Booking </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul class="nav-second-level" aria-expanded="false">
                                            <li>
                                                <a href="/bookHotel">Booking Hotel</a>
                                            </li>
                                            <li>
                                                <a href="/bookTour">Booking Tour</a>
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

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
