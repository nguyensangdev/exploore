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
                            <h4 class="page-title">Thêm mới</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="mb-3 header-title">Thêm Phòng</h4>
                                <form class="form-horizontal" enctype="multipart/form-data"
                                      action="{{ url('room/addRoom') }}" method="post">
                                    @csrf()
                            <input type="hidden" class="form-control" id="inputEmail3" name="id_hotel" value="{{$result->id_hotel}}">
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Name room</label>
                                        <div class="col-9">
                                            <input type="text" class="form-control" id="inputEmail3" name="name_room">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Suitable room</label>
                                        <div class="col-9">
                                            <input type="text" class="form-control" id="inputEmail3" name="suitable_room">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Bed room</label>
                                        <div class="col-9">
                                            <input type="text" class="form-control" id="inputEmail3" name="bed_room">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Size room</label>
                                        <div class="col-9">
                                            <input type="text" class="form-control" id="inputEmail3" name="size_room">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Bathroom</label>
                                        <div class="col-9">
                                            <input type="text" class="form-control" id="inputEmail3" name="bathroom_room">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Facilities</label>
                                        <div class="col-9">
                                            <input type="text" class="form-control" id="inputEmail3" name="facilities_room">
                                        </div>
                                    </div>
                                    
                                    {{-- <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Parking room</label>
                                        <div class="col-9"> --}}
                                            <input type="hidden" class="form-control" id="inputEmail3" name="Parking_room" value="1">
                                        {{-- </div>
                                    </div> --}}
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Price room</label>
                                        <div class="col-9">
                                            <input type="text" class="form-control" id="inputEmail3" name="price_room">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Amount room</label>
                                        <div class="col-9">
                                            <input type="text" class="form-control" id="inputEmail3" name="amount_room">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Images</label>
                                        <div class="col-9">
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile04"
                                                           name="room_img" onchange="return fileValidation()"/>
                                                    <label id="room_img" class="custom-file-label" for="inputGroupFile04"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Smoking room</label>
                                        <div class="col-9">
                                            <div class="radio radio-info form-check-inline">
                                                <input type="radio" id="inlineRadio1" value="0" name="Smoking_room">
                                                <label for="inlineRadio1"> Yes </label>
                                            </div>
                                            <div class="radio form-check-inline">
                                                <input type="radio" id="inlineRadio2" value="1" name="Smoking_room" checked="">
                                                <label for="inlineRadio2"> No </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0 justify-content-end row">
                                        <div class="col-9">
                                            <button type="submit" class="btn btn-info waves-effect waves-light">ADD
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
@endsection