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
                            <h4 class="page-title">Blog management</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->


                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <div class="mb-2">
                                <div class="row">
                                    <div class="col-12 text-sm-center form-inline">
                                        <div class="form-group mr-2">
                                            <a href="{{ url('news/addNews') }}">
                                                <button id="demo-btn-addrow" class="btn btn-primary"><i
                                                        class="mdi mdi-plus-circle mr-2"></i> Add new blog
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
                                    <th style="width:5%">ID</th>
                                    <th>Title</th>
                                    <th style="width:10%">Images</th>
                                    <th style="width:10%">Date</th>
                                    <th style="width:15%">Choose</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($result as $item)
                                    <tr>
                                        <td>{{$loop->index+1}}</td>
                                        <td>{{$item->news_title}}</td>
                                        <td>
                                            <img src="{{asset('/public/upload/'.$item->news_img)}}" width="50px;">
                                        </td>
                                        <td>{{$item->date_news}}</td>
                                        <td class="text-center">
                                            <a href="/news/delete/{{$item->id_news}}">
                                                <button class="demo-delete-row btn btn-danger btn-xs btn-icon"><i
                                                        class="fe-trash"></i></button>
                                            </a>
                                            <a href="/news/editNews/{{$item->id_news}}">
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
