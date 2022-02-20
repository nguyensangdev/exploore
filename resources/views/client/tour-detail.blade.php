@extends('index')

@section('meta')
    <title>London Tour - Exploore | Tour</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('public/client/css/tour-detail.css')}}">
    <link rel="stylesheet" href="{{asset('public/client/css/responsive/tour-detail-responsive.css')}}">
    <style type="text/css">
        .tour-detail-banner {
            background-image: url("{{asset('/public/upload')}}/{{$tour->tour_img}}");
        }
        .tour-detail-banner-overlay {
            background: rgb(0 0 0 / 44%);
            background-repeat: repeat;
            background-attachment: fixed;
            background-position: top;
            -webkit-background-size: cover;
            background-size: cover;
            height: 90vh;
        }
        .breadcrumb-title {
            color: #000;
            -webkit-text-stroke: 3px #000;
        }
    </style>
@endsection

@section('content')
    <div class="wrapper-content tour-detail-banner">
<div class="tour-detail-banner-overlay">
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
            <div class="main-content">
                <section class="breadcrumb-area">
                    <div class="container">
                        <ul class="breadcrumb-box d-flex align-items-end">
                            <li class="breadcrumb-link">
                                <a class="breadcrumb-home" href="/">Home<i
                                        class="fas fa-long-arrow-alt-right align-self-end ml-3 mr-3"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-link">
                                <a class="breadcrumb-home" href="/tour-list">Tour<i
                                        class="fas fa-long-arrow-alt-right align-self-end ml-3 mr-3"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-link active"><a href="/tour-list/tour-detail">{{$tour->tour_name}} <span
                                class="tour-price d-none d-md-inline-block">{{$tour->tour_price}}<sup>$</sup></span></a>
                            </li>
                        </ul>
                        <div class="breadcrumb-title pb-5">
                        </div>
                    </div>
                </section>

                <section class="mt-5 mb-5">
                    <div class="container">
                    <form action="/payment" method="post">
                        @csrf
                        <div class="card-group-btn">
                            <input type="hidden" value='{{$tour->id_tour}}' name="id_tour">
                            <input type="hidden" value="" name="end_day">
                            <button  type="submit" class="btn-sub-primary mr-3">Book now</button>
                            </form>

                        <a href="/"  class="pt-2 pb-2 btn-sub-secondary">Back to explore more</a>
                    </div>
                </section>

                <section class="tour-info mt-5 mb-5">
                    <div class="container">
                        <div class="sub-title-section d-flex align-items-baseline">
                            <div class="yellow-row mr-1"></div>
                            <i class="fas fa-walking"></i>
                        </div>
                        <div class="title-section mt-1">
                            <h1>Epic Journeys</h1>
                        </div>
                        <!--<div class="tour-table d-flex flex-column flex-lg-row mt-5 mb-5">-->
                        <!--    <div class="tour-tr text-center flex-fill d-flex flex-row flex-lg-column">-->
                        <!--        <div class="tour-th text-uppercase font-weight-bold pt-2 pb-2">Date</div>-->
                        <!--        <div class="tour-td text-capitalize pt-2 pb-2">17 oct - 26 oct</div>-->
                        <!--    </div>-->
                        <!--    <div class="tour-tr text-center flex-fill d-flex flex-row flex-lg-column">-->
                        <!--        <div class="tour-th text-uppercase font-weight-bold pt-2 pb-2">Duration</div>-->
                        <!--        <div class="tour-td text-capitalize pt-2 pb-2">04 days</div>-->
                        <!--    </div>-->
                        <!--    <div class="tour-tr text-center flex-fill d-flex flex-row flex-lg-column">-->
                        <!--        <div class="tour-th text-uppercase font-weight-bold pt-2 pb-2">Review</div>-->
                        <!--        <div class="tour-td text-capitalize pt-2 pb-2">88</div>-->
                        <!--    </div>-->
                        <!--    <div class="tour-tr text-center flex-fill d-flex flex-row flex-lg-column">-->
                        <!--        <div class="tour-th text-uppercase font-weight-bold pt-2 pb-2">Rating</div>-->
                        <!--        <div class="tour-td text-capitalize pt-2 pb-2">4/5</div>-->
                        <!--    </div>-->
                        <!--    <div class="tour-tr text-center flex-fill d-flex flex-row flex-lg-column">-->
                        <!--        <div class="tour-th text-uppercase font-weight-bold pt-2 pb-2">Availability</div>-->
                        <!--        <div class="tour-td text-capitalize pt-2 pb-2">25</div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="row mt-5">
                            <div class="col-6 col-md-4 col-lg-2 mb-3">
                                <div class="epic-box text-center p-2">
                                    <i class="fas fa-tasks fa-2x"></i>
                                    <div class="epic-name mt-2">Insurrance</div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-2 mb-3">
                                <div class="epic-box text-center p-2">
                                    <i class="fas fa-coffee fa-2x"></i>
                                    <div class="epic-name mt-2">All drinks included</div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-2 mb-3">
                                <div class="epic-box text-center p-2">
                                    <i class="fas fa-utensils fa-2x"></i>
                                    <div class="epic-name mt-2">Lunch in restaurant</div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-2 mb-3">
                                <div class="epic-box text-center p-2">
                                    <i class="fas fa-ticket-alt fa-2x"></i>
                                    <div class="epic-name mt-2">All tickets museum</div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-2 mb-3">
                                <div class="epic-box text-center p-2">
                                    <i class="fas fa-user-friends fa-2x"></i>
                                    <div class="epic-name mt-2">Tour guides</div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-2 mb-3">
                                <div class="epic-box text-center p-2">
                                    <i class="fas fa-plus-circle fa-2x"></i>
                                    <div class="epic-name mt-2">Travel insurrance</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="tour-overview mt-5 mb-5">
                    <div class="container">
                        <div class="sub-title-section d-flex align-items-baseline">
                            <div class="yellow-row mr-1"></div>
                            <i class="fas fa-walking"></i>
                        </div>
                        <div class="title-section mt-1 mb-5">
                            <h1>Tour overview</h1>
                        </div>
                        <!-- For Desktop -->
                        <div class="d-none d-md-block">

                            @foreach($tourDay as $item)
                                <div class="row timeline-box align-items-center position-relative pl-0 pr-0 pt-5 pb-5">
                                    <div class="day-box pr-3 pl-3">Day 1</div>
                                    <div class="line-box col-1 p-0 d-flex align-items-center">
                                        <i class="far fa-circle"></i>
                                        <div class="w-100 line-row"></div>
                                    </div>
                                    <div class="content-overview col-6 col-lg-5 p-5">
                                        <div class="d-flex align-items-center">
                                            <div class="content-overview-icon mr-3">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <div class="content-overview-name">{{$item->tour_day_name}}</div>
                                        </div>
                                        <div class="content-overview-text mt-1">
                                            {!!$item->tour_day_content!!}
                                        </div>
                                    </div>
                                    <div class="col-1 p-0">
                                        <div class="w-100 line-row"></div>
                                    </div>
                                    <div class="timeline-img col-4 col-lg-5 p-0">
                             <img src="{{asset('/public/upload')}}/{{$item->tour_day_img}}" alt="">
                                    </div>
                                </div>
                            @endforeach

                        </div>

                        <!-- For Mobile -->
                        <div class="d-block d-md-none">
                            <div class="owl-carousel owl-theme">
                                <div class="item p-3">
                                    <div class="card-timeline p-3">
                                        <div class="header-card-timeline pt-1 pb-1">Day 01</div>
                                        <div class="img-card-timeline">
                                            <img src="{{asset('public/client/img/tour-view/london.png')}}" width="100%"
                                                 alt="">
                                        </div>
                                        <div class="content-card-timeline">
                                            <div class="title-card-timeline d-flex align-items-center mt-3 mb-3">
                                                <div class="content-overview-icon mr-3">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                </div>
                                                <div class="content-overview-name">London England</div>
                                            </div>
                                            <div class="mani-content-card-timeline">
                                                Lorem ipsum dolor sit amet, consectetur. Nulla rhoncus ultrices
                                                purus, volutpat. Lorem ipsum dolor sit amet, consectetur elit dolor
                                                sit amet, consectetur nulla rhoncus ultrices purus. Lorem ipsum
                                                dolor sit amet, consectetur elit dolor sit amet. Lorem ipsum dolor
                                                sit amet, consectetur elit dolor sit amet, consectetur nulla rhoncus
                                                ultrices purus.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item p-3">
                                    <div class="card-timeline p-3">
                                        <div class="header-card-timeline pt-1 pb-1">Day 02</div>
                                        <div class="img-card-timeline">
                                            <img src="{{asset('public/client/img/tour-view/nottingham.png')}}"
                                                 width="100%"
                                                 alt="">
                                        </div>
                                        <div class="content-card-timeline">
                                            <div class="title-card-timeline d-flex align-items-center mt-3 mb-3">
                                                <div class="content-overview-icon mr-3">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                </div>
                                                <div class="content-overview-name">Nottingham England</div>
                                            </div>
                                            <div class="mani-content-card-timeline">
                                                Lorem ipsum dolor sit amet, consectetur. Nulla rhoncus ultrices
                                                purus, volutpat. Lorem ipsum dolor sit amet, consectetur elit dolor
                                                sit amet, consectetur nulla rhoncus ultrices purus. Lorem ipsum
                                                dolor sit amet, consectetur elit dolor sit amet. Lorem ipsum dolor
                                                sit amet, consectetur elit dolor sit amet, consectetur nulla rhoncus
                                                ultrices purus.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item p-3">
                                    <div class="card-timeline p-3">
                                        <div class="header-card-timeline pt-1 pb-1">Day 03</div>
                                        <div class="img-card-timeline">
                                            <img src="{{asset('public/client/img/tour-view/birmingham.png')}}"
                                                 width="100%"
                                                 alt="">
                                        </div>
                                        <div class="content-card-timeline">
                                            <div class="title-card-timeline d-flex align-items-center mt-3 mb-3">
                                                <div class="content-overview-icon mr-3">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                </div>
                                                <div class="content-overview-name">Birmingham England</div>
                                            </div>
                                            <div class="mani-content-card-timeline">
                                                Lorem ipsum dolor sit amet, consectetur. Nulla rhoncus ultrices
                                                purus, volutpat. Lorem ipsum dolor sit amet, consectetur elit dolor
                                                sit amet, consectetur nulla rhoncus ultrices purus. Lorem ipsum
                                                dolor sit amet, consectetur elit dolor sit amet. Lorem ipsum dolor
                                                sit amet, consectetur elit dolor sit amet, consectetur nulla rhoncus
                                                ultrices purus.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item p-3">
                                    <div class="card-timeline p-3">
                                        <div class="header-card-timeline pt-1 pb-1">Day 04</div>
                                        <div class="img-card-timeline">
                                            <img src="{{asset('public/client/img/tour-view/manchester.png')}}"
                                                 width="100%"
                                                 alt="">
                                        </div>
                                        <div class="content-card-timeline">
                                            <div class="title-card-timeline d-flex align-items-center mt-3 mb-3">
                                                <div class="content-overview-icon mr-3">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                </div>
                                                <div class="content-overview-name">Manchester England</div>
                                            </div>
                                            <div class="mani-content-card-timeline">
                                                Lorem ipsum dolor sit amet, consectetur. Nulla rhoncus ultrices
                                                purus, volutpat. Lorem ipsum dolor sit amet, consectetur elit dolor
                                                sit amet, consectetur nulla rhoncus ultrices purus. Lorem ipsum
                                                dolor sit amet, consectetur elit dolor sit amet. Lorem ipsum dolor
                                                sit amet, consectetur elit dolor sit amet, consectetur nulla rhoncus
                                                ultrices purus.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="comment mt-3">
                    <div class="container">
                        <div class="row justify-content-between position-relative" style="z-index: 50;">

                            <div class="col-12 col-lg-7 mb-3">
                                <div id="comment">


                                <!-- COMMENT -->
                                    @include('client.contentComment')


                                <!-- REPLY COMMENT -->


                                </div>
                            </div>
                            <div class="col-12 col-lg-4 mb-3">
                                <div class="sticky-top" style="top: 75px;">
                                    <div class="sub-title-section d-flex align-items-baseline">
                                        <div class="yellow-row mr-1"></div>
                                        <i class="fas fa-walking"></i>
                                    </div>
                                    <div class="title-section mt-1 mb-5">
                                        <h1>Leave your comment</h1>
                                    </div>

                                    <div class="rate-cmt-box d-flex justify-content-start">
                                        <div class="position-relative mr-4">
                                            <div class="rating-checkstar one-star"><i class="fas fa-star"></i></div>
                                            <input class="rating-input one-input" name="rating" type="radio" value="1">
                                        </div>
                                        <div class="position-relative mr-4">
                                            <div class="rating-checkstar two-star"><i class="fas fa-star"></i></div>
                                            <input class="rating-input two-input" name="rating" type="radio" value="2">
                                        </div>
                                        <div class="position-relative mr-4">
                                            <div class="rating-checkstar three-star"><i class="fas fa-star"></i></div>
                                            <input class="rating-input three-input" name="rating" type="radio"
                                                   value="3">
                                        </div>
                                        <div class="position-relative mr-4">
                                            <div class="rating-checkstar four-star"><i class="fas fa-star"></i></div>
                                            <input class="rating-input four-input" name="rating" type="radio" value="4">
                                        </div>
                                        <div class="position-relative mr-4">
                                            <div class="rating-checkstar five-star"><i class="fas fa-star"></i></div>
                                            <input class="rating-input five-input" name="rating" type="radio" value="5">
                                        </div>
                                    </div>
                                    <input type="hidden" name="id_tour" value="{{$tour->id_tour}}">
                                    <div class="mt-5">
                                        @if($user)
                                            <input type="hidden" name="id_account" value="{{$user->id_account}}"
                                                   class="form-control rounded-0 mb-3" placeholder="Your Name">
                                        @else
                                            <input type="text" name="full_name" class="form-control rounded-0 mb-3"
                                                   placeholder="Your Name">
                                            <input type="email" name="email" class="form-control rounded-0 mb-3"
                                                   placeholder="your Email">
                                        @endif
                                        <textarea name="content" class="form-control rounded-0 mb-3"
                                                  placeholder="Your Comment ..."
                                                  rows="5"></textarea>
                                        <button id="sendComment" class="btn-sub-main">Send message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="expert mt-5 mb-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="sub-title-section d-flex align-items-baseline">
                                    <div class="yellow-row mr-1"></div>
                                    <i class="fas fa-walking"></i>
                                </div>
                                <div class="title-section mt-1">
                                    <h1>Talk to our expert explorer</h1>
                                </div>
                                <div class="content-section">
                                    <p class="mt-3">We're here to chat about your next big idea.</p>
                                    <ul class="mt-3 row pl-3">
                                        <li class="mt-1"><i class="fas fa-long-arrow-alt-right mr-2"></i>7 am - 4 pm
                                            Monday through Thursday.
                                        </li>
                                        <li class="mt-1"><i class="fas fa-long-arrow-alt-right mr-2"></i>7 am to 1
                                            pm Fridays (US central) toll free or by skype.
                                        </li>
                                    </ul>
                                    <p class="mt-3">Otherwise, email us anytime. On average we provide quotes within
                                        6 hours during business hours and the next day during off business hours.
                                    </p>
                                    <p class="mt-3">Privately guided trips allow you to be in control of all the
                                        details of your trip - departure times, accommodations, extra nights, extra
                                        activities, extra experiences - what you want and how you want it.</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="info-expert-box">
                                    <div class="row text-center d-flex flex-column align-items-center">
                                        <img class="logo-expert rounded-circle"
                                             src="{{asset('public/client/img/tour-view/avatar.jpg')}}" width="120px"
                                             height="120px" alt="">
                                        <div class="name-expert text-uppercase font-weight-bold mt-1">Peter Wilson
                                        </div>
                                        <div class="role-expert mt-1">Commercial Director</div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12 col-md-4 mt-3 d-flex flex-column align-items-center">
                                            <div class="expert-icon p-3">
                                                <i class="fas fa-desktop"></i>
                                            </div>
                                            <div class="expert-type-contact mt-1">Contact Skypes</div>
                                            <div class="account-expert mt-1">peter.wilson</div>
                                        </div>
                                        <div class="col-12 col-md-4 mt-3 d-flex flex-column align-items-center">
                                            <div class="expert-icon p-3">
                                                <i class="fas fa-phone"></i>
                                            </div>
                                            <div class="expert-type-contact mt-1">Phone</div>
                                            <div class="account-expert mt-1">+1 (324) 317-8887</div>
                                        </div>
                                        <div class="col-12 col-md-4 mt-3 d-flex flex-column align-items-center">
                                            <div class="expert-icon p-3">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                            <div class="expert-type-contact mt-1">Email</div>
                                            <div class="account-expert mt-1">peter.wilson@gmail.com</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="tour-offer pt-4 pb-5">
                    <div class="container">
                        <div class="sub-title-section d-flex align-items-baseline">
                            <div class="yellow-row mr-1"></div>
                            <i class="fas fa-walking"></i>
                        </div>
                        <div class="title-section mt-1">
                            <h1>You will also like</h1>
                        </div>
                        <div class="owl-carousel owl-theme mt-5">
                            <div class="item p-3">
                                <a href="">
                                    <div class="card-offer position-relative">
                                        <img src="{{asset('public/client/img/footer/offer-1.jpg')}}" width="100%"
                                             alt="">
                                        <div class="card-offer-title">Alpha</div>
                                    </div>
                                </a>
                            </div>
                            <div class="item p-3">
                                <a href="">
                                    <div class="card-offer position-relative">
                                        <img src="{{asset('public/client/img/footer/offer-2.jpg')}}" width="100%"
                                             alt="">
                                        <div class="card-offer-title">Otipus</div>
                                    </div>
                                </a>
                            </div>
                            <div class="item p-3">
                                <a href="">
                                    <div class="card-offer position-relative">
                                        <img src="{{asset('public/client/img/footer/offer-3.jpg')}}" width="100%"
                                             alt="">
                                        <div class="card-offer-title">Sunrise</div>
                                    </div>
                                </a>
                            </div>
                            <div class="item p-3">
                                <a href="">
                                    <div class="card-offer position-relative">
                                        <img src="{{asset('public/client/img/footer/offer-4.jpg')}}" width="100%"
                                             alt="">
                                        <div class="card-offer-title">Carisbean</div>
                                    </div>
                                </a>
                            </div>
                            <div class="item p-3">
                                <a href="">
                                    <div class="card-offer position-relative">
                                        <img src="{{asset('public/client/img/footer/offer-1.jpg')}}" width="100%"
                                             alt="">
                                        <div class="card-offer-title">Alpha</div>
                                    </div>
                                </a>
                            </div>
                            <div class="item p-3">
                                <a href="">
                                    <div class="card-offer position-relative">
                                        <img src="{{asset('public/client/img/footer/offer-2.jpg')}}" width="100%"
                                             alt="">
                                        <div class="card-offer-title">Otipus</div>
                                    </div>
                                </a>
                            </div>
                            <div class="item p-3">
                                <a href="">
                                    <div class="card-offer position-relative">
                                        <img src="{{asset('public/client/img/footer/offer-3.jpg')}}" width="100%"
                                             alt="">
                                        <div class="card-offer-title">Sunrise</div>
                                    </div>
                                </a>
                            </div>
                            <div class="item p-3">
                                <a href="">
                                    <div class="card-offer position-relative">
                                        <img src="{{asset('public/client/img/footer/offer-4.jpg')}}" width="100%"
                                             alt="">
                                        <div class="card-offer-title">Carisbean</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="contact-tour-detail">
                    <div class="container pt-5">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-3 d-none d-lg-block">
                                <img src="{{asset('public/client/img/homepage/contact-people.png')}}" width="100%"
                                     alt="">
                            </div>
                            <div class="col-12 col-lg-5">
                                <div class="contact-tour-detail-form p-5">
                                    <div class="contact-tour-detail-form-title">Contact us</div>
                                    <div class="contact-tour-detail-form-description">Just pack and go! Let leave
                                        your
                                        travel
                                        plan to travel experts!
                                    </div>
                                    <form class="mt-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Your Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email">
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" rows="3"
                                                      placeholder="Your Message"></textarea>
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
</div>
@endsection

