<!DOCTYPE html>
<html lang="en">


<title>Admin Exploore Travel</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description"/>
<meta content="Coderthemes" name="author"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<!-- App favicon -->
<link rel="shortcut icon" href="{{asset('public/admin/assets/images/favicon.ico')}}">

<!-- plugin css -->
<link href="{{asset('public/admin/assets/libs/jquery-vectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet"
      type="text/css"/>

<!-- App css -->
<link href="{{asset('public/admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('public/admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('public/admin/assets/css/app.min.css')}}" rel="stylesheet" type="text/css"/>
{{--Ckeditor--}}
<script src="{{asset('public/admin/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('public/admin/ckfinder/ckfinder.js')}}"></script>

</head>

<body>
<!-- Begin page -->
<div id="wrapper">

    @include('admin.header')
    @yield('content')
    @include('admin.footer')

</div>
<!-- END wrapper -->

<!-- Right Sidebar -->
<div class="right-bar">
    <div class="rightbar-title">
        <a href="javascript:void(0);" class="right-bar-toggle float-right">
            <i class="dripicons-cross noti-icon"></i>
        </a>
        <h5 class="m-0 text-white">Settings</h5>
    </div>
    <div class="slimscroll-menu">
        <!-- User box -->
        <div class="user-box">
            <div class="user-img">
                <img src="assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme"
                     class="rounded-circle img-fluid">
                <a href="javascript:void(0);" class="user-edit"><i class="mdi mdi-pencil"></i></a>
            </div>

            <h5><a href="javascript: void(0);">Geneva Kennedy</a></h5>
            <p class="text-muted mb-0"><small>Admin Head</small></p>
        </div>

        <!-- Settings -->
        <hr class="mt-0"/>
        <h5 class="pl-3">Basic Settings</h5>
        <hr class="mb-0"/>

        <div class="p-3">
            <div class="checkbox checkbox-primary mb-2">
                <input id="Rcheckbox1" type="checkbox" checked>
                <label for="Rcheckbox1">
                    Notifications
                </label>
            </div>
            <div class="checkbox checkbox-primary mb-2">
                <input id="Rcheckbox2" type="checkbox" checked>
                <label for="Rcheckbox2">
                    API Access
                </label>
            </div>
            <div class="checkbox checkbox-primary mb-2">
                <input id="Rcheckbox3" type="checkbox">
                <label for="Rcheckbox3">
                    Auto Updates
                </label>
            </div>
            <div class="checkbox checkbox-primary mb-2">
                <input id="Rcheckbox4" type="checkbox" checked>
                <label for="Rcheckbox4">
                    Online Status
                </label>
            </div>
            <div class="checkbox checkbox-primary mb-0">
                <input id="Rcheckbox5" type="checkbox" checked>
                <label for="Rcheckbox5">
                    Auto Payout
                </label>
            </div>
        </div>

        <!-- Timeline -->
        <hr class="mt-0"/>
        <h5 class="px-3">Messages <span class="float-right badge badge-pill badge-danger">25</span></h5>
        <hr class="mb-0"/>
        <div class="p-3">
            <div class="inbox-widget">
                <div class="inbox-item">
                    <div class="inbox-item-img"><img src="assets/images/users/user-2.jpg" class="rounded-circle" alt="">
                    </div>
                    <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Tomaslau</a></p>
                    <p class="inbox-item-text">I've finished it! See you so...</p>
                </div>
                <div class="inbox-item">
                    <div class="inbox-item-img"><img src="assets/images/users/user-3.jpg" class="rounded-circle" alt="">
                    </div>
                    <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Stillnotdavid</a></p>
                    <p class="inbox-item-text">This theme is awesome!</p>
                </div>
                <div class="inbox-item">
                    <div class="inbox-item-img"><img src="assets/images/users/user-4.jpg" class="rounded-circle" alt="">
                    </div>
                    <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Kurafire</a></p>
                    <p class="inbox-item-text">Nice to meet you</p>
                </div>

                <div class="inbox-item">
                    <div class="inbox-item-img"><img src="assets/images/users/user-5.jpg" class="rounded-circle" alt="">
                    </div>
                    <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Shahedk</a></p>
                    <p class="inbox-item-text">Hey! there I'm available...</p>
                </div>
                <div class="inbox-item">
                    <div class="inbox-item-img"><img src="assets/images/users/user-6.jpg" class="rounded-circle" alt="">
                    </div>
                    <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Adhamdannaway</a></p>
                    <p class="inbox-item-text">This theme is awesome!</p>
                </div>
            </div> <!-- end inbox-widget -->
        </div> <!-- end .p-3-->

    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- Vendor js -->
<script src="{{asset('public/admin/assets/js/vendor.min.js')}}"></script>

<!-- Footable js -->
<script src="{{asset('public/admin/assets/libs/footable/footable.all.min.js')}}"></script>

<!-- Init js -->
<script src="{{asset('public/admin/assets/js/pages/foo-tables.init.js')}}"></script>

<!-- Plugins js-->
<script src="{{asset('public/admin/assets/libs/flatpickr/flatpickr.min.js')}}"></script>
<script src="{{asset('public/admin/assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js')}}"></script>
<script src="{{asset('public/admin/assets/libs/clockpicker/bootstrap-clockpicker.min.js')}}"></script>
<script src="{{asset('public/admin/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>

<!-- Init js-->
<script src="{{asset('public/admin/assets/js/pages/form-pickers.init.js')}}"></script>

<!-- Dashboard 2 init -->
<script src="{{asset('public/admin/assets/js/pages/dashboard-2.init.js')}}"></script>

<!-- App js-->
<script src="{{asset('public/admin/assets/js/app.min.js')}}"></script>

</body>
</html>
