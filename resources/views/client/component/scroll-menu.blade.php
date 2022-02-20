<div class="container-fluid bg-sub-secondary scroll-menu d-none d-lg-block">
    <nav class="container navbar navbar-expand-lg">
        <a class="navbar-brand" href="/">
            <img src="{{asset('public/client/img/logo/logo-white-color-1.png')}}" alt="" style="max-width: 125px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ml-3 mr-3">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item ml-3 mr-3">
                    <a class="nav-link" href="/tour-list">Tour</a>
                </li>
                <li class="nav-item ml-3 mr-3">
                    <a class="nav-link" href="/hotel-list">Hotel</a>
                </li>
                <li class="nav-item ml-3 mr-3">
                    <a class="nav-link" href="/blog-list">Blog</a>
                </li>
                <li class="nav-item ml-3 mr-3">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item ml-3 mr-3">
                    <div class="dropdown mt-2">
                        <a id="search-box" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-search-box rounded-0 mt-3"
                            aria-labelledby="search-box">
                            <div class="d-flex flex-row">
                                <input type="text" class="form-control rounded-0" placeholder="Search"
                                    aria-label="Search" aria-describedby="button-search">
                                <button class="btn rounded-0 bg-sub-primary" type="button" id="button-search"><i
                                        class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- ***** If user has logged in ***** -->
                <!-- =========== -->
                @if(isset($user))
                <li class="nav-item ml-3 mr-3 dropdown dropdown-scroll-menu">
                    <div class="d-flex align-items-end justify-content-between" id="dropdownScrollMenuProfile"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="d-flex align-items-end">
                            <img class="avatar-scroll-menu"
                                src="{{asset('public/client/img/tour-view/avatar.jpg')}}" width="32px" height="32px"
                                alt="">
                        </div>
                    </div>
                    <div class="dropdown-menu dropdown-menu-right w-75 mt-3"
                        aria-labelledby="dropdownScrollMenuProfile">
                        <a class="dropdown-item font-weight-normal border-bottom pt-2 pb-2" href="#">
                            <i class="fas fa-user-circle mr-3"></i>Profile
                        </a>
                        <a class="dropdown-item font-weight-normal border-bottom pt-2 pb-2" href="#">
                            <i class="fas fa-shopping-cart mr-3"></i>My List <div
                                class="number-notification bg-success float-right">9+</div>
                        </a>
                        <a class="dropdown-item font-weight-normal border-bottom pt-2 pb-2" href="#">
                            <i class="fas fa-bell mr-3"></i>Notification <div
                                class="number-notification bg-danger float-right">
                                3</div>
                        </a>
                        <a class="dropdown-item font-weight-normal border-bottom pt-2 pb-2" href="#">
                            <i class="fas fa-cog mr-3"></i>Setting
                        </a>
                        @if($user->permissions == 1)
                    <a class="dropdown-item font-weight-normal pt-2 pb-2" href="/dashboard">
                        <i class="fas fa-cog mr-3"></i>Admin
                    </a>  
                    @endif
                        <a class="dropdown-item font-weight-normal pt-2 pb-2" href="/logout">
                            <i class="fas fa-sign-out-alt mr-3"></i>Logout
                        </a>
                    </div>
                </li>
                @endif
                <!---->
                
            </ul>
        </div>
    </nav>
</div>