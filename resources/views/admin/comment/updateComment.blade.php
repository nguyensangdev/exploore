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

                                <h4 class="mb-3 header-title">Sửa bình luận</h4>

                                <form class="form-horizontal" enctype="multipart/form-data"
                                      action="{{ url('comment/updateComment') }}" method="post">
                                    @csrf()
                                    <input type="hidden" name="id_comment" value="{{$result->id_comment}}">
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">ID User</label>
                                        <div class="col-9">
                                            <input type="text" class="form-control" id="inputEmail3" name="id_account" value=
                                            "{{$result->id_account}}">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Name</label>
                                        <div class="col-9">
                                            <input type="text" class="form-control" id="inputEmail3" name="full_name" value=
                                            "{{$result->full_name}}">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Email</label>
                                        <div class="col-9">
                                            <input type="text" class="form-control" id="inputEmail3" name="email" value=
                                            "{{$result->email}}">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputPassword3" class="col-3 col-form-label">Content</label>
                                        <div class="col-9">
                                           <textarea type="text" id="hotel_describes" name="comment_content"
                                                     placeholder="Text"
                                                     class="form-control">{{$result->comment_content}}</textarea>
                                            <script type="text/javascript">
                                                CKEDITOR.replace('comment_content');
                                            </script>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Status</label>
                                        <div class="col-9">
                                            <div class="radio radio-info form-check-inline">
                                                <input type="radio" id="inlineRadio1" value="0" name="status">
                                                <label for="inlineRadio1"> Hide comment </label>
                                            </div>
                                            <div class="radio form-check-inline">
                                                <input type="radio" id="inlineRadio2" value="1" name="status" checked="">
                                                <label for="inlineRadio2"> Show comment </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0 justify-content-end row">
                                        <div class="col-9">
                                            <button type="submit" class="btn btn-info waves-effect waves-light">Chỉnh sửa
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
