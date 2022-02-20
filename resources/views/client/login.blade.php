@extends('index')

@section('meta')
<title>Exploore | Login</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('public/client/css/login-register.css')}}">
@endsection

@section('content')
<div class="wrapper-content login-banner">

    <!-- HEADER -->
    <header class="d-none d-lg-block"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
                            <div class="login-form-title mt-3">Login</div>
                            <div class="login-form-description">Sign in to your account</div>

                            <form action="/actionLogin" method="POST" enctype="multipart/form-data" class="mt-4">
                            @csrf()
                                <div class="form-group">
                                    <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Your Email"
                                        onfocusout="validateEmail()" required>
                                    <div id="wrongEmailMessage" class="invalid-message text-left ml-2 pl-1">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="inputPassword" class="form-control"
                                        placeholder="Your Password" required>
                                    <div class="invalid-message text-left ml-2 pl-1" for="#inputPassword"></div>
                                </div>
                                @if( session('mess') )
                                <span style="color: red;">Thông tin đăng nhập không chính xác</span>
                                @endif

                                <!--<div class="mt-3 do-not-account">Forgot your <a href="/forgot-password">password</a> ?</div>-->

                                <div class="w-75 m-auto pt-3">
                                    <button type="submit" class="btn-sub-main w-100">Sign in</button>
                                </div>
                                <div class="mt-3 do-not-account">Do not have an account? <a href="/register">Sign
                                        up</a></div>
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