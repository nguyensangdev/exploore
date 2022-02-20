@extends('index')

@section('meta')
    <title>Exploore | Hotels</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('public/client/css/hotel.css')}}">
    <link rel="stylesheet" href="{{asset('public/client/css/hotelProfile.css')}}">
    <link rel="stylesheet" href="{{asset('public/client/css/responsive/hotel-responsive.css')}}">
@endsection

@section('content')
    <div class="wrapper-content hotel-banner">

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
                            <li class="breadcrumb-link active"><a href="#">Profile</a></li>
                        </ul>
                        <div class="breadcrumb-title">Profile</div>
                    </div>
                </section>

                <section class="hotel-result mt-5">
                    <div class="container pt-5">
                        <div class="row">
                            <div class="col-12 col-lg-12">
                                <div class="col-12 col-lg-6">
                                    <div style="width: 500px;">
                                        <div class="avatar-profile" style="width: 60px;border-radius: 50%;float: left;height: 60px">
                                            <img style="width: 60px;border-radius: 50%;height: 60px"
                                                 src="../public/upload/{{$user->avatar}}">
                                        </div>
                                        <div style="float: right;width: 420px">
                                            <p style="text-align: left;color: #ffdd00;font-size: 20px;font-weight: 700">
                                                {{$user->full_name}}</p>
                                            <p style="text-align: left;color: #66718b;font-size: 16px;margin-top: -10px;">
                                                Cá nhân hóa tài khoản bằng việc cập nhật thông tin của bạn</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="col-0 col-lg-6"></div>
                            </div>
                            <div class="col-12 col-lg-4 pt-0">
                                <div class="list-group m-1">

                                    <a href="/profile" class="list-group-item list-group-item-action">Profile</a>
                                    <a href="/change-password" class="list-group-item list-group-item-action">Change
                                        password</a>
                                    <a href="/history" class="list-group-item list-group-item-action">History</a>

                                </div>
                                <div class="mt-3">
                                    <p style="padding-left: 5px;font-size: 24px;font-weight: 700;">Hotel</p>
                                    <div class="list-group m-1">

                                        <a href="/list-hotel" class="list-group-item list-group-item-action">List
                                            hotel</a>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-8 pt-0 profile-form">
                                <a href="/addHotelProfile"><button class="btn btn-warning" style="float: right">Thêm</button></a>
                                <table class="mt-5">
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Points</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            Joe
                                        </td>
                                        <td>
                                            Joe
                                        </td>
                                        <td>
                                            <a href="#" style="padding: 2px"><i class="far fa-plus-square"></i></a>
                                            <a href="/editProfileHotel" style="padding: 2px"><i class="fas fa-edit"></i></a>
                                            <a href="/deleteProfileHotel" style="padding: 2px"><i class="fas fa-minus-circle"></i></a>
                                        </td>
                                    </tr>
                                </table>

                            </div>
                        </div>
                        <hr>
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


