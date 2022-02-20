@extends('index')

@section('meta')
<title>Exploore | Tours</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('public/client/css/tour.css')}}">
<link rel="stylesheet" href="{{asset('public/client/css/responsive/tour-responsive.css')}}">
@endsection

@section('content')
<div class="wrapper-content tour-banner">

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
                        <li class="breadcrumb-link active"><a href="/tour-list">Tour</a></li>
                    </ul>
                    <div class="breadcrumb-title">Tour</div>
                </div>
            </section>

            <section class="tour-result mt-5">
                <div class="container pt-5">
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <div class="find-tour p-4">
                                <div class="find-tour-title">Find your tours</div>
                                <form class="mt-4">
                                    <div class="form-group">
                                        <label for="inputDestination">Where do you want to go?</label>
                                        <input type="text" id="inputDestination" class="form-control"
                                            placeholder="Write the place">
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputTourCheckInDate">Check in</label>
                                            <input type="text" class="form-control" id="inputTourCheckInDate"
                                                placeholder="mm/dd/yyyy">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputTourCheckOutDate">Check out</label>
                                            <input type="text" class="form-control" id="inputTourCheckOutDate"
                                                placeholder="mm/dd/yyyy">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="inputAdult">Adult</label>
                                            <input type="number" class="form-control" id="inputAdult" value="1" min="0"
                                                max="10">
                                        </div>
                                        <!-- <div class="form-group col-md-6">
                                                <label for="inputChild">Child</label>
                                                <input type="number" class="form-control" id="inputChild    " value="0"
                                                       min="0" max="10">
                                            </div> -->
                                    </div>
                                    <div class="w-75 m-auto pt-3">
                                        <button type="button" id="form_search" class="btn-sub-main w-100">Send
                                            message</button>
                                    </div>
                                </form>
                            </div>
                            <div class="sort-title w-100 text-center mt-5 pt-2 pb-2">Price</div>
                            <div class="sort-tour-price">
                                <div id='range-tour' class="range">
                                    <div id='range-bar-tour' class='range__between'></div>
                                    <button id='left-range-btn-tour' name="filter_price"
                                        class="range__button_1"></button>
                                    <button id='right-range-btn-tour' name="filter_price"
                                        class="range__button_2"></button>
                                    <div class="w-100 d-flex justify-content-between">
                                        <input id='min-price-tour' name="" class='form-control range_inpt1'
                                            type='number' min='0' max='1000'>
                                        <input id='max-price-tour' class='form-control range_inpt2' type='number'
                                            min='0' max='1000'>
                                    </div>
                                </div>
                            </div>
                            <div class="sort-title w-100 text-center mt-5 pt-2 pb-2">Rating</div>
                            <form class="mb-5" action="">
                                <div class="d-flex align-items-center justify-content-between pt-1 pb-1">
                                    <div class="d-flex align-items-center">
                                        <label for="" class="radio-custom-btn mr-5">
                                            <input type="radio" name="tour-rating" class="form-check" value="" checked>
                                            <span class="radio-checkmark"></span>
                                        </label>
                                        <div class="text-capitalize font-weight-bold mt-2">All tours</div>
                                    </div>
                                    <span>{{count($listTour)}}</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between pt-1 pb-1">
                                    <div class="d-flex align-items-center">
                                        <label for="" class="radio-custom-btn mr-5">
                                            <input type="radio" name="tour-rating" class="form-check" value="5">
                                            <span class="radio-checkmark"></span>
                                        </label>
                                        <div class="rating-content mt-2">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <span>{{$countRating[4]}}</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between pt-1 pb-1">
                                    <div class="d-flex align-items-center">
                                        <label for="" class="radio-custom-btn mr-5">
                                            <input type="radio" name="tour-rating" class="form-check" value="4">
                                            <span class="radio-checkmark"></span>
                                        </label>
                                        <div class="rating-content mt-2">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <span>{{$countRating[3]}}</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between pt-1 pb-1">
                                    <div class="d-flex align-items-center">
                                        <label for="" class="radio-custom-btn mr-5">
                                            <input type="radio" name="tour-rating" class="form-check" value="3">
                                            <span class="radio-checkmark"></span>
                                        </label>
                                        <div class="rating-content mt-2">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <span>{{$countRating[2]}}</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between pt-1 pb-1">
                                    <div class="d-flex align-items-center">
                                        <label for="" class="radio-custom-btn mr-5">
                                            <input type="radio" name="tour-rating" class="form-check" value="2">
                                            <span class="radio-checkmark"></span>
                                        </label>
                                        <div class="rating-content mt-2">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <span>{{$countRating[1]}}</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between pt-1 pb-1">
                                    <div class="d-flex align-items-center">
                                        <label for="" class="radio-custom-btn mr-5">
                                            <input type="radio" name="tour-rating" class="form-check" value="1">
                                            <span class="radio-checkmark"></span>
                                        </label>
                                        <div class="rating-content mt-2">
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <span>{{$countRating[0]}}</span>
                                </div>
                            </form>
                        </div>
                        <div class="col-12 col-lg-8 pt-0">
                            <div id="tour-list">
                                @include('client.showTour')
                            </div>
                            <!---->
                            <!-- For mobile -->
                            <div class="d-flex d-md-none justify-content-center mb-3">
                                <button class="btn-sub-main">View more</button>
                            </div>
                            <!---->
                        </div>
                    </div>
                    <hr>
                </div>
            </section>

            <section class="tour-offer pt-5 pb-5">
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

            <section class="contact-tour">
                <div class="container pt-5">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-3 d-none d-lg-block">
                            <img src="{{asset('public/client/img/homepage/contact-people.png')}}" width="100%" alt="">
                        </div>
                        <div class="col-12 col-lg-5">
                            <div class="contact-tour-form p-5">
                                <div class="contact-tour-form-title">Contact us</div>
                                <div class="contact-tour-form-description">Just pack and go! Let leave your
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

