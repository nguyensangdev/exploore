@extends('../admin')
@section('content')
    <div class="content-page">
        <div class="content">
            <script>
                function fileValidation() {
                    var fileInput = document.getElementById('inputGroupFile04');
                    var filePath = fileInput.value;//lấy giá trị input theo id
                    document.getElementById('img_news').innerHTML = filePath.slice(12);
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
                            <h4 class="page-title">Update Tour</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="mb-3 header-title">Update Tour</h4>

                                <form class="form-horizontal" enctype="multipart/form-data"
                                      action="{{ url('news/updateNews') }}" method="post">
                                    @csrf()
                                    <input type="hidden" value="{{Auth::user()->id_account}}" name="id_account">
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Tour name</label>
                                        <div class="col-9">
                                            <input type="text" class="form-control" id="inputEmail3" name="title_news" value="{{$result->news_title}}">
                                            <input type="hidden" name="id_news" value="{{$result->id_news}}">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Images</label>
                                        <div class="col-9">
                                            <div class="input-group mb-2">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile04"
                                                           name="image_news" onchange="return fileValidation()">
                                                    <label id="img_news" class="custom-file-label" for="inputGroupFile04">Choose
                                                        file</label>
                                                    <input type="hidden" name="img" value="{{$result->news_img}}">
                                                </div>
                                            </div>
                                            <img src="{{asset('/public/upload/'.$result->news_img)}}" width="50px;">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Content</label>
                                        <div class="col-9">
                                            <input type="text" class="form-control" id="inputEmail3" name="content_news" value="{{$result->news_content}}">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputPassword3" class="col-3 col-form-label">Describes detail</label>
                                        <div class="col-9">
                                           <textarea type="text" id="describes_news" name="describes_news"

                                                     class="form-control">{{$result->news_describes}}</textarea>
                                            <script type="text/javascript">
                                                CKEDITOR.replace('describes_news');
                                            </script>
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
@endsection
