@extends('index')

@section('meta')
<title>Forgot Password - Exploore</title>
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
                            <div class="login-form-title mt-3">Forgot Password</div>
                            <div class="login-form-description">Enter your email to reset password</div>
                            <form action="/resetPassword"  method="post" class="mt-4">
                            @csrf()
                                <div class="form-group">
                                    @if(session('InputCode'))
                                    <input type="number" name="code" id="inputEmail" class="form-control" placeholder="Your code"
                                        required>
                                        <input type="hidden" name="codeDefault" value="{{session('codeDefault')}}" >
                                        <input type="hidden" name="email" value="{{session('email')}}" >
                                        @else
                                        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Your Email"
                                        onfocusout="validateEmail()" required>
                                        @endif
                                    <div id="wrongEmailMessage" class="invalid-message text-left ml-2 pl-1">
                                        @if(session('mess'))
                                        {{session('mess')}}
                                        @endif
                                    </div>
                                </div>
                                <div class="w-75 m-auto pt-3">
                                    <button type="submit" class="btn-sub-main w-100">Submit</button>
                                </div>
                                <div class="mt-3 do-not-account">Back to <a href="/login">Sign
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