@section('js')
<script src="{{asset('public/client/js/slide-range.js')}}"></script>

<script type="text/javascript">

    $(function () {
        $('input[type=radio][name=tour-rating]').change(function () {
            console.log($(this));

            var rating = this.value;
            var valueMin = $('#min-price-tour').val();
            var valueMax = $('#max-price-tour').val();
            var action = 'filter';
            $.get('/tour-list/listTourFilter', {
                action: action,
                rating: rating,
                priceMin: valueMin,
                priceMax: valueMax
            }, function (data) {
                $('#tour-list').html(data);
            })
        })
    })



    $('button[name=filter_price]').mouseup(function () {
        console.log($(this));
        var valueMin = $('#min-price-tour').val();
        var valueMax = $('#max-price-tour').val();
        var rating = $('input[type=radio][name=tour-rating]');
        var valueRating = 0;
        for (var i = 0; i <= 5; i++) {
            if (rating[i].checked) {
                valueRating = rating[i].value;
                break;
            }
        }
        var action = 'filter';
        $.get('/tour-list/listTourFilter', {
            action: action,
            priceMin: valueMin,
            priceMax: valueMax,
            rating: valueRating
        }, function (data) {
            $('#tour-list').html(data);
        });
    })

    $('#form_search').click(function () {
        var inputDestination = $('#inputDestination').val();
        var inputTourCheckInDate = $('#inputTourCheckInDate').val();
        var inputTourCheckOutDate = $('#inputTourCheckOutDate').val();
        var inputAdult = $('#inputAdult').val();

        var action = 'search';
        $.get('/tour-list/listTourFilter', {
            inputDestination: inputDestination,
            inputTourCheckInDate: inputTourCheckInDate,
            inputTourCheckOutDate: inputTourCheckOutDate,
            inputAdult: inputAdult,
            action: action
        }, function (data) {
            $('#tour-list').html(data);
        })
    })

    $('.pagination a').on('click', function (event) {
        event.preventDefault();
        var page = $(this).attr('href').split('page=')[1];
        console.log(page);
        $.get('/tour-list/listTourFilter?page' + page, function (data) {
            $('#tour-list').html(data);
        });
    });

    setTimeout(init2slider('range-tour', 'range-bar-tour', 'left-range-btn-tour', 'right-range-btn-tour', 'min-price-tour', 'max-price-tour'), 0);

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
</script>
@endsection