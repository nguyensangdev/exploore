
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
                                        <h4 class="page-title">Romm management</h4>
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
                                                                <a href="{{ url('room/addRoom') }}/{{$result_idroom->id_hotel}}">
                                                                    <button class="btn btn-primary"><i class="mdi mdi-plus-circle mr-2"></i> Add new</button></a>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input id="demo-input-search2" type="text" placeholder="Search" class="form-control" autocomplete="off">
                                                                </div>
                                                            </div>
                                            </div>
                                        </div>

                                        <table id="demo-foo-addrow" class="table table-centered table-striped table-bordered mb-0 toggle-circle" data-page-size="7">
                                            <thead>
                                            <tr>
                                                <th data-sort-ignore="true" class="min-width">Room name</th>
                                                <th data-sort-ignore="true" class="min-width">Image</th>
                                                <th data-sort-initial="true" data-toggle="true">Suitable room</th>
                                                <th data-sort-initial="true" data-toggle="true">Size room</th>
                                                <th data-sort-initial="true" data-toggle="true">Bed room</th>
                                                <th data-sort-initial="true" data-toggle="true">Bathroom</th>
                                                <th data-sort-initial="true" data-toggle="true">Facilities</th>
                                                <th data-sort-initial="true" data-toggle="true">Smoking room</th>
                                                <th data-sort-initial="true" data-toggle="true">Parking room</th>
                                                <th data-sort-initial="true" data-toggle="true">Price room</th>
                                                <th data-sort-initial="true" data-toggle="true">Amount room</th>
                                                <th data-hide="phone, tablet">Choose</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($result_room as $result_room)
                                            <?php
                                            if($result_room->Smoking_room == 1){
                                                $smoking = 'No';
                                            }else {
                                                $smoking = 'Yes';
                                            }
                                            if($result_room->Parking_room == 1){
                                                $parking = 'Free';
                                            }else {
                                                $parking = 'No Free';
                                            }?>                     
                                            <tr>
                                                <td><a href="/hotel"> {{$result_room->name_room}}</a></td>
                                                <td><img src="{{ asset('public/client/img/hotel-view')}}/{{$result_room->room_img}}" width="100px"/></td>
                                                <td>{{$result_room->suitable_room}}</td>
                                                <td>{{$result_room->size_room}}</td>
                                                <td>{{$result_room->bed_room}}</td>
                                                <td>{{$result_room->bathroom_room}}</td>
                                                <td>{{$result_room->facilities_room}}</td>
                                                <td>{{$smoking}}</td>
                                                <td>{{$parking}}</td>
                                                <td>{{$result_room->price_room}}</td>
                                                <td>{{$result_room->amount_room}}</td>
                                                <td class="text-center">
                                                        <a href="/room/delete/{{$result_room->id_room}}"><button class="btn btn-danger btn-xs btn-icon"><i class="fe-trash"></i></button></a>
                                                        <a href="/room/editRoom/{{$result_room->id_room}}"><button class="btn btn-danger btn-xs btn-icon"><i class="fe-edit-1"></i></button></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                            <tfoot>
                                            <tr class="active">
                                                <td colspan="12">
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