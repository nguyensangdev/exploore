 @if(Auth::user()->id_account == $result->id_hotel)
<h4 class="mb-3 header-title">Sửa khách sạn</h4>

                                <form class="form-horizontal" enctype="multipart/form-data"
                                      action="{{ url('/update-profile-hotel') }}" method="post">
                                    @csrf()
                                    <input type="hidden" name="id_hotel" value="{{$result->id_hotel}}">
                                    <input type="hidden" name="id_account" value="{{$result->id_account}}">
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Tên khách sạn</label>
                                        <div class="col-9">
                                            <input type="text" class="form-control" id="inputEmail3" name="hotel_name" value=
                                            "{{$result->hotel_name}}">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Price</label>
                                        <div class="col-9">
                                            <input type="text" class="form-control" id="inputEmail3" name="hotel_price" value=
                                            "{{$result->hotel_price}}">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Địa điểm</label>
                                        <div class="col-9">
                                            <input type="text" class="form-control" id="inputEmail3" name="location" value=
                                            "{{$result->location}}">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Hình ảnh</label>
                                        <div class="col-9">
                                            <div class="input-group mb-2">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile04"
                                                           name="image_hotel" onchange="return fileValidation()">
                                                    <label id="img_hotel" class="custom-file-label"
                                                           for="inputGroupFile04">Choose
                                                        file</label>
                                                    <input type="hidden" name="img" value="{{$result->hotel_img}}">
                                                </div>
                                            </div>
                                            <img src="{{asset('/upload/'.$result->hotel_img)}}" width="50px;">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Địa chỉ khách sạn</label>
                                        <div class="col-9">
                                            <input type="text" class="form-control" id="inputEmail3" name="hotel_address" value=
                                            "{{$result->hotel_address}}">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputPassword3" class="col-3 col-form-label">Thông tin khách sạn</label>
                                        <div class="col-9">
                                           <textarea type="text" id="hotel_describes" name="hotel_describes"
                                                     placeholder="Text"
                                                     class="form-control">{{$result->hotel_describes}}</textarea>
                                            <script type="text/javascript">
                                                CKEDITOR.replace('hotel_describes');
                                            </script>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputEmail3" class="col-3 col-form-label">Status</label>
                                        <div class="col-9">
                                            <input type="text" class="form-control" id="inputEmail3" name="status" value=
                                            "{{$result->status}}">
                                        </div>
                                    </div>
                                    <div class="form-group mb-0 justify-content-end row">
                                        <div class="col-9">
                                            <button type="submit" class="btn btn-info waves-effect waves-light">Chỉnh sửa
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                @else
                                <script>window.location.assign('/profile-hotel-management')</script>
                                @endif