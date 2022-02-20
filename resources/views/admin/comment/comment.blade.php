
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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                    <li class="breadcrumb-item active">Foo</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Foo Tables</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->


                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <h4 class="header-title">Danh sách bình luận</h4>
                            <div class="row">
                                <div class="col-md-8"></div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input id="demo-input-search2" type="text" placeholder="Search" class="form-control" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <table id="demo-foo-addrow" class="table table-centered table-striped table-bordered mb-0 toggle-circle" data-page-size="7">
                                <thead>
                                <tr>
                                    <th class="min-width">Stt</th>
                                    <th data-sort-initial="true" data-toggle="true">Tên</th>
                                    <th>Email</th>
                                    <th>Nội dung</th>
                                    <th>Trạng thái</th>
                                    <th>Choose</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($result as $item)
                                    <tr>
                                        <td>{{$loop->index+1}}</td>
                                        <td>{{$item->full_name}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{!!$item->comment_content!!}</td>
                                        @if($item->status ==1)
                                            <td><span class="badge bg-soft-success text-success">Đã duyệt</span></td>
                                        @else
                                            <td><span class="badge bg-soft-danger text-danger">Đang ẩn</span></td>
                                        @endif
                                        <td class="text-center">
                                            <a href="/comment/delete/{{$item->id_comment}}"><button class="demo-delete-row btn btn-danger btn-xs btn-icon"><i class="fe-trash"></i></button></a>                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr class="active">
                                    <td colspan="6">
                                        <div class="text-right">
                                            <ul class="pagination pagination-split justify-content-end footable-pagination m-t-10"></ul>
                                        </div>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </div> <!-- end card-box -->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->


            </div> <!-- container -->

        </div> <!-- content -->



@endsection
