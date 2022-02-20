@extends('index')

@section('meta')
<title>Exploore | Register</title>
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
                            <div class="login-form-title mt-3">Register</div>
                            <div class="login-form-description">Create your account and join with us</div>
                            <form action="/actionRegister" method="POST" enctype="multipart/form-data" class="mt-4">
                            @csrf()
                                <div class="form-group">
                                    <input type="text" name="full_name" class="form-control" placeholder="Your Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Your Email"
                                        onfocusout="validateEmail()" required>
                                    <div id="falseEmailMessage" class="invalid-message text-left ml-2 pl-1">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="inputPassword" class="form-control"
                                        placeholder="Your Password" minlength="8" required>
                                    <div id="emptyPasswordMessage" class="invalid-message text-left ml-2 pl-1">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="password" id="inputConfirmPassword" class="form-control"
                                        placeholder="Confirm Password" minlength="8" onfocusout="validatePassword()"
                                        required>
                                    <div id="truePasswordMessage" class="valid-message text-left ml-2 pl-1">
                                    </div>
                                    <div id="falsePasswordMessage" class="invalid-message text-left ml-2 pl-1">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="number" name="phone" class="form-control" placeholder="Your Phone number" required>
                                </div>
                                @if( session('mess') )
                                <span style="color: red;">Email has been used</span>
                                @endif

                                <div class="w-75 m-auto pt-3">
                                    <button type="submit" class="btn-sub-main w-100">Sign up</button>
                                </div>
                                <div class="mt-3 do-not-account">Already have an account? <a href="/login">Sign
                                        in</a></div>
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