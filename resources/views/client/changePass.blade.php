@extends('index')

@section('meta')
    <title>Exploore | Hotels</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('public/client/css/hotel.css')}}">
    <link rel="stylesheet" href="{{asset('public/client/css/profile.css')}}">
    <link rel="stylesheet" href="{{asset('public/client/css/responsive/hotel-responsive.css')}}">
@endsection

@section('content')
    <div class="wrapper-content hotel-banner">

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
        <div class="wrapper-body" >
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
                                        <div class="avatar-profile" style="width: 60px;border-radius: 50%;float: left;height: 60px;">
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
                                    <a href="/change-password" class="list-group-item list-group-item-action">Change password</a>
                                    <a href="/history" class="list-group-item list-group-item-action">History</a>

                                </div>
                                <div class="mt-3">
                                    <p style="padding-left: 5px;font-size: 24px;font-weight: 700;">Hotel</p>
                                    <div class="list-group m-1">

                                        <a href="/list-hotel" class="list-group-item list-group-item-action">List hotel</a>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-8 pt-0 profile-form">
                                   <form action="/actionChangePasss" method="post">
                                @csrf
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Current password</label>
                                        <input type="password" required class="form-control" name="currentPassword" id="exampleInputPassword1"
                                               placeholder="Current password">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">New password</label>
                                        <input type="password" required class="form-control" name="newPassword" id="inputPassword"
                                               placeholder="New password">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Confirm password</label>
                                        <input type="password" required class="form-control"  onfocusout="validatePassword()" name="cofirmPassword" id="inputConfirmPassword"
                                               placeholder="Confirm password">
                                               <div id="truePasswordMessage" class="valid-message text-left ml-2 pl-1">
                                    </div>
                                    <div id="falsePasswordMessage" class="invalid-message text-left ml-2 pl-1">
                                    </div>
                                            </div>
                                            <p style="color:red">
                                        @if(isset($tt))
                                        {{$tt}}
                                        @endif
                                        </p>
                                   
                                    <button type="submit" class="btn btn-warning">Submit</button>
                                </form>

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


