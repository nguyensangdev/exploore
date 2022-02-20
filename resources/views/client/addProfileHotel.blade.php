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
                                        <div class="avatar-profile" style="width: 60px;border-radius: 50%;float: left;">
                                            <img style="width: 60px;border-radius: 50%;"
                                                 src="as">
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
                                <form>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Name</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1"
                                               placeholder="Current password">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Price</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1"
                                               placeholder="New password">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Address</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1"
                                               placeholder="Confirm password">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Province</label>
                                        <select class="custom-select">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Describes</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1"
                                               placeholder="Confirm password">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Image</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Sale</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1"
                                               placeholder="Confirm password">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Status</label>
                                        <select class="custom-select">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
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


