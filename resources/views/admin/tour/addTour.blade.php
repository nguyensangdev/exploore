@extends('../admin')
@section('content')
    <div class="content-page">
        <div class="content">
            <script>
                function fileValidation() {
                    var fileInput = document.getElementById('inputGroupFile04');
                    var filePath = fileInput.value;//lấy giá trị input theo id
                    document.getElementById('img_tour').innerHTML = filePath.slice(12);
                }
            </script>
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

                                <h4 class="mb-3 header-title">Thêm Tour</h4>

                                <form class="form-horizontal" enctype="multipart/form-data"
                                      action="{{ url('tour/addTour') }}" method="post">
                                    @csrf()
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Tên tour</label>
                                        <div class="col-9">
                                            <input type="text" class="form-control" id="inputEmail3" name="name_tour">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Số lượng người trong 1 tour</label>
                                        <div class="col-9">
                                            <input type="text" class="form-control" id="inputEmail3" name="number_of_people">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Số ngày đi</label>
                                        <div class="col-9">
                                            <input type="text" class="form-control" id="inputEmail3" name="duration_tour">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Ngày đi</label>
                                        <div class="col-9">
                                            <input name="start_day" type="text" class="form-control" data-provide="datepicker" data-date-autoclose="true">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Giá tour</label>
                                        <div class="col-9">
                                            <input type="text" class="form-control" id="inputEmail3" name="tour_price">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Giảm giá</label>
                                        <div class="col-9">
                                            <input type="text" class="form-control" id="inputEmail3" name="sale">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Hình ảnh</label>
                                        <div class="col-9">
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" value="2" class="custom-file-input"
                                                           id="inputGroupFile04"
                                                           name="image_tour" multiple onchange="return fileValidation()"/>
                                                    <label id="img_tour" class="custom-file-label"
                                                           for="inputGroupFile04"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Thành phố</label>
                                        <div class="col-9">
                                            <select class="custom-select" name="id_province">
                                               @foreach($province as $province)
                                                    <option value="{{$province->id_province}}">{{$province->name}}</option>
                                                   @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputPassword3" class="col-3 col-form-label">Mô tả</label>
                                        <div class="col-9">
                                           <textarea type="text" id="tour_description" name="tour_description"
                                                     placeholder="Text"
                                                     class="form-control"></textarea>
                                            <script type="text/javascript">
                                                CKEDITOR.replace('tour_description');
                                            </script>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Trạng thái</label>
                                        <div class="col-9">
                                            <select class="custom-select" name="status">
                                                <option value="0">Hot</option>
                                                        <option value="1">New</option>
                                            </select>
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
@endsection
