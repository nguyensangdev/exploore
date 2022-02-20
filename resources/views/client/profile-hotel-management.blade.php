@extends('index')

@section('meta')
<title>Profile hotel management - Exploore</title>
@endsection


@section('content')

<!-- Lấy danh sách khách sạn của id_account -->
@foreach($result as $list_hotel)
{{$list_hotel -> hotel_name}}
@endforeach


<div class="wrapper-content login-banner">
   <!-- MAIN CONTENT -->
 <div class="main-content container">
        <h4 class="mb-3 header-title">Thêm Hotel</h4>
        <form class="form-horizontal" enctype="multipart/form-data"
              action="/profile-hotel-management" method="post">
            @csrf()
            <input type="hidden" class="form-control" id="inputEmail3" name="id_account" value="{{$userId}}">
            <div class="form-group row mb-3">
                <label for="inputEmail3" class="col-3 col-form-label">Tên khách sạn</label>
                <div class="col-9">
                    <input type="text" class="form-control" id="inputEmail3" name="hotel_name">
                </div>
            </div>

            <div class="form-group row mb-3">
                <label for="inputEmail3" class="col-3 col-form-label">Price</label>
                <div class="col-9">
                    <input type="text" class="form-control" id="inputEmail3" name="hotel_price">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="inputEmail3" class="col-3 col-form-label">Địa điểm</label>
                <div class="col-9">
                    <select class="custom-select" name="location">
                        @foreach($province as $province)
                             <option value="{{$province->id_province}}">{{$province->name}}</option>
                            @endforeach
                     </select>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="inputEmail3" class="col-3 col-form-label">Hình ảnh</label>
                <div class="col-9">
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile04"
                                   name="hotel_img" onchange="return fileValidation()"/>
                            <label id="hotel_img" class="custom-file-label" for="inputGroupFile04"></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="inputEmail3" class="col-3 col-form-label">Địa chỉ khách sạn</label>
                <div class="col-9">
                    <input type="text" class="form-control" id="inputEmail3" name="hotel_address">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="inputPassword3" class="col-3 col-form-label">Thông tin khách sạn</label>
                <div class="col-9">
                   <textarea type="text" id="hotel_describes" name="hotel_describes"
                             placeholder="Text"
                             class="form-control"></textarea>
                    <script type="text/javascript">
                        CKEDITOR.replace('hotel_describes');
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
</div>

 <!-- SCROLL TO TOP BTN -->
 @include('client.component.scroll-to-top-btn')
        


<!-- FOOTER -->
@include('client.component.footer')
                        </div>       
@endsection
