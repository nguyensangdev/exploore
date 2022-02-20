<div class="bg-sub-primary w-75 mobile-side-menu d-block d-lg-none" style="z-index: 1000002;">
    <ul class="list-group">
        <li class="list-group-item pt-3 pb-3 search-item">
            <form action="">
                <div class="input-group">
                    <input type="text" class="form-control mobile-search-input" placeholder="Search here ..."
                        aria-label="Search here" aria-describedby="mobile-search-btn">
                    <div class="input-group-append">
                        <button class="pl-2 pr-2" type="submit" id="mobile-search-btn">
                            <i class="fas fa-search ml-1 mr-1"></i>
                        </button>
                    </div>
                </div>
            </form>
        </li>

        <!-- ***** if user has logged in ***** -->
        <!-- ===================== -->
        @if(isset($user))
        <li class="list-group-item dropdown">
            <div class="d-flex align-items-end justify-content-between" id="dropdownMenuProfileMobile"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="d-flex align-items-end">
                    <img class="avatar-mobile-side-menu" src="{{asset('public/upload'.$user->avatar)}}"
                        width="36px" height="36px" alt="">
                    <div class="ml-3 username-mobile-side-menu">{{$user->full_name}}</div>
                </div>
                <div class="dropdown-toggle username-mobile-side-menu float-right"></div>
            </div>
            <div class="dropdown-menu dropdown-menu-right w-75 mt-3" aria-labelledby="dropdownMenuProfileMobile">
                <a class="dropdown-item font-weight-normal border-bottom pt-2 pb-2" href="/profile">
                    <i class="fas fa-user-circle mr-3"></i>Profile
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

        <li class="list-group-item"><a href="/">Home</a></li>
        <li class="list-group-item"><a href="/about">About</a></li>
        <li class="list-group-item"><a href="/tour-list">Tour</a></li>
        <li class="list-group-item"><a href="/hotel-list">Hotel</a></li>
        <li class="list-group-item"><a href="/blog-list">Blog</a></li>
        <li class="list-group-item"><a href="">Contact</a></li>

        <!-- ***** if user has NOT logged in yet ***** -->
        <!-- ===================== -->
                @if(!isset($user))
        <li class="list-group-item group-btn-sign d-flex justify-content-center">
            <a href="/login" class="btn-sub-secondary mr-1">Sign in</a>
            <a href="/register" class="btn-sub-secondary ml-1">Sign up</a>
        </li>
        @endif
        <!---->

    </ul>
</div>