@section('js')
    <script src="{{asset('public/client/js/rating.js')}}"></script>
    <script type="text/javascript">
        $('.tour-overview .owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            dots: true,
            items: 1,
            nav: false
        });

        $('.tour-offer .owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            dots: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                768: {
                    items: 2,
                    nav: false,
                    loop: true
                },
                992: {
                    items: 4,
                    nav: false,
                    loop: true
                }
            }

        });

        $(function () {
            $('#sendComment').click(function () {
                var rating = $('input[name="rating"]');
                var valueRating = 0;
                for (var i = 0; i < 5; i++) {
                    if (rating[i].checked) {
                        valueRating = i + 1;
                        break;
                    }
                }
                var content = $('textarea[name="content"]').val();
                // var email = $('input[name="email"]').val();
                var email = "sang@sang.com";
                var full_name = $('input[name="full_name"]').val();
                // var full_name = "Sáng";
                var id_account = $('input[name="id_account"]').val();
                var id_tour = $('input[name="id_tour"]').val();

                $.get(
                    '/actioncomment',
                    {
                        id_tour:id_tour, id_account:id_account, full_name: full_name, contents:content, email:email, rating:valueRating
                    },
                    function (data) {
                        console.log('go here');
                        $('#comment').html(data);
                    })
                    $('textarea[name="content"]').val(null);

            })
        })
    </script>
@endsection

