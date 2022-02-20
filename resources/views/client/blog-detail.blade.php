@extends('index')

@section('meta')
    <title>Exploore | Blogs</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('public/client/css/blog.css')}}">
    <link rel="stylesheet" href="{{asset('public/client/css/responsive/blog-responsive.css')}}">
@endsection

@section('content')
    <div class="wrapper-content blog-banner"
         style="background-image: url('/public/upload/{{$news->news_img}}');background-repeat: repeat;
             background-attachment: fixed;
             background-position: top;
             -webkit-background-size: cover;
             background-size: cover;
             height: 85vh;">

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
                        <div class="breadcrumb-title">Blog-detail</div>
                    </div>
                </section>

                <section class="blog-list mt-5 pt-5 mb-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-8">
                                <div class="row">

                                    <div class="col-12 col-lg-12">
                                        <div class="row">
                                            <div class="col-12 col-lg-12">
                                                <div>
                                                    <img src="{{asset('public/upload/'.$news->news_img)}}"
                                                         style="width: 100%;">
                                                </div>
                                                <div class="blog-detail-content pt-4">
                                                    <h2 class="font-20"
                                                        style="font-weight: bold">{{$news->news_title}}</h2>
                                                    <p style="text-transform: capitalize;font-style: italic">
                                                        <span>Post by: {{$news->account->full_name}}</span>
                                                        <span style="padding: 0px 10px">/</span>
                                                        <span> {{$news->date_news}}</span>
                                                    </p>
                                                    <p class="blog-description"
                                                       style="font-weight: 600">{!!$news->news_describes!!}</p>
                                                </div>
                                                <div>
                                                    {!! $news->news_content !!}
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
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
                                                        @foreach($newsList as $newsList)
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
                                                                        <a href="/blog-detail/{{$newsList->id_news}}" style="color:#fd0">
                                                                        <p style="margin-top: -15px;font-size: 13px">{{$newsList->news_title}}</p>
                                                                        </a>
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
                                    <div class="col-12 col-lg-12 mt-4">
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link active font-20"
                                                   style="width: 100%;text-align: center;text-transform: uppercase"
                                                   id="nav-home-tab" data-toggle="tab"
                                                   href="#nav-home" role="tab" aria-controls="nav-home"
                                                   aria-selected="true">tags</a>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                                 aria-labelledby="nav-home-tab">
                                                <div class="col-12 col-lg-12 pt-4">
                                                    <div class="row pr-3">
                                                        <div class="col-4 col-lg-4">
                                                            <button
                                                                class="d-flex align-items-center btn btn-outline-secondary btn-tags"
                                                                style="border-radius:25px">
                                                                <div class="dot-circle-alt mr-2"></div>
                                                                <span>Traveling</span>
                                                            </button>
                                                        </div>
                                                        <div class="col-4 col-lg-4">
                                                            <button
                                                                class="d-flex align-items-center btn btn-outline-secondary btn-tags"
                                                                style="border-radius:25px">
                                                                <div class="dot-circle-alt mr-2"></div>
                                                                <span>Traveling</span>
                                                            </button>
                                                        </div>
                                                        <div class="col-4 col-lg-4">
                                                            <button class="d-flex align-items-center btn btn-outline-secondary btn-tags" style="border-radius:25px">
                                                                <div class="dot-circle-alt mr-2"></div>
                                                                <span>Traveling</span>
                                                            </button>
                                                        </div>
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