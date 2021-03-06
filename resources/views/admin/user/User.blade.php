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

                                        <div class="mb-2">
                                            <div class="row">
                                                <div class="col-12 text-sm-center form-inline">
                                                    <div class="form-group w-100">
                                                        <input id="demo-input-search2" type="text" placeholder="Search" class="form-control w-100" autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <table id="demo-foo-addrow" class="table table-centered table-striped table-bordered mb-0 toggle-circle" data-page-size="7">
                                            <thead>
                                            <tr>
                                                <th data-sort-ignore="true" class="min-width">STT</th>
                                                <th data-sort-initial="true" data-toggle="true">Email</th>
                                                <th>Fullname</th>
                                                <th data-hide="phone">Address</th>
                                                <th data-hide="phone, tablet">Phone</th>
                                                <th data-hide="phone, tablet">Function</th>
                                                <th data-hide="phone, tablet">Tr???ng th??i</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($result as $item)
                                            <tr>
                                                <td>{{$loop->index+1}}</td>
                                                <td>{{$item->email}}</td>
                                                <td>{{$item->full_name}}</td>
                                                <td>{{$item->phone}}</td>
                                                <td>{{$item->address}}</td>
                                                <td>  
                                                @if( ($item->permissions) == 1)
                                                        Qu???n tr??? vi??n
                                                        @else
                                                        User
                                                        @endif
                                                   </td>
                                                <td class="text-center">
                                                    <a href="/user/delete/{{$item->id_account}}"><button class="btn btn-danger btn-xs btn-icon"><i class="fe-trash"></i></button></a>
                                                    <a href="/user/editUser/{{$item->id_account}}"><button class="btn btn-danger btn-xs btn-icon"><i class="fe-edit-1"></i></button></a>
                                                </td>
                                            </tr>
                                          @endforeach
                                            </tbody>
                                            <tfoot>
                                            <tr class="active">
                                                <td colspan="7">
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
