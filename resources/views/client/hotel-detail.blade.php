@extends('index')

@section('meta')
<title>Sarina Hotel - Exploore | Hotel</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('public/client/css/hotel-detail.css')}}">
<link rel="stylesheet" href="{{asset('public/client/css/responsive/hotel-detail-responsive.css')}}">
<style type="text/css">
    .hotel-detail-banner {
        background-image: url("/public/upload/{{$hotel->hotel_img}}");
    }
    .hotel-detail-banner-overlay {
        background: rgb(0 0 0 / 44%);
        background-repeat: repeat;
        background-attachment: fixed;
        background-position: top;
        -webkit-background-size: cover;
        background-size: cover;
        height: 90vh;
    }

    /* asset('public/client/img/background/hotel-view-banner.jpg') */
</style>
@endsection

@section('content')
<div class="wrapper-content hotel-detail-banner">
<div class="hotel-detail-banner-overlay">


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
                            <a class="breadcrumb-home" href="/hotel-list">Hotel<i
                                    class="fas fa-long-arrow-alt-right align-self-end ml-3 mr-3"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-link active"><a href="/hotel-list/hotel-detail">{{$hotel->hotel_name}}</a>
                        </li>
                    </ul>
                    <div class="breadcrumb-title">{{$hotel->hotel_name}}<span
                            class="from-text-hotel d-none d-md-inline-block">From</span><span
                            class="hotel-price d-none d-md-inline-block">{{$hotel->hotel_price}}<sup>$</sup></span>
                    </div>
                </div>
            </section>



            <section class="hotel-info mt-5 mb-5">
                <div class="container">
                    <div class="sub-title-section d-flex align-items-baseline">
                        <div class="yellow-row mr-1"></div>
                        <i class="fas fa-walking"></i>
                    </div>
                    <div class="title-section mt-1">
                        <h1>Our services</h1>
                    </div>
                    <div class="row mt-5">
                        <div class="col-6 col-md-4 col-lg-2 mb-3">
                            <div class="epic-box text-center p-2">
                                <i class="fas fa-walking fa-2x"></i>
                                <div class="epic-name mt-2">Fitness center</div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2 mb-3">
                            <div class="epic-box text-center p-2">
                                <i class="fas fa-coffee fa-2x"></i>
                                <div class="epic-name mt-2">Coffee shop</div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2 mb-3">
                            <div class="epic-box text-center p-2">
                                <i class="fas fa-utensils fa-2x"></i>
                                <div class="epic-name mt-2">Restaurant</div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2 mb-3">
                            <div class="epic-box text-center p-2">
                                <i class="fas fa-child fa-2x"></i>
                                <div class="epic-name mt-2">Baby care</div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2 mb-3">
                            <div class="epic-box text-center p-2">
                                <i class="fas fa-user-friends fa-2x"></i>
                                <div class="epic-name mt-2">Service room</div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2 mb-3">
                            <div class="epic-box text-center p-2">
                                <i class="fas fa-wifi fa-2x"></i>
                                <div class="epic-name mt-2">Wifi free</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="hotel-overview mt-5 mb-5">
                <div class="container">
                    <div class="sub-title-section d-flex align-items-baseline">
                        <div class="yellow-row mr-1"></div>
                        <i class="fas fa-walking"></i>
                    </div>
                    <div class="title-section mt-1 mb-5">
                        <h1>Hotel overview</h1>
                    </div>

                    <!-- For Desktop -->
                    <div class="d-none d-md-block">
                        @foreach($room as $item1)
                        <div class="row timeline-box align-items-center position-relative pl-0 pr-0 pt-5 pb-5">
                            <div class="day-box pr-3 pl-3">{{$item1->name_room}}</div>
                            <div class="line-box col-1 p-0 d-flex align-items-center">
                                <i class="far fa-circle"></i>
                                <div class="w-100 line-row"></div>
                            </div>
                            <div class="content-overview col-5 p-4">
                                <div class="content-overview-text">
                                    <ul>
                                        <li class="mt-2">
                                            <i class="fas fa-long-arrow-alt-right mr-2"></i>
                                            <span class="font-weight-bold mr-2">Price:</span>
                                            {{$item1->price_room}} <sup>$</sup>
                                        </li>
                                        <li class="mt-2">
                                            <i class="fas fa-long-arrow-alt-right mr-2"></i>
                                            <span class="font-weight-bold mr-2">Suitable for:</span>
                                            {{$item1->suitable_room}} X <i class="fas fa-user ml-1"></i>
                                        </li>
                                        <li class="mt-2">
                                            <i class="fas fa-long-arrow-alt-right mr-2"></i>
                                            <span class="font-weight-bold mr-2">1 extra-large double bed</span>
                                        </li>
                                        <li class="mt-2">
                                            <i class="fas fa-long-arrow-alt-right mr-2"></i>
                                            <span class="font-weight-bold mr-2">Room size:</span>
                                            {{$item1->size_room}}<sup>2</sup>
                                        </li>
                                        <li class="mt-2">
                                            <i class="fas fa-long-arrow-alt-right mr-2"></i>
                                            <span class="font-weight-bold mr-2">Private bathroom:</span>
                                            Free toiletries - Sandals - Bathtub or Shower - Hygienic washbasin -
                                            Towel
                                        </li>
                                        <li class="mt-2">
                                            <i class="fas fa-long-arrow-alt-right mr-2"></i>
                                            <span class="font-weight-bold mr-2">Room facilities:</span>
                                            {{$item1->facilities_room}}
                                        </li>
                                        <li class="mt-2">
                                            <i class="fas fa-long-arrow-alt-right mr-2"></i>
                                            <span class="font-weight-bold mr-2">Free wifi</span>
                                            Yes
                                        </li>
                                        <li class="mt-2">
                                            <i class="fas fa-long-arrow-alt-right mr-2"></i>
                                            <span class="font-weight-bold mr-2">Smoking:</span>
                                            No
                                        </li>
                                        <li class="mt-2">
                                            <i class="fas fa-long-arrow-alt-right mr-2"></i>
                                            <span class="font-weight-bold mr-2">Parking:</span>
                                            Free
                                        </li>
                                        <li class="mt-2">
                                            <div class="container pt-2">
                                                <form action="/payment" method="post">
                                                    @csrf
                                                    <input type="hidden" value='{{$item1->id_room}}' name="id_room">
                                                    <input type="hidden" value='{{$item1->id_hotel}}' name="id_hotel">
                                                    <button class="btn-sub-primary mr-3">Booking</button>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-1 p-0">
                                <div class="w-100 line-row"></div>
                            </div>
                            <div class="timeline-img col-5 p-0">
                                <div class="owl-carousel owl-theme">
                                    <div class="item">
                                        <img src="{{ asset('public/client/img/hotel-view')}}/{{$item1->room_img}}" width="100%" alt="">
                                    </div>

                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- For Mobile -->
                    <div class="d-block d-md-none">
                        <div class="owl-carousel owl-theme">
                            <div class="item p-3">
                                <div class="card-timeline p-3">
                                    <div class="img-card-timeline">
                                        <img src="{{asset('public/client/img/hotel-view/img-1.png')}}" width="100%"
                                            alt="">
                                    </div>
                                    <div class="content-card-timeline">
                                        <div class="title-card-timeline d-flex align-items-center mt-3 mb-3">
                                            <div class="content-overview-icon mr-3">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <div class="content-overview-name">Luxury Room</div>
                                        </div>
                                        <div class="mani-content-card-timeline">
                                            <ul>
                                                <li class="mt-2">
                                                    <i class="fas fa-long-arrow-alt-right mr-2"></i>
                                                    <span class="font-weight-bold mr-2">Price:</span>
                                                    100 <sup>$</sup>
                                                </li>
                                                <li class="mt-2">
                                                    <i class="fas fa-long-arrow-alt-right mr-2"></i>
                                                    <span class="font-weight-bold mr-2">Suitable for:</span>
                                                    2 X <i class="fas fa-user ml-1"></i>
                                                </li>
                                                <li class="mt-2">
                                                    <i class="fas fa-long-arrow-alt-right mr-2"></i>
                                                    <span class="font-weight-bold mr-2">1 extra-large double bed</span>
                                                </li>
                                                <li class="mt-2">
                                                    <i class="fas fa-long-arrow-alt-right mr-2"></i>
                                                    <span class="font-weight-bold mr-2">Room size:</span>
                                                    20m<sup>2</sup>
                                                </li>
                                                <li class="mt-2">
                                                    <i class="fas fa-long-arrow-alt-right mr-2"></i>
                                                    <span class="font-weight-bold mr-2">Private bathroom:</span>
                                                    Free toiletries - Sandals - Bathtub or Shower - Hygienic washbasin -
                                                    Towel
                                                </li>
                                                <li class="mt-2">
                                                    <i class="fas fa-long-arrow-alt-right mr-2"></i>
                                                    <span class="font-weight-bold mr-2">Room facilities:</span>
                                                    Pay TV - Phone - Air conditioner - Wake up service -
                                                    Fridge - Desk - Seating area - Fan - Extra long beds (> 2 meters) -
                                                    Cable television - Flat screen TV - Private entrance - Sofa -
                                                    Soundproof system - Tile / marble floor - Wardrobe or closet for
                                                    clothes - Bedspread - The upper floors go up by elevator - Clothes
                                                    hanger - Clothes horse
                                                </li>
                                                <li class="mt-2">
                                                    <i class="fas fa-long-arrow-alt-right mr-2"></i>
                                                    <span class="font-weight-bold mr-2">Free wifi</span>
                                                </li>
                                                <li class="mt-2">
                                                    <i class="fas fa-long-arrow-alt-right mr-2"></i>
                                                    <span class="font-weight-bold mr-2">Smoking:</span>
                                                    No
                                                </li>
                                                <li class="mt-2">
                                                    <i class="fas fa-long-arrow-alt-right mr-2"></i>
                                                    <span class="font-weight-bold mr-2">Parking:</span>
                                                    Free
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item p-3">
                                <div class="card-timeline p-3">
                                    <div class="img-card-timeline">
                                        <img src="{{asset('public/client/img/hotel-view/img-2.png')}}" width="100%"
                                            alt="">
                                    </div>
                                    <div class="content-card-timeline">
                                        <div class="title-card-timeline d-flex align-items-center mt-3 mb-3">
                                            <div class="content-overview-icon mr-3">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <div class="content-overview-name">General Room</div>
                                        </div>
                                        <div class="mani-content-card-timeline">
                                            <ul>
                                                <li class="mt-2">
                                                    <i class="fas fa-long-arrow-alt-right mr-2"></i>
                                                    <span class="font-weight-bold mr-2">Price:</span>
                                                    100 <sup>$</sup>
                                                </li>
                                                <li class="mt-2">
                                                    <i class="fas fa-long-arrow-alt-right mr-2"></i>
                                                    <span class="font-weight-bold mr-2">Suitable for:</span>
                                                    2 X <i class="fas fa-user ml-1"></i>
                                                </li>
                                                <li class="mt-2">
                                                    <i class="fas fa-long-arrow-alt-right mr-2"></i>
                                                    <span class="font-weight-bold mr-2">1 extra-large double bed</span>
                                                </li>
                                                <li class="mt-2">
                                                    <i class="fas fa-long-arrow-alt-right mr-2"></i>
                                                    <span class="font-weight-bold mr-2">Room size:</span>
                                                    20m<sup>2</sup>
                                                </li>
                                                <li class="mt-2">
                                                    <i class="fas fa-long-arrow-alt-right mr-2"></i>
                                                    <span class="font-weight-bold mr-2">Private bathroom:</span>
                                                    Free toiletries - Sandals - Bathtub or Shower - Hygienic washbasin -
                                                    Towel
                                                </li>
                                                <li class="mt-2">
                                                    <i class="fas fa-long-arrow-alt-right mr-2"></i>
                                                    <span class="font-weight-bold mr-2">Room facilities:</span>
                                                    Pay TV - Phone - Air conditioner - Wake up service -
                                                    Fridge - Desk - Seating area - Fan - Extra long beds (> 2 meters) -
                                                    Cable television - Flat screen TV - Private entrance - Sofa -
                                                    Soundproof system - Tile / marble floor
                                                </li>
                                                <li class="mt-2">
                                                    <i class="fas fa-long-arrow-alt-right mr-2"></i>
                                                    <span class="font-weight-bold mr-2">Free wifi</span>
                                                </li>
                                                <li class="mt-2">
                                                    <i class="fas fa-long-arrow-alt-right mr-2"></i>
                                                    <span class="font-weight-bold mr-2">Smoking:</span>
                                                    No
                                                </li>
                                                <li class="mt-2">
                                                    <i class="fas fa-long-arrow-alt-right mr-2"></i>
                                                    <span class="font-weight-bold mr-2">Parking:</span>
                                                    Free
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item p-3">
                                <div class="card-timeline p-3">
                                    <div class="img-card-timeline">
                                        <img src="{{asset('public/client/img/hotel-view/img-1.png')}}" width="100%"
                                            alt="">
                                    </div>
                                    <div class="content-card-timeline">
                                        <div class="title-card-timeline d-flex align-items-center mt-3 mb-3">
                                            <div class="content-overview-icon mr-3">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <div class="content-overview-name">Family Room</div>
                                        </div>
                                        <div class="mani-content-card-timeline">
                                            <ul>
                                                <li class="mt-2">
                                                    <i class="fas fa-long-arrow-alt-right mr-2"></i>
                                                    <span class="font-weight-bold mr-2">Price:</span>
                                                    100 <sup>$</sup>
                                                </li>
                                                <li class="mt-2">
                                                    <i class="fas fa-long-arrow-alt-right mr-2"></i>
                                                    <span class="font-weight-bold mr-2">Suitable for:</span>
                                                    2 X <i class="fas fa-user ml-1"></i>
                                                </li>
                                                <li class="mt-2">
                                                    <i class="fas fa-long-arrow-alt-right mr-2"></i>
                                                    <span class="font-weight-bold mr-2">1 extra-large double bed</span>
                                                </li>
                                                <li class="mt-2">
                                                    <i class="fas fa-long-arrow-alt-right mr-2"></i>
                                                    <span class="font-weight-bold mr-2">Room size:</span>
                                                    20m<sup>2</sup>
                                                </li>
                                                <li class="mt-2">
                                                    <i class="fas fa-long-arrow-alt-right mr-2"></i>
                                                    <span class="font-weight-bold mr-2">Private bathroom:</span>
                                                    Free toiletries - Sandals - Bathtub or Shower - Hygienic washbasin -
                                                    Towel
                                                </li>
                                                <li class="mt-2">
                                                    <i class="fas fa-long-arrow-alt-right mr-2"></i>
                                                    <span class="font-weight-bold mr-2">Room facilities:</span>
                                                    Pay TV - Phone - Air conditioner - Wake up service -
                                                    Fridge - Desk - Seating area - Fan - Extra long beds (> 2 meters) -
                                                    Cable television
                                                </li>
                                                <li class="mt-2">
                                                    <i class="fas fa-long-arrow-alt-right mr-2"></i>
                                                    <span class="font-weight-bold mr-2">Free wifi</span>
                                                </li>
                                                <li class="mt-2">
                                                    <i class="fas fa-long-arrow-alt-right mr-2"></i>
                                                    <span class="font-weight-bold mr-2">Smoking:</span>
                                                    No
                                                </li>
                                                <li class="mt-2">
                                                    <i class="fas fa-long-arrow-alt-right mr-2"></i>
                                                    <span class="font-weight-bold mr-2">Parking:</span>
                                                    Free
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="mt-5 mb-5">
                <div class="container">
                    <button class="btn-sub-secondary">Back to explore more</button>
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
                                {{--                                <form class="comment-form" action="/actionComment" method="post">--}}
                                {{--                                @csrf--}}
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
                                        <input class="rating-input three-input" name="rating" type="radio" value="3">
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
                                <input type="hidden" name="id_hotel" value="{{$hotel->id_hotel}}">
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
                                        placeholder="Your Comment ..." rows="5"></textarea>
                                    <button id="sendComment" class="btn-sub-main">Send message</button>
                                    {{--                                    </form>--}}
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>

            <section class="hotel-offer pt-4 pb-5">
                <div class="container">
                    <div class="sub-title-section d-flex align-items-baseline">
                        <div class="yellow-row mr-1"></div>
                        <i class="fas fa-walking"></i>
                    </div>
                    <div class="title-section mt-1">
                        <h1>Special offer</h1>
                    </div>
                    <div class="owl-carousel owl-theme mt-5">
                        <div class="item p-3">
                            <a href="">
                                <div class="card-offer position-relative">
                                    <img src="{{asset('public/client/img/footer/offer-1.jpg')}}" width="100%" alt="">
                                    <div class="card-offer-title">Alpha</div>
                                </div>
                            </a>
                        </div>
                        <div class="item p-3">
                            <a href="">
                                <div class="card-offer position-relative">
                                    <img src="{{asset('public/client/img/footer/offer-2.jpg')}}" width="100%" alt="">
                                    <div class="card-offer-title">Otipus</div>
                                </div>
                            </a>
                        </div>
                        <div class="item p-3">
                            <a href="">
                                <div class="card-offer position-relative">
                                    <img src="{{asset('public/client/img/footer/offer-3.jpg')}}" width="100%" alt="">
                                    <div class="card-offer-title">Sunrise</div>
                                </div>
                            </a>
                        </div>
                        <div class="item p-3">
                            <a href="">
                                <div class="card-offer position-relative">
                                    <img src="{{asset('public/client/img/footer/offer-4.jpg')}}" width="100%" alt="">
                                    <div class="card-offer-title">Carisbean</div>
                                </div>
                            </a>
                        </div>
                        <div class="item p-3">
                            <a href="">
                                <div class="card-offer position-relative">
                                    <img src="{{asset('public/client/img/footer/offer-1.jpg')}}" width="100%" alt="">
                                    <div class="card-offer-title">Alpha</div>
                                </div>
                            </a>
                        </div>
                        <div class="item p-3">
                            <a href="">
                                <div class="card-offer position-relative">
                                    <img src="{{asset('public/client/img/footer/offer-2.jpg')}}" width="100%" alt="">
                                    <div class="card-offer-title">Otipus</div>
                                </div>
                            </a>
                        </div>
                        <div class="item p-3">
                            <a href="">
                                <div class="card-offer position-relative">
                                    <img src="{{asset('public/client/img/footer/offer-3.jpg')}}" width="100%" alt="">
                                    <div class="card-offer-title">Sunrise</div>
                                </div>
                            </a>
                        </div>
                        <div class="item p-3">
                            <a href="">
                                <div class="card-offer position-relative">
                                    <img src="{{asset('public/client/img/footer/offer-4.jpg')}}" width="100%" alt="">
                                    <div class="card-offer-title">Carisbean</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="contact-hotel-detail">
                <div class="container pt-5">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-3 d-none d-lg-block">
                            <img src="{{asset('public/client/img/homepage/contact-people.png')}}" width="100%" alt="">
                        </div>
                        <div class="col-12 col-lg-5">
                            <div class="contact-hotel-detail-form p-5">
                                <div class="contact-hotel-detail-form-title">Contact us</div>
                                <div class="contact-hotel-detail-form-description">Just pack and go! Let leave
                                    your
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
</div>
@endsection

@section('js')
<script src="{{asset('public/client/js/rating.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.hotel-overview .owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            dots: true,
            items: 1,
            nav: false,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true
        });

        $('.hotel-offer .owl-carousel').owlCarousel({
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
            var email = $('input[name="email"]').val();
            var full_name = $('input[name="full_name"]').val();
            var id_account = $('input[name="id_account"]').val();
            var id_hotel = $('input[name="id_hotel"]').val();
            $.get('/actionComment', { id_hotel: id_hotel, id_account: id_account, full_name: full_name, contents: content, email: email, rating: valueRating }, function (data) {
                $('#comment').html(data);
            })

            $('textarea[name="content"]').val(null);


        })
    })

</script>

@endsection