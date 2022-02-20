<div class="header-top-bar">
    <div class="container">
        <div class="row d-flex">
            <div class="dropdown p-2 top-bar-item mr-auto">
                <a class="btn-none hover-primary" role="button" id="languageDropdownMenu" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Language <i class="fas fa-chevron-down ml-1 down-arrow"></i>
                </a>
                <div class="dropdown-menu mt-3 rounded-0 pt-0 pb-0" aria-labelledby="languageDropdownMenu">
                    <a class="dropdown-item hover-primary" href="#">English</a>
                    <a class="dropdown-item hover-primary" href="#">Vietnamese</a>
                </div>
            </div>

            <!-- ***** if user has NOT logged in yet ***** -->
            <!-- ========== -->
            @if(isset($user))
  <!-- ***** if user has logged in ***** -->
            <!-- ========== -->
            <div class="p-2 top-bar-item d-flex justify-content-end">
                <!-- <div class="position-relative mr-4">
                    <a href="" class="btn-none hover-primary">
                        <i class="fas fa-bell"></i>
                    </a>
                    <div class="number-desktop-notification bg-success">9+</div>
                </div>
                <div class="position-relative mr-4">
                    <a href="" class="btn-none hover-primary">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <div class="number-desktop-notification bg-danger">9+</div>
                </div> -->
            </div>
            <div class="p-2 top-bar-item dropdown ml-3" style="border: none">
                <a href="" class="btn-none hover-primary d-flex align-items-center" id="dropdownMenuTopHeader"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle avatar-top-header"
                        src="{{asset('public/client/img/tour-view/avatar.jpg')}}" width="22px" height="22px" alt="">
                    <div class="dropdown-toggle ml-2"></div>
                </a>
                <div class="dropdown-menu dropdown-menu-right mt-3" aria-labelledby="dropdownMenuTopHeader"
                    style="width: 150px">
                    <a class="dropdown-item font-weight-normal pt-2 pb-2" href="/profile">
                        <i class="fas fa-user-circle mr-3"></i>Profile
                    </a>
                    <a class="dropdown-item font-weight-normal pt-2 pb-2" href="#">
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
            </div>
            <!---->

            @else
            <div class="p-2 top-bar-item">
                <a href="/login" class="btn-none hover-primary">Login</a>
            </div>
            <div class="p-2 top-bar-item" style="border: none">
                <a href="/register" class="btn-none hover-primary">Register</a>
            </div>
            @endif

            <!---->



        </div>
    </div>
</div>
