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
                            <h4 class="page-title">Blog</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->


                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <h4 class="header-title">Blog</h4>
                            <p class="sub-header">
                                Add or remove rows from your FooTable.
                            </p>

                            <div class="mb-2">
                                <div class="row">
                                    <div class="col-12 text-sm-center form-inline">
                                        <div class="form-group mr-2">
                                            <a href="{{ url('destination/addDestination') }}">
                                                <button id="demo-btn-addrow" class="btn btn-primary"><i
                                                        class="mdi mdi-plus-circle mr-2"></i> Thêm blog
                                                </button>
                                            </a>
                                        </div>
                                        <div class="form-group">
                                            <input id="demo-input-search2" type="text" placeholder="Search"
                                                   class="form-control" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <table id="demo-foo-addrow"
                                   class="table table-centered table-striped table-bordered mb-0 toggle-circle"
                                   data-page-size="7">
                                <thead>
                                <tr>
                                    <th data-sort-ignore="true" class="min-width">Stt</th>
                                    <th data-sort-initial="true" data-toggle="true">Tour</th>
                                    <th>Hotel</th>
                                    <th data-hide="phone">Giới thiệu</th>
                                    <th data-hide="phone, tablet">Trạng thái</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($result as $item)
                                    <tr>
                                        <td>{{$loop->index+1}}</td>
                                        <td>{{$item->tour->tour_name}}</td>
                                        <td>{{$item->hotel->hotel_name}}</td>

                                        <td><?php
                                            $a = $item['about'];
                                            echo $a;
                                            ?></td>
                                        <td class="text-center">
                                            <a href="/destination/delete/{{$item->id_destination}}">
                                                <button class="demo-delete-row btn btn-danger btn-xs btn-icon"><i
                                                        class="fe-trash"></i></button>
                                            </a>
                                            <a href="/destination/editDestination/{{$item->id_destination}}">
                                                <button class="demo-delete-row btn btn-danger btn-xs btn-icon"><i
                                                        class="fe-edit-1"></i></button>
                                            </a>
                                        </td>
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
