@extends('index')

@section('meta')
    <title>Exploore | Blogs</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('public/client/css/blog.css')}}">
    <link rel="stylesheet" href="{{asset('public/client/css/responsive/blog-responsive.css')}}">
@endsection

@section('content')
    <div class="wrapper-content blog-banner">

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
                            <li class="breadcrumb-link active"><a href="/blog-list">Blog</a></li>
                        </ul>
                        <div class="breadcrumb-title">Blog</div>
                    </div>
                </section>

                <section class="blog-list mt-5 pt-5 mb-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-9">
                                <div class="row">
                                    @foreach($news as $new)
                                        <div class="col-12 col-lg-12 mt-5">
                                            <div class="row" style="border-bottom: 1px solid #ebebeb">
                                                <div class="col-12 col-lg-6 p-0">
                                                    <div class="blog-img">
                                                        <img src="{{asset('public/upload/'.$new->news_img)}}" width="100%"
                                                             style="border-radius: 5px;height: 250px"
                                                             alt="">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <h2 class="font-20">{{$new->news_title}}</h2>
                                                    <p><i class="fas fa-calendar-minus"></i> {{$new->date_news}}</p>
                                                    <p class="blog-content">{{$new->news_describes}}</p>
                                                    <a href="/blog-detail/{{$new->id_news}}">
                                                        <button type="button" class="btn btn-outline-secondary btn-blog"
                                                                style="text-transform: uppercase">View more
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                </div>
                            </div>
                            <div class="col-12 col-lg-3">
                                <div class="row">
                                    <div class="col-12 col-lg-12">
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link active font-20"
                                                   style="width: 100%;text-align: center" id="nav-home-tab"
                                                   data-toggle="tab"
                                                   href="#nav-home" role="tab" aria-controls="nav-home"
                                                   aria-selected="true">RECENT
                                                    NEWS</a>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                                 aria-labelledby="nav-home-tab">
                                                <div class="col-12 col-lg-12 pt-4">
                                                    <div class="row ">
                                                        @foreach($news as $newsList)
                                                            <div class="col-12 col-lg-12">
                                                                <div class="row">
                                                                    <div class="col-5 col-lg-5 ">
                                                                        <div class="blog-img">
                                                                            <img
                                                                                src="{{asset('public/upload/'.$newsList->news_img)}}"
                                                                                width="100%"
                                                                                style="height: 80px"
                                                                                alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-7 col-lg-7 p-0">
                                                                        <p style="font-size: 12px">
                                                                            {{$newsList->date_news}}
                                                                        </p>
                                                                        <p style="margin-top: -15px;font-size: 13px">{{$newsList->news_title}}</p>

                                                                    </div>
                                                                </div>
                                                                <hr class="hr-blog">
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="contact-blog">
                    <div class="container pt-5">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-3 d-none d-lg-block">
                                <img src="{{asset('public/client/img/homepage/contact-people.png')}}" width="100%"
                                     alt="">
                            </div>
                            <div class="col-12 col-lg-5">
                                <div class="contact-blog-form p-5">
                                    <div class="contact-blog-form-title">Contact us</div>
                                    <div class="contact-blog-form-description">Just pack and go! Let leave your
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
@endsection