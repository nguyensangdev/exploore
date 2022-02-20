@extends('index')

@section('meta')
<title>Exploore | About</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('public/client/css/about.css')}}">
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
                        <li class="breadcrumb-link active"><a href="/about">About</a></li>
                    </ul>
                    <div class="breadcrumb-title">About us</div>
                </div>
            </section>

            <section class="journey mt-5 mb-3">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-7">
                            <div class="sub-title-section d-flex align-items-baseline">
                                <div class="yellow-row mr-1"></div>
                                <i class="fas fa-walking"></i>
                            </div>
                            <div class="title-section mt-1">
                                <h1>Epic journeys</h1>
                            </div>
                            <div class="content-section">
                                <p class="mt-3">Consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                    ut labore et
                                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat duis aute irure
                                    dolor quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                    commodo consequat duis aute.</p>
                                <p class="mt-3">Consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                    ut labore et
                                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat duis aute irure
                                    dolor.</p>
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
                                        <li class="mt-1"><i class="fas fa-long-arrow-alt-right mr-2"></i>Handpicked
                                            Hotels
                                        </li>
                                        <li class="mt-1"><i class="fas fa-long-arrow-alt-right mr-2"></i>Accesibility
                                            managment</li>
                                        <li class="mt-1"><i class="fas fa-long-arrow-alt-right mr-2"></i>10
                                            Languages available</li>
                                        <li class="mt-1"><i class="fas fa-long-arrow-alt-right mr-2"></i>+120
                                            Premium city tours</li>
                                    </div>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5 d-none d-lg-block">
                            <img src="{{asset('public/client/img/homepage/about-us-4.png')}}" width="100%" alt="">
                        </div>
                    </div>
                </div>
            </section>

            <section class="value pt-5 pb-5">
                <div class="container">
                    <div class="sub-title-section d-flex align-items-baseline">
                        <div class="yellow-row mr-1"></div>
                        <i class="fas fa-walking"></i>
                    </div>
                    <div class="title-section mt-1">
                        <h1>Our values</h1>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-3 mt-3 mb-3">
                            <div class="value-icon pt-1 pb-1"><i class="fas fa-money-bill-wave-alt"></i></div>
                            <div class="value-title pt-1 pb-1">We offer daily tours</div>
                            <div class="value-description pt-1 pb-1">If you want to spend an unforgettable day
                                in Poland this offer is dedicated especially for you. Come and travel with us
                                and the memories you gather will last eternally.</div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 mt-3 mb-3">
                            <div class="value-icon pt-1 pb-1"><i class="fas fa-glasses"></i></div>
                            <div class="value-title pt-1 pb-1">Pygmy Itineraries</div>
                            <div class="value-description pt-1 pb-1">We create unique itineraries by combining
                                lodging, transportation, equipment and experiences and handling complex
                                logistics. These itineraries can be self guided or privately guided and can be
                                tailored to suit your desires.</div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 mt-3 mb-3">
                            <div class="value-icon pt-1 pb-1"><i class="fas fa-lightbulb"></i></div>
                            <div class="value-title pt-1 pb-1">Best price guarantee</div>
                            <div class="value-description pt-1 pb-1">Stay at the best accommodations for an
                                unbeatable best price — guaranteed. With Exploore, you can be confident that
                                you're paying at the best possible rate.</div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 mt-3 mb-3">
                            <div class="value-icon pt-1 pb-1"><i class="fas fa-utensils"></i></div>
                            <div class="value-title pt-1 pb-1">Eco lodges & tours</div>
                            <div class="value-description pt-1 pb-1">Ecolodges Vietnam offer breath-taking
                                wildlife travel experiences. Enjoy unique birds and animals and natural wonders
                                in the heart of Vietnam.</div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 mt-3 mb-3">
                            <div class="value-icon pt-1 pb-1"><i class="fas fa-ship"></i></div>
                            <div class="value-title pt-1 pb-1">Endangered Wildlife</div>
                            <div class="value-description pt-1 pb-1">This Encyclopedia Britannica animals list
                                features 10 well known endangered animal species.</div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 mt-3 mb-3">
                            <div class="value-icon pt-1 pb-1"><i class="fas fa-child"></i></div>
                            <div class="value-title pt-1 pb-1">We offer daily tours</div>
                            <div class="value-description pt-1 pb-1">If you want to spend an unforgettable day
                                in Poland this offer is dedicated especially for you. Come and travel with us
                                and the memories you gather will last eternally.</div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 mt-3 mb-3">
                            <div class="value-icon pt-1 pb-1"><i class="fas fa-users"></i></div>
                            <div class="value-title pt-1 pb-1">Epic journeys</div>
                            <div class="value-description pt-1 pb-1">xplore the ancient, mysterious world of
                                Journey as you soar above ruins and glide across sands to discover its secrets.
                                Play alone or in the company of a fellow ...</div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 mt-3 mb-3">
                            <div class="value-icon pt-1 pb-1"><i class="fas fa-map-signs"></i></div>
                            <div class="value-title pt-1 pb-1">Never lose your deposit</div>
                            <div class="value-description pt-1 pb-1">Exploore is the online booking site and
                                trading name of Nordic Visitor an Scandinavian travel agency selling tours to
                                the Nordic region.</div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="open-position pt-5 pb-5">
                <div class="container">
                    <div class="sub-title-section d-flex align-items-baseline">
                        <div class="yellow-row mr-1"></div>
                        <i class="fas fa-walking"></i>
                    </div>
                    <div class="title-section mt-1">
                        <h1>Open positon</h1>
                    </div>
                    <div class="row mt-5">
                        <div class="col-12 col-lg-4">
                            <ul class="list-group p-0">
                                <li class="list-group-item d-flex justify-content-between">
                                    <div>
                                        <i class="fas fa-long-arrow-alt-right mr-3"></i> Accounting, finance &
                                        legal
                                    </div>
                                    <span class="">3</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <div>
                                        <i class="fas fa-long-arrow-alt-right mr-3"></i> Creative
                                    </div>
                                    <span class="">1</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <div>
                                        <i class="fas fa-long-arrow-alt-right mr-3"></i> Engineering & product
                                    </div>
                                    <span class="">4</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <div>
                                        <i class="fas fa-long-arrow-alt-right mr-3"></i> Information technology
                                    </div>
                                    <span class="">6</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <div>
                                        <i class="fas fa-long-arrow-alt-right mr-3"></i> Marketing & sale
                                    </div>
                                    <span class="">2</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <div>
                                        <i class="fas fa-long-arrow-alt-right mr-3"></i> Account management
                                    </div>
                                    <span class="">1</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <div>
                                        <i class="fas fa-long-arrow-alt-right mr-3"></i> Internships
                                    </div>
                                    <span class="">12</span>
                                </li>
                            </ul>
                            <div class="open-info-box mt-3">
                                <div class="open-info-title">
                                    <h4>Explorer San Francisco llc</h4>
                                </div>
                                <p class="pt-2 pb-2">Create your travel agency, lodge, club, blog or destination
                                    website the quick
                                    and easy way.</p>
                                <p><i class="fas fa-map-marker-alt mr-3"></i> 391A Nam Ky Khoi
                                    Nghia, Ward
                                    8, District 3, HCMC, Vietnam</p>
                                <p><i class="fas fa-phone mr-3"></i> 0963 597 534</p>
                                <p><i class="fas fa-envelope mr-3"></i> hello@exploore.com</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-8 d-none d-lg-block">
                            <div class="position-relative ">
                                <img class="open-img" src="{{asset('public/client/img/background/bg-team-open.jpg')}}" width="100%" alt="">
                                <div class="open-social-box">
                                    <a href="">
                                        <div class="open-social"><i class="fab fa-facebook-f"></i>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="open-social"><i class="fab fa-instagram"></i>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="open-social"><i class="fab fa-twitter"></i>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="open-social"><i class="fab fa-youtube"></i>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="open-social"><i class="fab fa-google-plus-g"></i></div>
                                    </a>
                                </div>
                            </div>
                            <div class="mt-5">
                                <div class="open-info-title">
                                    <h4>Business Excellence</h4>
                                </div>
                                <div class="sub-title mt-3 mb-3"><i class="fas fa-angle-double-right mr-3"></i>What
                                    we’re
                                    looking for:</div>
                                <p class="pl-5">You will be working on a wide variety of projects, from
                                    branding,
                                    advertising, web design, and everything in between. Our style is very
                                    collaborative and informal so versatility and communication skills are key.
                                    You are a Designer with well-rounded design skills, a desire to learn, and a
                                    passion for solving problems of all shapes and sizes with thoughtful design.
                                </p>
                                <div class="sub-title mt-3 mb-3"><i class="fas fa-angle-double-right mr-3"></i>What
                                    we’re
                                    looking for:</div>
                                <ul class="open-info-list pl-5">
                                    <li>Create assets for the Zendesk website</li>
                                    <li>Concept ideas around the Zendesk brand</li>
                                    <li>Design and e xecute Zendesk online advertising</li>
                                    <li>Design presentations and printed materials</li>
                                </ul>
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