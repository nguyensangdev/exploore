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
        <div class="main-content">
            <section class="breadcrumb-area">
                <div class="container">
                    <ul class="breadcrumb-box d-flex align-items-end">
                        <li class="breadcrumb-link">
                            <a class="breadcrumb-home" href="/">Home<i
                                    class="fas fa-long-arrow-alt-right align-self-end ml-3 mr-3"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-link active"><a href="/contact">Contact</a></li>
                    </ul>
                    <div class="breadcrumb-title"></div>
                </div>
            </section>

            <section class="bg-white pt-5 pb-5">
                <div class="container">
                    <div class="row flex-row-reverse">
                        <div class="col-12 col-md-8">
                            <div class="contact-thumbnail">
                                <img src="{{asset('public/client/img/background/78715969_476822589898794_3423629864568094720_n.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-12 col-md-4 pt-5">
                                <div class="contact-info-box bg-sub-primary p-4">
                                    <div class="title-contact text-center mb-4">Information</div>
                                    <div class="mb-3">
                                        <span class="font-weight-bold mr-3">Email:</span>
                                        <span>hello@exploore.com</span>
                                    </div>
                                    <div class="mb-3">
                                        <span class="font-weight-bold mr-3">Phone:</span>
                                        <span>+84 963 597 534</span>
                                    </div>
                                    <div class="mb-3">
                                        <span class="font-weight-bold mr-3">Address:</span>
                                        <span>566 Nguyen Thai Son St, Ward 5, Go Vap District, HCMC, Vietnam</span>
                                    </div>
                                    <hr>
                                    <div class="mt-3">
                                        <h5>Subscribe Exploore to get latest offers and deals to day</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </section>

            <section class="contact-about">
                <div class="container pt-5">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-3 d-none d-lg-block">
                            <img src="{{asset('public/client/img/homepage/contact-people.png')}}" width="100%" alt="">
                        </div>
                        <div class="col-12 col-lg-5">
                            <div class="contact-about-form p-5">
                                <div class="contact-about-form-title">Contact us</div>
                                <div class="contact-about-form-description">Just pack and go! Let leave your
                                    travel
                                    plan to travel experts!</div>
                                <form class="mt-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your Email">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="3" placeholder="Your Message"></textarea>
                                    </div>
                                    <div class="w-75 m-auto pt-3">
                                        <button type="submit" class="btn-sub-main w-100">Send message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
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