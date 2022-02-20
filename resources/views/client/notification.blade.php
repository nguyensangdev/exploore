@extends('index')

@section('meta')
<title>Exploore | About</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('public/client/css/about.css')}}">
<link rel="stylesheet" href="{{asset('public/client/css/contact.css')}}">
<link rel="stylesheet" href="{{asset('public/client/css/responsive/about-responsive.css')}}">
@endsection

@section('content')
<div class="wrapper-content about-banner">

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
        <div class="main-content p-5">
            <section class="notification">
                <div class="col-12 box-content">
                    <div class="alert-sign">
                        <img src="https://account.similarweb.com/images/registration/confirmation.svg">
                    </div>
                   <h2>Perfect! We’ve sent you a verification link!</h2>
                   <p>Once you verify your email address, you can get started using SimilarWeb!
                        Can’t find the email? </p>
                    <button class="btn-sub-primary"><a href="/" style="color: #fff;"> Go here!</a></button>
                </div>
            </section>


        </div>

        <!-- SCROLL TO TOP BTN -->
        @include('client.component.scroll-to-top-btn')

    </div>

    <!-- FOOTER -->
    @include('client.component.footer')

</div>
@endsection