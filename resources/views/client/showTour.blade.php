<script>
    $(document).ready(function(){
        $('.pagination a').on('click', function(event){
            console.log('go here');
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            <?php
                if (isset($action) && $action == "filter"){ ?>
                var action =   "<?php echo $action ?>";
                var priceMax = "<?php echo $priceMax ?>";
                var rating = "<?php echo $rating ?>";
                var priceMin = "<?php echo $priceMin ?>";
                console.log('go');
                $.get('/tour-list/listTourFilter?page='+page,{action:action,priceMin:priceMin,priceMax:priceMax,rating:rating},function (data) {
                    $('#tour-list').html(data);
                });


                <?php } elseif ( isset($action) && $action =='search'){  ?>
                    var action =  "<?php echo $action ?>";
                    var inputDestination = "<?php echo $inputDestination ?>";
            $.get('/tour-list/listTourFilter?page'+page,{action:action,inputDestination:inputDestination},function (data) {
                  $('#tour-list').html(data);
              });

                <?php }  else { ?>
            var page = $(this).attr('href').split('page=')[1];
            console.log('go there');
            $.get('/tour-list/listTourFilter?page='+page,function (data) {
                $('#tour-list').html(data);
            });
            <?php }
                ?>

        });
    });
</script>

<div class="row pt-0 w-100">

    @forelse($listTour as $listTours)
        <div  class="col-12 col-md-6 mb-3 mb-md-5">
            <div class="card-box pb-3">
                <div class="card-img position-relative">
                    <img src="{{asset('public/upload')}}/{{$listTours->tour_img}}" width="100%"
                         alt="">
                         <a href="/tour-list/tour-detail/{{$listTours->id_tour}}">
                                        <h5>{{$listTours->tour_name}}</h5>
                                    </a>
                </div>
                <!-- <div class="card-interactive d-flex">
                    <div class="flex-fill text-center pt-3 pb-3">
                        <i class="fas fa-eye mr-2"></i> 123</div>
                    <div class="flex-fill text-center pt-3 pb-3">
                        <i class="fas fa-heart mr-2"></i> 456</div>
                    <div class="flex-fill text-center pt-3 pb-3">
                        <i class="fas fa-comment mr-2"></i> 789</div>
                </div> -->
                <div class="card-content text-center">
                    <div class="main-info mt-3">
                        <span class="mr-2" style="font-size: 32px; color: #fd0; font-weight: bold;"><sup>$</sup> {{$listTours->tour_price}}</span> {{$listTours->duration_tour}} days
                        {{$listTours->duration_tour - 1}}  nights
                    </div>
                    <div class="mr-5 ml-5 mt-3 text-left">{!! (strlen($listTours->tour_description) > 100 ? substr($listTours->tour_description, 0, 100) : $listTours->tour_description) !!}</div>
                    <form action="/payment" method="post">
                        @csrf
                        <div class="card-group-btn">
                            <input type="hidden" value='{{$listTours->id_tour}}' name="id_tour">
                            <button  type="submit" class="btn-sub-secondary">Book now</button>
                            </form>

                   <a  href="/tour-list/tour-detail/{{$listTours->id_tour}}">
                   <button type="button" class="btn-sub-secondary"> View Tour</button>
                  </a>      
                 </div>
                </div>
            </div>
        </div>
        @empty
            Nodata
    @endforelse
</div>
<div class="row">
    {!! $listTour->links() !!}
</div>



<!-- For desktop and tablet -->
<!-- <div
    class="pagination-container d-none d-md-flex w-100 justify-content-center align-items-center mt-3">
    <button class="pagination-arrow mr-1 ml-1"><i class="fas fa-chevron-left"></i></button>
    <button class="pagination-number mr-1 ml-1 active">01</button>
    <button class="pagination-number mr-1 ml-1">02</button>
    <button class="pagination-number mr-1 ml-1">03</button>
    <button class="pagination-number mr-1 ml-1">...</button>
    <button class="pagination-arrow mr-1 ml-1"><i class="fas fa-chevron-right"></i></button>
</div> -->
