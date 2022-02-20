@extends('../admin')
@section('content')
    <div class="content-page">
        <div class="content">
{{--            <script>--}}
{{--                function fileValidation() {--}}
{{--                    var fileInput = document.getElementById('inputGroupFile04');--}}
{{--                    var filePath = fileInput.value;//lấy giá trị input theo id--}}
{{--                    document.getElementById('img_news').innerHTML = filePath.slice(12);--}}
{{--                }--}}
{{--            </script>--}}
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

                                <h4 class="mb-3 header-title">Thêm Blog</h4>

                                <form class="form-horizontal" enctype="multipart/form-data"
                                      action="{{ url('destination/addDestination') }}" method="post">
                                    @csrf()
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Địa chỉ</label>
                                        <div class="col-9">
                                            <input type="text" class="form-control" id="inputEmail3" name="address">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Tour</label>
                                        <div class="col-9">
                                            <select class="custom-select" name="id_tour">
                                                @foreach($tour as $tour)
                                                <option value="{{$tour->id_tour}}">{{$tour->tour_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Hotel</label>
                                        <div class="col-9">
                                            <select class="custom-select" name="id_hotel">
                                                @foreach($hotel as $hotel)
                                                    <option value="{{$hotel->id_hotel}}">{{$hotel->hotel_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputPassword3" class="col-3 col-form-label">Giới thiệu</label>
                                        <div class="col-9">
                                           <textarea type="text" id="about" name="about"
                                                     placeholder="Text"
                                                     class="form-control"></textarea>
                                            <script type="text/javascript">
                                                CKEDITOR.replace('about');
                                            </script>
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
