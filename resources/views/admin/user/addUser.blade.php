@extends('../admin')
@section('content')
    <div class="content-page">
        <div class="content">
            <!-- <script>
                function fileValidation() {
                    var fileInput = document.getElementById('inputGroupFile04');
                    var filePath = fileInput.value;//lấy giá trị input theo id
                    document.getElementById('img_tour').innerHTML = filePath.slice(12);
                }
            </script> -->
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

                                <h4 class="mb-3 header-title">Thêm User</h4>

                                <form class="form-horizontal" enctype="multipart/form-data"
                                      action="{{ url('user/addUser') }}" method="post">
                                    @csrf()
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Name</label>
                                        <div class="col-9">
                                            <input type="text" class="form-control" id="inputEmail3" name="fullname">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Email</label>
                                        <div class="col-9">
                                            <input type="text" class="form-control" id="inputEmail3" name="email">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Password</label>
                                        <div class="col-9">
                                            <input type="text" class="form-control" id="inputEmail3" name="password">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Phone</label>
                                        <div class="col-9">
                                            <input type="text" class="form-control" id="inputEmail3" name="phone">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Address</label>
                                        <div class="col-9">
                                            <input type="text" class="form-control" id="inputEmail3" name="address">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-3">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Function
                                </label>
                                <div class="col-md-2 col-sm-2 col-xs-12">
                                    <select name="permissions" class="form-control">
                                        <option value="1">Quản trị viên</option>
                                        <option value="2">User</option>
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
