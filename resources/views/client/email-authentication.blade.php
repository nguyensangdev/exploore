@extends('index')

@section('meta')
<title>Email Authenticaation - Exploore | Register</title>
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
                        <form action="/verifyEmail" method="post">
                        @csrf()
                               <input type="hidden" value="{{$email}}" name="email">
                                <input type="hidden" value="{{$full_name}}" name="full_name">
                                <input type="hidden" value="{{$password}}" name="password">
                                <input type="hidden" value="{{$phone}}" name="phone">
                                <input type="hidden" value="{{$code}}" name="code">
                            <div class="login-form-logo">
                                <img src="{{asset('public/client/img/logo/logo-black-color-1.png')}}" alt="">
                            </div>
                            <div class="login-form-title text-uppercase text-sub-primary mt-3">You've got mail!</div>
                            <div class="login-form-description">We just sent a confirmation code to <i><b>{{$email}}</b></i>. Verify your address and we'll get you all set up.</div>
                            <div class="d-flex justify-content-center mt-3">
                            <div class="form-group">
                                    <input type="number" name="codeVerify" id="inputEmail" class="form-control" placeholder="Code"
                                     required>
                                    </div>
                                </div>
                                @if(session('tt'))
                                <span style="color: red;">Code không đúng</span>
                                @endif
                                <button class="btn btn-sub-secondary text-capitalize">Send code</button>
                                <br>
                            </div>
                        </div>
                        </form>

                        <!-- <form action="/resendEmail" method="post">
                        @csrf()
                               <input type="hidden" value="{{$email}}" name="email">
                                <input type="hidden" value="{{$full_name}}" name="full_name">
                                <input type="hidden" value="{{$password}}" name="password">
                                <input type="hidden" value="{{$phone}}" name="phone">
                                <input type="hidden" value="{{$code}}" name="code">
                                <button class="btn text-capitalize">Resend code</button>
                                <br>
                            </div>
                        </div>
                        </form> -->
                        
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