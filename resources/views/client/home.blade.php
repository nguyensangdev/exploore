@extends('index')

@section('meta')
<title>Exploore</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('public/client/css/home.css')}}">
<link rel="stylesheet" href="{{asset('public/client/css/responsive/home-responsive.css')}}">
@endsection

@section('content')
<div class="wrapper-content">

    <!-- HEADER -->
    <header class="d-none d-lg-block"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <div class="block-header">

            <!-- TOP BAR HEADER -->
            @include('client.component.top-bar-header')

            <!-- MAIN HEADER -->
            @include('client.component.home-main-header')

        </div>
    </header>

    <!-- WRAPPER-BODY -->
    <div class="wrapper-body">

        <!-- MAIN CONTENT -->
        <div class="main-content">
            <section class="page-banner">
                <div class="container justify-content-center">
                    <div class="banner-title">
                        <h1 class="title" data-text='Discover'>Discover</h1>
                    </div>
                    <p class="text-title text-center">The world you have never seen</p>
                    <a href="/tour-list">
                        <div class="banner-btn">
                            Go explore now
                            <button><i class="fas fa-long-arrow-alt-right"></i></button>
                        </div>
                    </a>
                </div>
            </section>

            <section class="tab-search">
                <div class="container-fluid p-0">
                    <ul class="nav nav-tabs d-flex container p-0" id="myTab" role="tablist">
                        <li class="nav-item flex-fill">
                            <a class="nav-link active" id="tours-tab" data-toggle="tab" href="#tours" role="tab"
                                aria-controls="tours" aria-selected="true"><i class="fas fa-walking"></i>
                                Tours</a>
                        </li>
                        <li class="nav-item flex-fill">
                            <a class="nav-link" id="hotel-tab" data-toggle="tab" href="#hotel" role="tab"
                                aria-controls="hotel" aria-selected="false"><i class="fas fa-building"></i>
                                Hotel</a>
                        </li>
                        <!-- <li class="nav-item flex-fill">
                            <a class="nav-link" id="flight-tab" data-toggle="tab" href="#flight" role="tab"
                                aria-controls="flight" aria-selected="false"><i class="fas fa-plane"></i>
                                Flight</a>
                        </li>
                        <li class="nav-item flex-fill">
                            <a class="nav-link" id="transfer-tab" data-toggle="tab" href="#transfer" role="tab"
                                aria-controls="transfer" aria-selected="false"><i class="fas fa-truck"></i>
                                Transfer</a>
                        </li>
                        <li class="nav-item flex-fill">
                            <a class="nav-link" id="car-rent-tab" data-toggle="tab" href="#car-rent" role="tab"
                                aria-controls="car-rent" aria-selected="false"><i class="fas fa-car"></i> Car
                                Rent</a>
                        </li>
                        <li class="nav-item flex-fill">
                            <a class="nav-link" id="cruises-tab" data-toggle="tab" href="#cruises" role="tab"
                                aria-controls="cruises" aria-selected="false"><i class="fas fa-ship"></i>
                                Cruises</a>
                        </li> -->
                    </ul>
                    <div class="tab-content container-fluid p-0" id="myTabContent">
                        <div class="tab-pane fade" id="flight" role="tabpanel" aria-labelledby="flight-tab">
                            <div class="jumbotron rounded-0 pt-5 pb-5">
                                <div class="container">
                                    <div class="title-tab font-weight-bold">
                                        Find your flight
                                    </div>
                                    <div class="content-tab">
                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="inputFlightDestination">Where do you want to
                                                        go?</label>
                                                    <input type="text" class="form-control" id="inputFlightDestination"
                                                        placeholder="Write the place">
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label for="inputFlightCheckInDate">Check in</label>
                                                    <input type="text" class="form-control" id="inputFlightCheckInDate"
                                                        placeholder="mm/dd/yyyy">
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label for="inputFlightCheckOutDate">Check out</label>
                                                    <input type="text" class="form-control" id="inputFlightCheckOutDate"
                                                        placeholder="mm/dd/yyyy">
                                                </div>
                                                <div class="form-group col-md-1">
                                                    <label for="inputAdult">Adult</label>
                                                    <input type="number" min="0" max="10" class="form-control"
                                                        id="inputAdult" value="1">
                                                </div>
                                                <div class="form-group col-md-1">
                                                    <label for="inputChild">Child</label>
                                                    <input type="number" min="0" max="10" class="form-control"
                                                        id="inputChild" value="0">
                                                </div>
                                                <div class="col-md-2 d-flex align-items-center pt-3">
                                                    <button type="submit"
                                                        class="btn bg-sub-secondary text-sub-primary w-100">Search
                                                        now</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="transfer" role="tabpanel" aria-labelledby="transfer-tab">
                            <div class="jumbotron rounded-0 pt-5 pb-5">
                                <div class="container">
                                    <div class="title-tab font-weight-bold">
                                        Find transfer
                                    </div>
                                    <div class="content-tab">
                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="inputTransferDestination">Where do you want to
                                                        go?</label>
                                                    <input type="text" class="form-control"
                                                        id="inputTransferDestination" placeholder="Write the place">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputTransferDate">When do you want to
                                                        go?</label>
                                                    <input type="text" class="form-control" id="inputTransferDate"
                                                        placeholder="mm/dd/yyyy">
                                                </div>
                                                <div class="form-group col-md-1">
                                                    <label for="inputAdult">Adult</label>
                                                    <input type="number" min="0" max="10" class="form-control"
                                                        id="inputAdult" value="1">
                                                </div>
                                                <div class="form-group col-md-1">
                                                    <label for="inputChild">Child</label>
                                                    <input type="number" min="0" max="10" class="form-control"
                                                        id="inputChild" value="0">
                                                </div>
                                                <div class="col-md-2 d-flex align-items-center pt-3">
                                                    <button type="submit"
                                                        class="btn bg-sub-secondary text-sub-primary w-100">Search
                                                        now</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
                            <div class="jumbotron rounded-0 pt-5 pb-5">
                                <div class="container">
                                    <div class="title-tab font-weight-bold">
                                        Find hotel
                                    </div>
                                    <div class="content-tab">
                                        <form action="/listHotelFilter" method="post">
                                            @csrf()
                                            <input type="hidden" name="action" value="search">
                                            <input type="hidden" name="route" value="home">
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="inputHotelDestination">Where do you want to
                                                        go?</label>
                                                    <input type="text" class="form-control" name="inputDestination" id="inputHotelDestination"
                                                        placeholder="Write the place">
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label for="inputHotelCheckInDate">Check in</label>
                                                    <input type="date" name="inputHotelCheckInDate" class="form-control"
                                                        placeholder="mm/dd/yyyy">
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label for="inputHotelCheckOutDate">Check out</label>
                                                    <input type="date" name="inputHotelCheckOutDate" class="form-control"
                                                        placeholder="mm/dd/yyyy">
                                                </div>
                                                <div class="form-group col-md-1">
                                                    <label for="inputAdult">Adult</label>
                                                    <input type="number" min="0" max="10" class="form-control"
                                                        id="inputAdult" name="inputAdult" value="1">
                                                </div>
                                                <!-- <div class="form-group col-md-1">
                                                    <label for="inputChild">Child</label>
                                                    <input type="number" min="0" max="10" class="form-control"
                                                        id="inputChild" value="0">
                                                </div> -->
                                                <div class="col-md-2 d-flex align-items-center pt-3">
                                                    <button type="submit"
                                                        class="btn bg-sub-secondary text-sub-primary w-100">Search
                                                        now</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show active" id="tours" role="tabpanel" aria-labelledby="tours-tab">
                            <div class="jumbotron rounded-0 pt-5 pb-5">
                                <div class="container">
                                    <div class="title-tab font-weight-bold">
                                        Find tours
                                    </div>
                                    <div class="content-tab">
                                        <form action="/listTourFilter" method="post">
                                            @csrf()
                                            <input type="hidden" name="action" value="search">
                                            <input type="hidden" name="route" value="home">
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="inputToursDestination">Where do you want to
                                                        go?</label>
                                                    <input type="text" required class="form-control"
                                                        name="inputDestination" id="inputToursDestination"
                                                        placeholder="Write the place">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputToursDate">Time start?</label>
                                                    <input type="date" required name="inputTourCheckInDate"
                                                        class="form-control" placeholder="mm/dd/yyyy">
                                                </div>
                                                <div class="form-group col-md-1">
                                                    <label for="inputAdult">Adult</label>
                                                    <input type="number" required name="inputAdult" min="0" max="10"
                                                        class="form-control" id="inputAdult" value="1">
                                                </div>
                                                <!-- <div class="form-group col-md-1">
                                                    <label for="inputChild">Child</label>
                                                    <input type="number" min="0" max="10" class="form-control"
                                                        id="inputChild" value="0">
                                                </div> -->
                                                <div class="col-md-2 d-flex align-items-center pt-3">
                                                    <button type="submit"
                                                        class="btn bg-sub-secondary text-sub-primary w-100">Search
                                                        now</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="car-rent" role="tabpanel" aria-labelledby="car-rent-tab">
                            <div class="jumbotron rounded-0 pt-5 pb-5">
                                <div class="container">
                                    <div class="title-tab font-weight-bold">
                                        Find car
                                    </div>
                                    <div class="content-tab">
                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="inputHotelDestination">Where do you want to
                                                        go?</label>
                                                    <input type="text" class="form-control" id="inputHotelDestination"
                                                        placeholder="Write the place">
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label for="inputCarRentStartDate">Start date</label>
                                                    <input type="text" class="form-control" id="inputCarRentStartDate"
                                                        placeholder="mm/dd/yyyy">
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label for="inputCarRentReturnDate">Return date</label>
                                                    <input type="text" class="form-control" id="inputCarRentReturnDate"
                                                        placeholder="mm/dd/yyyy">
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label for="inputAdult">No. of car</label>
                                                    <input type="number" min="0" max="10" class="form-control"
                                                        id="inputNumberOfCar" value="1">
                                                </div>
                                                <div class="col-md-2 d-flex align-items-center pt-3">
                                                    <button type="submit"
                                                        class="btn bg-sub-secondary text-sub-primary w-100">Search
                                                        now</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="cruises" role="tabpanel" aria-labelledby="cruises-tab">
                            <div class="jumbotron rounded-0 pt-5 pb-5">
                                <div class="container">
                                    <div class="title-tab font-weight-bold">
                                        Find cruises
                                    </div>
                                    <div class="content-tab">
                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="inputCruisesDestination">Where do you want to
                                                        go?</label>
                                                    <input type="text" class="form-control" id="inputCruisesDestination"
                                                        placeholder="Write the place">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputCruisesTime">Time</label>
                                                    <select class="form-control" id="inputCruisesTime">
                                                        <option>08:00</option>
                                                        <option>10:00</option>
                                                        <option>12:00</option>
                                                        <option>14:00</option>
                                                        <option>16:00</option>
                                                        <option>18:00</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-1">
                                                    <label for="inputAdult">Adult</label>
                                                    <input type="number" min="0" max="10" class="form-control"
                                                        id="inputAdult" value="1">
                                                </div>
                                                <div class="form-group col-md-1">
                                                    <label for="inputChild">Child</label>
                                                    <input type="number" min="0" max="10" class="form-control"
                                                        id="inputChild" value="0">
                                                </div>
                                                <div class="col-md-2 d-flex align-items-center pt-3">
                                                    <button type="submit"
                                                        class="btn bg-sub-secondary text-sub-primary w-100">Search
                                                        now</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="about-us">
                <div class="container pt-5 pb-5">
                    <div class="row">
                        <div class="col-12 col-lg-7">
                            <div class="sub-title-section d-flex align-items-baseline">
                                <h3 class="mr-2">Be born again</h3>
                                <div class="yellow-row mr-1"></div>
                                <i class="fas fa-walking"></i>
                            </div>
                            <div class="title-section mt-1">
                                <h1>WE ARE EXPLOORE</h1>
                            </div>
                            <div class="content-section">
                                <p class="mt-3">Consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                    ut labore et
                                    dolore magna aliqua. Ut eim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex commodo consequat uisas aute irure dolor
                                    ullamco laboris nisi in reprehenderit.</p>
                                <ul class="mt-3 row">
                                    <div class="col-12 col-md-4">
                                        <li class="mt-1"><i class="fas fa-long-arrow-alt-right mr-2"></i>First
                                            Class Flights</li>
                                        <li class="mt-1"><i class="fas fa-long-arrow-alt-right mr-2"></i>5 Star
                                            Accommodations</li>
                                        <li class="mt-1"><i class="fas fa-long-arrow-alt-right mr-2"></i>Inclusive
                                            Packages
                                        </li>
                                        <li class="mt-1"><i class="fas fa-long-arrow-alt-right mr-2"></i>Latest
                                            Model Vehicles</li>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <li class="mt-1"><i class="fas fa-long-arrow-alt-right mr-2"></i>First
                                            Class Flights</li>
                                        <li class="mt-1"><i class="fas fa-long-arrow-alt-right mr-2"></i>5 Star
                                            Accommodations</li>
                                        <li class="mt-1"><i class="fas fa-long-arrow-alt-right mr-2"></i>Inclusive
                                            Packages
                                        </li>
                                        <li class="mt-1"><i class="fas fa-long-arrow-alt-right mr-2"></i>Latest
                                            Model Vehicles</li>
                                    </div>
                                </ul>
                                <div class="mt-5">
                                    <button class="btn-sub-primary mr-3">Purchase now</button>
                                    <button class="btn-sub-main">Read now</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5 d-none d-lg-block">
                            <img src="{{asset('public/client/img/background/about-us-1.jpg')}}" width="100%" alt="">
                        </div>
                    </div>
                </div>
            </section>

            <section class="tours">
                <div class="container pt-5 pb-5">
                    <div class="sub-title-section d-flex align-items-baseline">
                        <h3 class="mr-2">Pack and go</h3>
                        <div class="yellow-row mr-1"></div>
                        <i class="fas fa-walking"></i>
                    </div>
                    <div class="title-section mt-1">
                        <h1>Awesome tours</h1>
                    </div>

                    <!-- For desktop -->
                    <div class="row mt-5 d-none d-lg-flex">
                        @if($tour)
                        @foreach($tour as $tour1)
                        <div class="col-12 col-md-4">
                            <div class="card-box pb-3 mt-3">
                                <div class="card-img position-relative">
                                    <img src="{{asset('/public/upload')}}/{{$tour1->tour_img}}" width="100%" alt="">

                                    <span>{{$tour1->sale}}%</span>
                                    <a href="/tour-list/tour-detail/{{$tour1->id_tour}}">
                                        <h5>{{$tour1->tour_name}}</h5>
                                    </a>
                                </div>
                                <!-- <div class="card-interactive d-flex">
                                    <div class="flex-fill text-center pt-3 pb-3">
                                        <i class="fas fa-eye mr-2"></i> 123</div>
                                    <div class="flex-fill text-center pt-3 pb-3">
                                        <i class="fas fa-heart mr-2"></i> 456</div>
                                    <div class="flex-fill text-center pt-3 pb-3">
                                        <i class="fas fa-comment mr-2"></i> 789</div>
                                </div> -->
                                <div class="card-content text-center">
                                    <div class="main-info mt-3">
                                        <span class="mr-2"><sup>$</sup> {{$tour1->tour_price}}</span>
                                        {{$tour1->duration_tour}} days {{($tour1->duration_tour +1)}} nights
                                    </div>
                                    <div class="mr-5 ml-5 mt-3 text-left">{!! (strlen($tour1->tour_description) > 100 ? substr($tour1->tour_description,0, 100) : $tour1->tour_description) !!}</div>
                                    <div class="card-group-btn">
                                                 <form action="/payment" method="post">
                                    @csrf
                                      <input type="hidden" value='{{$tour1->id_tour}}' name="id_tour">
                                  {{-- <button  type="submit" class="btn-sub-secondary">Book now</button> --}}
                                    
                                        <a href="/tour-list/tour-detail/{{$tour1->id_tour}}">
                                       <button type="button" class="btn-sub-secondary">Tour Detail</button>
                                    </a>
                                     </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach
                        @endif

                    </div>

                    <!-- For mobile-->
                    <div class="row mt-3 d-flex d-lg-none">
                        <div class="col-12">
                            <div class="owl-carousel owl-theme">
                                 @if($tour)
                        @foreach($tour as $tour2)
                                <div class="item">
                                    <div class="card-box pb-3 mt-3">
                                        <div class="card-img position-relative">
                                           <img src="{{asset('/public/upload')}}/{{$tour2->tour_img}}" width="100%" alt="">

                                               <a href="/tour-list/tour-detail/{{$tour2->id_tour}}">
                                        <h5>{{$tour2->tour_name}}</h5>
                                    </a>
                                        </div>
                                        <!--<div class="card-interactive d-flex">-->
                                        <!--    <div class="flex-fill text-center pt-3 pb-3">-->
                                        <!--        <i class="fas fa-eye mr-2"></i> 123</div>-->
                                        <!--    <div class="flex-fill text-center pt-3 pb-3">-->
                                        <!--        <i class="fas fa-heart mr-2"></i> 456</div>-->
                                        <!--    <div class="flex-fill text-center pt-3 pb-3">-->
                                        <!--        <i class="fas fa-comment mr-2"></i> 789</div>-->
                                        <!--</div>-->
                                        <div class="card-content text-center">
                                            <div class="main-info mt-3">
                                        <span class="mr-2"><sup>$</sup> {{$tour2->tour_price}}</span>
                                        {{$tour2->duration_tour}} days {{($tour2->duration_tour +1)}} nights
                                    </div>
                                     <div class="mr-5 ml-5 mt-3">{!! (strlen($tour2->tour_description) > 100 ? substr($tour2->tour_description,0, 100) : $tour2->tour_description) !!}</div>

                                                <div class="card-group-btn">
                                                 <form action="/payment" method="post">
                                    @csrf
                                      <input type="hidden" value='{{$tour2->id_tour}}' name="id_tour">
                                  {{-- <button  type="submit" class="btn-sub-secondary">Book now</button> --}}
                                    
                                        <a href="/tour-list/tour-detail/{{$tour2->id_tour}}">
                                       <button type="button" class="btn-sub-secondary">Tour Detail</button>
                                    </a>
                                     </form>
                                    </div>
                                        </div>
                                    </div>
                                </div>
                                  @endforeach
                                   @endif

                               
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center m-3 m-lg-5">
                        <form action="/tour-list" method="get">
                            <button class="btn-sub-main">More tours</button>
                        </form>
                    </div>
                </div>
            </section>

            <section class="video">
                <div class="container pt-5 pb-5">
                    <div class="row">
                        <div class="col-12 col-md-5 pt-5">
                            <div class="sub-title-section d-flex align-items-baseline">
                                <h3 class="mr-2">It's a big world out there</h3>
                                <div class="yellow-row mr-1"></div>
                                <i class="fas fa-walking"></i>
                            </div>
                            <div class="title-section mt-1">
                                <h1>Go explore</h1>
                            </div>
                            <div class="content-section">
                                <p class="mt-3">There are many variations of passages of. Lorem Ipsum available,
                                    but the majority have suffered alteration in some form, by injected humour,
                                    or randomised words which don't look.</p>
                                <div class="mt-5">
                                    <button class="btn-sub-primary">Read more</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-7 video-box">
                            <iframe class="border-0"
                                src="{{asset('public/client/img/homepage/How to travel with NO MONEY $$.mp4')}}"></iframe>
                        </div>
                    </div>
                </div>
            </section>

            <section class="hotel">
                <div class="container pt-5 pb-5">
                    <div class="sub-title-section d-flex align-items-baseline">
                        <h3 class="mr-2">Guaranteed quality</h3>
                        <div class="yellow-row mr-1"></div>
                        <i class="fas fa-walking"></i>
                    </div>
                    <div class="title-section mt-1">
                        <h1>Recommended hotels</h1>
                    </div>

                    <!-- For desktop -->
                    <div class="row mt-5 d-none d-lg-flex">
                        @if($hotel)
                        @foreach($hotel as $hotel1)
                        <div class="col-12 col-md-6 mb-5">
                            <div class="row card-box m-1">
                                <div class="col-12 col-lg-6 p-0">
                                    <div class="card-img position-relative">
                                            <img src="{{asset('/public/upload')}}/{{$hotel1->hotel_img}}" width="100%" alt="">
                                        <span>{{$hotel1->sale}}%</span>
                                        <a href="/hotel-list/hotel-detail/{{$hotel1->id_hotel}}">
                                            <h5>{{$hotel1->hotel_name}}</h5>
                                        </a>
                                        <ul class="d-flex">
                                            <li class="mr-1"><i class="fas fa-star"></i></li>
                                            <li class="mr-1"><i class="fas fa-star"></i></li>
                                            <li class="mr-1"><i class="fas fa-star"></i></li>
                                            <li class="mr-1"><i class="fas fa-star"></i></li>
                                            <li class="mr-1"><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-5 d-flex flex-column">
                                    <div
                                        class="card-main-info d-flex align-items-center justify-content-center mt-5 mt-lg-0">
                                        <div class="price mr-2">
                                            <sup class="mr-1"><sup>$</sup></sup>{{$hotel1->hotel_price}}
                                        </div>
                                        <div class="per ml-2">
                                            For one day
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center p-1">
                                        <div class="card-description">
            {!! (strlen($hotel1->hotel_describes) > 100 ? substr($hotel1->hotel_describes,0, 100) : $hotel1->hotel_describes) !!}
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center mt-2 mb-5 mb-lg-0">
                                        <a href="/hotel-list/hotel-detail/{{$hotel1->id_hotel}}">
                                  <button class="btn-sub-secondary">Hotel Detail</button>
                                        </a>
                                    </div>
                                </div>
                                <!-- <div class="col-2 col-lg-1 p-0 border-icon-seperate">
                                    <ul class="d-flex flex-column h-100">
                                        <a class="w-100 h-25 d-flex justify-content-center align-items-center" href="">
                                            <li>
                                                <i class="fas fa-eye"></i>
                                            </li>
                                        </a>
                                        <a class="w-100 h-25 d-flex justify-content-center align-items-center" href="">
                                            <li>
                                                <i class="fas fa-comment"></i>
                                            </li>
                                        </a>
                                        <a class="w-100 h-25 d-flex justify-content-center align-items-center" href="">
                                            <li>
                                                <i class="fas fa-share-alt"></i>
                                            </li>
                                        </a>
                                        <a class="w-100 h-25 d-flex justify-content-center align-items-center" href="">
                                            <li>
                                                <i class="fas fa-map-marker-alt"></i>
                                            </li>
                                        </a>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                        @endforeach
                        @endif

                    </div>

                    <!-- For mobile-->
                    <div class="row mt-3 d-flex d-lg-none">
                        <div class="col-12">
                            <div class="owl-carousel owl-theme">
                                 @if($hotel)
                        @foreach($hotel as $hotel2)
                                <div class="item">
                                    <div class="row card-box m-1">
                                        <div class="col-12 col-lg-6 p-0">
                                            <div class="card-img position-relative">
                                                      <img src="{{asset('/public/upload')}}/{{$hotel1->hotel_img}}" height="auto" width="100%" alt="">
                                              <span>{{$hotel2->sale}}%</span>
                                                <a href="/hotel-list/hotel-detail/{{$hotel1->id_hotel}}">
                                            <h5>{{$hotel2->hotel_name}}</h5>
                                                 </a>
                                                <ul class="d-flex">
                                                    <li class="mr-1"><i class="fas fa-star"></i></li>
                                                    <li class="mr-1"><i class="fas fa-star"></i></li>
                                                    <li class="mr-1"><i class="fas fa-star"></i></li>
                                                    <li class="mr-1"><i class="fas fa-star"></i></li>
                                                    <li class="mr-1"><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-10 col-lg-5 d-flex flex-column">
                                            <div
                                                class="card-main-info d-flex align-items-center justify-content-center mt-5 mt-lg-0">
                                                <div class="price mr-2">
                                            <sup class="mr-1"><sup>$</sup></sup>{{$hotel2->hotel_price}}
                                                </div>
                                                <div class="per ml-2">
                                                    For person <br> per night
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-center p-1">
                                                <div class="card-description">
                                         {!! (strlen($hotel2->hotel_describes) > 100 ? substr($hotel2->hotel_describes,0, 100) : $hotel2->hotel_describes) !!}
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-center mt-2 mb-5 mb-lg-0">
                                                    <a href="/hotel-list/hotel-detail/{{$hotel1->id_hotel}}">
                                  <button class="btn-sub-secondary">Hotel Detail</button>
                                        </a>
                                            </div>
                                        </div>
                                        <div class="col-2 col-lg-1 p-0 border-icon-seperate">
                                            <ul class="d-flex flex-column h-100">
                                                <a class="w-100 h-25 d-flex justify-content-center align-items-center"
                                                    href="">
                                                    <li>
                                                        <i class="fas fa-eye"></i>
                                                    </li>
                                                </a>
                                                <a class="w-100 h-25 d-flex justify-content-center align-items-center"
                                                    href="">
                                                    <li>
                                                        <i class="fas fa-comment"></i>
                                                    </li>
                                                </a>
                                                <a class="w-100 h-25 d-flex justify-content-center align-items-center"
                                                    href="">
                                                    <li>
                                                        <i class="fas fa-share-alt"></i>
                                                    </li>
                                                </a>
                                                <a class="w-100 h-25 d-flex justify-content-center align-items-center"
                                                    href="">
                                                    <li>
                                                        <i class="fas fa-map-marker-alt"></i>
                                                    </li>
                                                </a>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                  @endforeach
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <form action="/hotel-list" method="get">
                            <button class="btn-sub-main">More hotels</button>
                        </form>
                    </div>
                </div>
            </section>

            <section class="traveler">
                <div class="container pt-5 pb-5">
                    <div class="sub-title-section d-flex align-items-baseline">
                        <h3 class="mr-2">Relax and enjoy</h3>
                        <div class="yellow-row mr-1"></div>
                        <i class="fas fa-walking"></i>
                    </div>
                    <div class="title-section mt-1">
                        <h1>Happy traveler</h1>
                    </div>
                    <div class="owl-carousel owl-theme mt-5">
                        <div class="item d-flex flex-column justify-content-center align-items-center">
                            <div class="avatar-box">
                                <img class="rounded-circle" src="{{asset('public/client/img/homepage/avatar-1.jpg')}}"
                                    alt="" style="width: 70px;">
                            </div>
                            <div class="name-box mt-3">Sandara Park</div>
                            <div class="city-box">Roma, Itali</div>
                            <div class="content-comment mt-3 pr-5 pl-5 text-center">" There are many variations
                                of passages
                                of
                                Lorem Ipsum available, but the majority have suffered alteration in some form."
                            </div>
                        </div>
                        <div class="item d-flex flex-column justify-content-center align-items-center">
                            <div class="avatar-box">
                                <img class="rounded-circle" src="{{asset('public/client/img/homepage/avatar-2.jpg')}}"
                                    alt="" style="width: 70px;">
                            </div>
                            <div class="name-box mt-3">Kown Jiyong</div>
                            <div class="city-box">London, England</div>
                            <div class="content-comment mt-3 pr-5 pl-5 text-center">" There are many variations
                                of passages
                                of
                                Lorem Ipsum available, but the majority have suffered alteration in some form."
                            </div>
                        </div>
                        <div class="item d-flex flex-column justify-content-center align-items-center">
                            <div class="avatar-box">
                                <img class="rounded-circle" src="{{asset('public/client/img/homepage/avatar-3.jpg')}}"
                                    alt="" style="width: 70px;">
                            </div>
                            <div class="name-box mt-3">Taylor Rose</div>
                            <div class="city-box">Paris, France</div>
                            <div class="content-comment mt-3 pr-5 pl-5 text-center">" There are many variations
                                of passages
                                of
                                Lorem Ipsum available, but the majority have suffered alteration in some form."
                            </div>
                        </div>
                        <div class="item d-flex flex-column justify-content-center align-items-center">
                            <div class="avatar-box">
                                <img class="rounded-circle" src="{{asset('public/client/img/homepage/avatar-4.jpg')}}"
                                    alt="" style="width: 70px;">
                            </div>
                            <div class="name-box mt-3">John Smith</div>
                            <div class="city-box">New york, USA</div>
                            <div class="content-comment mt-3 text-center pr-5 pl-5">" There are many variations
                                of
                                passages of Lorem Ipsum available, but the majority have suffered alteration in
                                some form."</div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="news">
                <div class="container pt-5 pb-5">
                    <div class="sub-title-section d-flex align-items-baseline">
                        <h3 class="mr-2">Explorational stories</h3>
                        <div class="yellow-row mr-1"></div>
                        <i class="fas fa-walking"></i>
                    </div>
                    <div class="title-section mt-1">
                        <h1>News and updates</h1>
                    </div>
                    <div class="owl-carousel owl-theme mt-5">
                        @if(isset($news))
                        @foreach($news as $news)
                        <div class="item">
                            <div class="row">
                                <div class="col-12 col-lg-7 position-relative news-banner">
                                    <img src="{{asset('public/upload')}}/{{$news->news_img}}" height="100%" alt="" style="object-fit: cover;">
                                    <div class="quote">{{$news->news_title}}</div>
                                </div>
                                <div class="col-12 col-lg-5 info-news mt-5 mt-lg-0">
                                    <a href="" class="title">{{$news->news_title}}</a>
                                    <div class="from-news mt-3">
                                        <span class="date mr-3">{{$news->date_news}}</span> |
                                        <span class="author ml-3">Admin</span>
                                    </div>
                                    <div class="description-news">
                                        {{$news->news_content}}
                                    </div>
                                      <a href="/blog-detail/{{$news->id_news}}">
                                                         <button class="btn-sub-primary">Read now</button>
                                                    </a>
                                  
                                    <div class="tags-news mt-3 d-flex">
                                        <div class="tags-title mt-1">Tags:</div>
                                        <div class="tags-group">
                                            <button class="btn-sub-main ml-1 mb-2"><i
                                                    class="far fa-circle mr-2"></i>Explore</button>
                                            <button class="btn-sub-main ml-1 mb-2"><i
                                                    class="far fa-circle mr-2"></i>Adventure</button>
                                            <button class="btn-sub-main ml-1 mb-2"><i
                                                    class="far fa-circle mr-2"></i>Travel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
            </section>

            <section class="banner-sale">
                <div class="container-fluid">
                    <div class="row p-5 p-lg-0">
                        <div class="col-12 col-md-5 p-0 d-none d-lg-block">
                            <div class="text-group-banner">
                                <h1 class="title-overlay pt-3 pb-3 pt-lg-5 pb-lg-0">Explore</h1>
                                <h2 class="title-overlay pb-3 pt-3 pt-lg-2 pb-lg-0">Dream</h2>
                                <h3 class="title-overlay pt-3 pb-3 pt-lg-0 pb-lg-5">Discover</h3>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 m-auto">
                            <div class="w-100 d-flex justify-content-center flex-column flex-lg-row">
                                <div class="sale-box-banner">
                                    <div class="number">50</div>
                                    <div class="percent">%</div>
                                    <div class="off">Off</div>
                                    <div class="sale">Sale</div>
                                </div>
                                <div class="banner-sale-content mt-3 mt-lg-0">
                                    <div class="title pb-3">Epic Journeys From The Explooer</div>
                                    <div class="mt-3">cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                        occaecat
                                        cupidatat non proident, sunt in culpa.</div>
                                    <div class="banner-group-btn mt-3">
                                        {{-- <button class="btn-sub-primary mb-2 mr-2">Book now</button> --}}
                                        <button class="btn-sub-main mb-2">Read more</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="a-fact">
                <div class="container mt-5 mb-5">
                    <div class="row">
                        <div class="col-12 col-lg-5">
                            <div class="sub-title-section d-flex align-items-baseline">
                                <h3 class="mr-2">Proud number</h3>
                                <div class="yellow-row mr-1"></div>
                                <i class="fas fa-walking"></i>
                            </div>
                            <div class="title-section mt-1">
                                <h1>A fact of explorer</h1>
                            </div>
                            <div class="content-section">
                                <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam, by injected humour.</p>
                                <ul class="mt-3">
                                    <li class="mt-1"><i class="fas fa-long-arrow-alt-right mr-2"></i>1456 flight
                                        in the world.</li>
                                    <li class="mt-1"><i class="fas fa-long-arrow-alt-right mr-2"></i>2385 happy
                                        customer enjoy jouneys with Exploore.</li>
                                    <li class="mt-1"><i class="fas fa-long-arrow-alt-right mr-2"></i>356 best
                                        destinational we explore.
                                    </li>
                                    <li class="mt-1"><i class="fas fa-long-arrow-alt-right mr-2"></i>2345
                                        package tours every year.</li>
                                    <li class="mt-1"><i class="fas fa-long-arrow-alt-right mr-2"></i>Top 10 best
                                        tourism services.</li>
                                </ul>
                                <div class="mt-5">
                                    <button class="btn-sub-primary mr-3">Read more</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-7 d-none d-lg-block">
                            <div class="map">
                                <img src="{{asset('public/client/img/homepage/area-1.png')}}" alt=""
                                    hover-target="#area-1">
                                <img src="{{asset('public/client/img/homepage/area-2.png')}}" alt=""
                                    hover-target="#area-2">
                                <img src="{{asset('public/client/img/homepage/area-3.png')}}" alt=""
                                    hover-target="#area-3">
                                <img src="{{asset('public/client/img/homepage/area-4.png')}}" alt=""
                                    hover-target="#area-4">
                                <div class="area-icon" id="area-1"><i class="fas fa-plane"></i></div>
                                <div class="area-icon" id="area-2"><i class="fas fa-plane"></i></div>
                                <div class="area-icon" id="area-3"><i class="fas fa-plane"></i></div>
                                <div class="area-icon" id="area-4"><i class="fas fa-plane"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="contact">
                <div class="container pt-5">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-3 d-none d-lg-block">
                            <img src="{{asset('public/client/img/homepage/contact-people.png')}}" width="100%" alt="">
                        </div>
                        <div class="col-12 col-lg-5">
                            <div class="contact-form p-5">
                                <div class="contact-form-title">Contact us</div>
                                <div class="contact-form-description">Just pack and go! Let leave your
                                    travel
                                    plan to travel experts!</div>
                                <form class="mt-4">
                                    <div class="form-group">
                                        <input type="text" required name="name" class="form-control"
                                            placeholder="Your Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" required name="email" class="form-control"
                                            placeholder="Your Email">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" required name="content" rows="3"
                                            placeholder="Your Message"></textarea>
                                    </div>
                                    <div class="w-75 m-auto pt-3">
                                        <button type="button" id="sendMessage" class="btn-sub-main w-100">Send
                                            message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <script>
            $(function () {

                $('#sendMessage').click(function () {
                    var name = $('input[name="name"]').val();
                    var email = $('input[name="email"]').val();
                    var content = $('textarea[name="content"]').val();
                    if (name, email, content) {
                        $.get('/actionMessage', { name: name, email: email, content: content }, function (data) {
                            if (data == 'ok') {
                                $('input[name="name"]').val(null);
                                $('input[name="email"]').val(null);
                                $('textarea[name="content"]').val(null);

                                Swal.fire(
                                    'Send a successful message',
                                    'Thanks you',
                                    'success'
                                )
                            }
                        })
                    }
                })
            })
        </script>

        <!-- SCROLL TO TOP BTN -->
        @include('client.component.scroll-to-top-btn')

    </div>

    <!-- FOOTER -->
    @include('client.component.footer')

</div>
@endsection

@section('js')
<script type="text/javascript">
    $(document).ready(function () {
        $('.tours .owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                768: {
                    items: 2,
                    nav: false,
                    loop: false
                }
            }
        });

        $('.hotel .owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                768: {
                    items: 2,
                    nav: false,
                    loop: false
                }
            }
        });

        $('.traveler .owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                768: {
                    items: 3,
                    nav: false,
                    loop: false
                }
            }
        });

        $('.news .owl-carousel').owlCarousel({
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
                    items: 1,
                    nav: false,
                    loop: true
                }
            }
        });
    });
</script>
@endsection