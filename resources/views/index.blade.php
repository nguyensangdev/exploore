<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- META -->
    @yield('meta')

    <link rel="shortcut icon" href="{{asset('public/client/img/logo/favicon.png')}}" type="image/x-icon">
    <script src="{{asset('public/client/jquery/jquery.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <!-- LIBRARY CSS -->
    <link rel="stylesheet" href="{{asset('public/client/jquery/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('public/client/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/client/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/client/OwlCarousel/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/client/OwlCarousel/dist/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/client/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/client/css/responsive/responsive.css')}}">


    <!-- CUSTOMISE CSS -->
    @yield('css')

    <style type="text/css">
        @font-face {
            font-family: "SF Pro Display";
            src: url("{{asset('public/client/font/SFProDisplay-Regular.ttf')}}")
        }

        @font-face {
            font-family: "Arial";
            src: url("{{asset('public/client/font/arial.ttf')}}")
        }

        @font-face {
            font-family: "SF Pro Text";
            src: url("{{asset('public/client/font/SFProText-Regular.ttf')}}")
        }
    </style>

</head>

<body>
    <div class="wrapper">

        <!-- TOP TARGET-->
        @include('client.component.top-target')

        <!-- MOBILE HEADER TOP -->
        @include('client.component.mobile-header-top')

        <!-- BACKDROP MOBILE SIDE MENU -->
        @include('client.component.backdrop-mobile-side-menu')

        <!-- MOBILE SIDE MENU -->
        @include('client.component.mobile-side-menu')

        <!-- SCROLL MENU -->
        @include('client.component.scroll-menu')

        <!-- WRAPPER CONTENT -->
        @yield('content')

    </div>

    <!-- LIBRARY JS -->
    <script src="{{asset('public/client/jquery/jquery-ui.js')}}"></script>
    <script src="{{asset('public/client/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('public/client/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/client/OwlCarousel/dist/owl.carousel.min.js')}}"></script>
    <script src="{{asset('public/client/js/custom.js')}}"></script>
    <script src="{{asset('public/client/js/validate.js')}}"></script>

    <!-- CUSTOMIZE JS-->
    @yield('js')
</body>

</html>