@extends('../admin')
@section('content')
    <div class="content-page">
        <div class="content">
            <script>
                function fileValidation() {
                    var fileInput = document.getElementById('inputGroupFile04');
                    var filePath = fileInput.value;//lấy giá trị input theo id
                    document.getElementById('tour_day_img').innerHTML = filePath.slice(12);
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
                                      action="{{ url('tourDay/updateTourDay') }}" method="post">
                                    @csrf()
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Tên</label>
                                        <div class="col-9">
                                            <input type="text" class="form-control" id="inputEmail3" name="tour_day_name"
                                                   value="{{$result->tour_day_name}}">
                                            <input type="hidden" class="form-control" id="inputEmail3" name="id_tour_day"
                                                   value="{{$result->id_tour_day}}">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Hình ảnh</label>
                                        <div class="col-9">
                                            <div class="input-group mb-2">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile04"
                                                           name="tour_day_img" onchange="return fileValidation()">
                                                    <label id="tour_day_img" class="custom-file-label"
                                                           for="inputGroupFile04">Choose
                                                        file</label>
                                                    <input type="hidden" name="img" value="{{$result->tour_day_img}}">
                                                </div>
                                            </div>
                                            <img src="{{asset('/public/upload/'.$result->tour_day_img)}}" width="50px;">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Tour</label>
                                        <div class="col-9">
                                            <select class="custom-select" name="id_tour">
                                                @foreach($tour as $tour)
                                                    @if($tour->id_tour == $result->id_tour)
                                                        <option selected
                                                                value="{{$tour->id_tour}}">{{$tour->tour_name}}</option>
                                                    @else
                                                        <option
                                                            value="{{$tour->id_tour}}">{{$tour->tour_name}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputPassword3" class="col-3 col-form-label">Thông tin chi
                                            tiết</label>
                                        <div class="col-9">
                                           <textarea type="text" id="tour_description" name="tour_day_content"
                                                     placeholder="Text"
                                                     class="form-control">{{$result->tour_day_content}}</textarea>
                                            <script type="text/javascript">
                                                CKEDITOR.replace('tour_day_content');
                                            </script>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0 justify-content-end row">
                                        <div class="col-9">
                                            <button type="submit" class="btn btn-info waves-effect waves-light">Update
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
