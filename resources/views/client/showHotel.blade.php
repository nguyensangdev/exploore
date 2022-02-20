<script>
        $(document).ready(function(){
            $('.pagination a').on('click', function(event){
                event.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                <?php
                    if (isset($action) && $action == "filter"){ ?>
                    var action =   "<?php echo $action ?>";
                    var priceMax = "<?php echo $priceMax ?>";
                    var rating = "<?php echo $rating ?>";
                    var priceMin = "<?php echo $priceMin ?>";
                    console.log('go');
                    $.get('/hotel-list/listHotelFilter?page='+page,{action:action,priceMin:priceMin,priceMax:priceMax,rating:rating},function (data) {
                        $('#hotel-list').html(data);
                    });
    
    
                    <?php } elseif ( isset($action) && $action =='search'){  ?>
                        var action =  "<?php echo $action ?>";
                        var inputDestination = "<?php echo $inputDestination ?>";
                $.get('/hotel-list/listHotelFilter?page'+page,{action:action,inputDestination:inputDestination},function (data) {
                      $('#hotel-list').html(data);
                  });
    
                    <?php }  else { ?>
                var page = $(this).attr('href').split('page=')[1];
                console.log('go there');
                $.get('/hotel-list/listHotelFilter?page='+page,function (data) {
                    $('#hotel-list').html(data);
                });
                <?php }
                    ?>
    
            });
        });
    </script>

@forelse($listHotel as $listHotels)

<div class="row card-box m-1 mb-4">
    <div class="col-12 col-md-6 p-0">
        <div class="card-img position-relative">
            <img src="{{asset('public/upload/'.$listHotels->hotel_img)}}" width="100%" height="auto" alt="">
            <span>30%</span>
            <a href="/hotel-list/hotel-detail/{{$listHotels->id_hotel}}">
                <h5>{{$listHotels->hotel_name}}</h5>
            </a>
            <ul class="d-flex">
                <li class="mr-1"><i class="fas fa-star"></i></li>
                <li class="mr-1"><i class="fas fa-star"></i></li>
                <li class="mr-1"><i class="fas fa-star"></i></li>
                <li class="mr-1"><i class="fas fa-star"></i></li>
                <li class="mr-1"><i class="fas fa-star"></i></li>
            </ul>
        </div>
    </div>
    <div class="col-10 col-md-5 d-flex flex-column">
        <div class="card-main-info d-flex align-items-center justify-content-center mt-5 mt-lg-3">
            <div class="price mr-2">
                <sup class="mr-1"><sup>$</sup></sup>{{$listHotels->hotel_price}}
            </div>
            <div class="per ml-2">
                For person <br> per night
            </div>
        </div>
        <div class="d-flex justify-content-center p-1 p-md-3 mt-2 mt-md-3">
            <div class="card-description">
                {!! (strlen($listHotels->hotel_describes) > 100 ? substr($listHotels->hotel_describes, 0, 100) : $listHotels->hotel_describes) !!}
            </div>
        </div>
        <div class="d-flex justify-content-center mt-2 mt-md-3 mb-5 mb-lg-0">
        <a href="/hotel-list/hotel-detail/{{$listHotels->id_hotel}}">
        <button class="btn-sub-secondary">Hotel Detail</button>
            </a>
        </div>
    </div>
    <!-- <div class="col-2 col-md-1 p-0 border-icon-seperate">
        <ul class="d-flex flex-column h-100">
            <a class="w-100 h-25 d-flex justify-content-center align-items-center" href="">
                <li>
                    <i class="fas fa-eye"></i>
                </li>
            </a>
            <a class="w-100 h-25 d-flex justify-content-center align-items-center" href="">
                <li>
                    <i class="fas fa-comment"></i>
                </li>
            </a>
            <a class="w-100 h-25 d-flex justify-content-center align-items-center" href="">
                <li>
                    <i class="fas fa-share-alt"></i>
                </li>
            </a>
            <a class="w-100 h-25 d-flex justify-content-center align-items-center" href="">
                <li>
                    <i class="fas fa-map-marker-alt"></i>
                </li>
            </a>
        </ul>
    </div> -->

</div>
@empty
No data
@endforelse

{!! $listHotel->links() !!}
<!-- For desktop and tablet -->
<div class="pagination-container d-none d-md-flex w-100 justify-content-center align-items-center mt-3">
    <button class="pagination-arrow mr-1 ml-1"><i class="fas fa-chevron-left"></i></button>
    <button class="pagination-number mr-1 ml-1 active">01</button>
    <button class="pagination-number mr-1 ml-1">02</button>
    <button class="pagination-number mr-1 ml-1">03</button>
    <button class="pagination-number mr-1 ml-1">...</button>
    <button class="pagination-arrow mr-1 ml-1"><i class="fas fa-chevron-right"></i></button>
</div>
<!---->