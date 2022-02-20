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
                            <h4 class="page-title">Update hotel</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="mb-3 header-title">Update Hotel</h4>

                                <form class="form-horizontal" enctype="multipart/form-data"
                                      action="{{ url('hotel/updateHotel') }}" method="post">
                                    @csrf()
                                    <input type="hidden" name="id_hotel" value="{{$result->id_hotel}}">
                                    <input type="hidden" name="id_account" value="{{$result->id_account}}">
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Hotel name</label>
                                        <div class="col-9">
                                            <input type="text" class="form-control" id="inputEmail3" name="hotel_name" value=
                                            "{{$result->hotel_name}}">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Price</label>
                                        <div class="col-9">
                                            <input type="text" class="form-control" id="inputEmail3" name="hotel_price" value=
                                            "{{$result->hotel_price}}">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                            <label for="inputEmail3" class="col-3 col-form-label">Location</label>
                                            <div class="col-9">
                                                <select class="custom-select" name="location">
                                                    @foreach($province as $province)
                                                         <option value="{{$province->id_province}}">{{$province->name}}</option>
                                                        @endforeach
                                                 </select>
                                            </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Images</label>
                                        <div class="col-9">
                                            <div class="input-group mb-2">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile04"
                                                           name="image_hotel" onchange="return fileValidation()">
                                                    <label id="img_hotel" class="custom-file-label"
                                                           for="inputGroupFile04">Choose
                                                        file</label>
                                                    <input type="hidden" name="img" value="{{$result->hotel_img}}">
                                                </div>
                                            </div>
                                            <img src="{{asset('public/upload/'.$result->hotel_img)}}" width="50%">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Address hotel</label>
                                        <div class="col-9">
                                            <input type="text" class="form-control" id="inputEmail3" name="hotel_address" value=
                                            "{{$result->hotel_address}}">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputPassword3" class="col-3 col-form-label">Infomation hotel</label>
                                        <div class="col-9">
                                           <textarea type="text" id="hotel_describes" name="hotel_describes"
                                                     placeholder="Text"
                                                     class="form-control">{{$result->hotel_describes}}</textarea>
                                            <script type="text/javascript">
                                                CKEDITOR.replace('hotel_describes');
                                            </script>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Status</label>
                                        <div class="col-9">
                                            @if( $result->Smoking_room == 0)
                                            <div class="radio radio-info form-check-inline">
                                                <input type="radio" id="inlineRadio1" value="0" name="status">
                                                <label for="inlineRadio1"> Hot </label>
                                            </div>
                                            <div class="radio form-check-inline">
                                                <input type="radio" id="inlineRadio2" value="1" name="status" checked="">
                                                <label for="inlineRadio2">New</label>
                                            </div>
                                            @else
                                            <div class="radio radio-info form-check-inline">
                                                <input type="radio" id="inlineRadio1" value="0" name="status" checked="">
                                                <label for="inlineRadio1"> Hot </label>
                                            </div>
                                            <div class="radio form-check-inline">
                                                <input type="radio" id="inlineRadio2" value="1" name="status">
                                                <label for="inlineRadio2">New</label>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group mb-0 justify-content-end row">
                                        <div class="col-9">
                                            <button type="submit" class="btn btn-info waves-effect waves-light">UPDATE
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
     <!-- JS file image -->
     <script>
        function fileValidation() {
            var fileInput = document.getElementById('inputGroupFile04');
            var filePath = fileInput.value;//lấy giá trị input theo id
            document.getElementById('image_hotel').innerHTML = filePath.slice(12);
        }
    </script>
@endsection