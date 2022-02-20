@extends('index')

@section('meta')
<title>Tran Dang Minh Nhat (Change Password) - Exploore</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('public/client/css/login-register.css')}}">
@endsection

@section('content')
<div class="wrapper-content login-banner">

    <!-- HEADER -->
    <header class="d-none d-lg-block">
        <div class="block-header">

            <!-- TOP BAR HEADER -->
            @include('client.component.top-bar-header')

            <!-- MAIN HEADER -->
            @include('client.component.page-main-header')

        </div>
    </header>

    <!-- WRAPPER-BODY -->
    <div class="wrapper-body">

        <!-- MAIN CONTENT -->
        <div class="main-content pt-5 pt-lg-0">
            <div class="container">
                <div class="row justify-content-center mt-5 mb-5">
                    <div class="col-12 col-md-8 col-lg-5">
                        <div class="login-form p-5">
                            <div class="login-form-logo">
                                <img src="{{asset('public/client/img/logo/logo-black-color-1.png')}}" alt="">
                            </div>
                            <div class="login-form-title mt-3">Change Password</div>
                            <div class="login-form-description">Tran Dang Minh Nhat</div>
                            <form class="mt-4">
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Enter Your Current Password"
                                        required>
                                    <div class="invalid-message text-left ml-2 pl-1">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Enter Your New Password"
                                        required>
                                    <div class="invalid-message text-left ml-2 pl-1">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Confirm Your New Password"
                                        required>
                                    <div class="invalid-message text-left ml-2 pl-1">
                                    </div>
                                </div>
                                <div class="w-75 m-auto pt-3">
                                    <button type="submit" class="btn-sub-main w-100">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SCROLL TO TOP BTN -->
        @include('client.component.scroll-to-top-btn')

    </div>

    <!-- FOOTER -->
    @include('client.component.footer')

</div>
@endsection