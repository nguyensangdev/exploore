@extends('../admin')
@section('content')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                    <li class="breadcrumb-item active">Elements</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Basic Elements</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="mb-3 header-title">Thêm Room</h4>

                                <form class="form-horizontal" enctype="multipart/form-data"
                                      action="{{ url('bookRoom/addBookRoom') }}" method="post">
                                    @csrf()
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Ngày nhận phòng</label>
                                        <div class="col-9">
                                            <input type="text" class="form-control" id="datetime-datepicker" class="form-control flatpickr-input" name="check_in">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Ngày trả phòng</label>
                                        <div class="col-9">
                                            <input type="text" class="form-control" id="datetime-datepicker-2" class="form-control flatpickr-input" name="check_out">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Số lượng người</label>
                                        <div class="col-9">
                                            <input type="text" class="form-control" id="inputEmail3" name="number_of_people">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputPassword3" class="col-3 col-form-label">Ghi chú</label>
                                        <div class="col-9">
                                           <textarea type="text" id="note" name="note"
                                                     placeholder="Text"
                                                     class="form-control"></textarea>
                                            <script type="text/javascript">
                                                CKEDITOR.replace('note');
                                            </script>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Dịch vụ</label>
                                        <div class="col-9">
                                            <input type="text" class="form-control" id="inputEmail3" name="service">
                                        </div>
                                    </div>

                                    <div class="form-group mb-0 justify-content-end row">
                                        <div class="col-9">
                                            <button type="submit" class="btn btn-info waves-effect waves-light">Thêm
                                            </button>
                                        </div>
                                    </div>
                                </form>

                            </div>  <!-- end card-body -->
                        </div>  <!-- end card -->
                    </div>  <!-- end col -->

                </div>
                <!-- end row -->

            </div> <!-- container -->

        </div> <!-- content -->

    </div>

    <!-- Plugins css -->
    <link href="{{asset('public/admin/assets/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/admin/assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/admin/assets/libs/clockpicker/bootstrap-clockpicker.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/admin/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css" />

@endsection
