@extends('index')

@section('meta')
<title>Exploore | Payment</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('public/client/css/hotel.css')}}">
<link rel="stylesheet" href="{{asset('public/client/css/payment.css')}}">
<link rel="stylesheet" href="{{asset('public/client/css/responsive/hotel-responsive.css')}}">
@endsection

@section('content')
<div class="wrapper-content hotel-banner">

    <!-- HEADER -->
    <header class="d-none d-lg-block"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <div class="block-header">

            <!-- TOP BAR HEADER -->
            @include('client.component.top-bar-header')

            <!-- MAIN HEADER -->
            @include('client.component.page-main-header')

        </div>
    </header>

    <!-- WRAPPER-BODY -->
    <div class="wrapper-body">

        <!-- MAIN CONTENT -->
        <div class="main-content">
            <section class="breadcrumb-area">
                <div class="container">
                    <ul class="breadcrumb-box d-flex align-items-end">
                        <li class="breadcrumb-link">
                            <a class="breadcrumb-home" href="/">Home<i
                                    class="fas fa-long-arrow-alt-right align-self-end ml-3 mr-3"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-link active"><a href="/#">Payment</a></li>
                    </ul>
                    <div class="breadcrumb-title">Payment</div>
                </div>
            </section>

            <section>
            <form action="/actionPayment" method='post'>
            @csrf
                <div class="container mt-5 mb-5">
                    <div class="row">
                        <div class="col-12 col-md-8">
                            <div class="payment-box p-3 mt-5 mb-4">
                                <h4>Information</h4>
                                <div class="row mt-3">
                                <input type="hidden" value="{{$id}}" name="id_tour">
                                @if($user)
                                    <div class="col-12 col-md-6">
                                        <label class="font-weight-bold" for="">Fullname</label>
                                        <input type="text" required name="full_name" value="{{$user->full_name }}" class="form-control">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="font-weight-bold" for="">Email</label>
                                        <input type="text" required name="email" value="{{$user->email}}" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 col-md-6">
                                        <label class="font-weight-bold" for="">Phone number</label>
                                        <input type="text" required name="phone" value="{{$user->phone}}" class="form-control">
                                    </div>
                                   @else
                                   <div class="col-12 col-md-6">
                                        <label class="font-weight-bold" for="">Fullname</label>
                                        <input type="text" required name="full_name" value="" class="form-control">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="font-weight-bold" for="">Email</label>
                                        <input type="text" required name="email" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 col-md-6">
                                        <label class="font-weight-bold" for="">Phone number</label>
                                        <input type="text" required name="phone" value="" class="form-control">
                                    </div>
                                    @endif
                               
                                     @if($hotel) 
                                        <div class="col-12 col-md-3">
                                        <label class="font-weight-bold" for="">Starting day</label>
                                        <input type="date" required name="start_day" id="start_day" class="form-control">
                                    </div>

                                    <div class="col-12 col-md-3">
                                        <label class="font-weight-bold" for="">End day</label>
                                        <input type="date" required name="end_day" id="end_day" class="form-control">
                                    </div>
                                      @else
                                      <div class="col-12 col-md-6">
                                        <label class="font-weight-bold" for="">Number of people</label>
                                        <input type="number" min="1" max="20" value="1" required id="amount" name="amount" class="form-control">
                                    </div>
                                    @endif
                                  
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 col-md-12">
                                        <label class="font-weight-bold" for="">Note</label>
                                        <textarea class="form-control" required name="note" id="" cols="30" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="payment-box p-3 mb-4">
                                <h4>Payment method</h4>
                                <div class="row">
                                    <div class="col-12 col-md-6 d-flex align-items-center mb-3">
                                        <label for="" class="radio-custom-btn mr-4">
                                            <input type="radio" checked  value="1" name="payment-method" class="form-check">
                                            <span class="radio-checkmark"></span>
                                        </label>
                                        <div style="margin-bottom: -12px;">
                                            <img class="mr-1" src="{{asset('public/client/img/payment/cash.png')}}"
                                                width="20px" alt="">
                                            <label for="">Offline payment</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 d-flex align-items-center mb-3">
                                        <label for="" class="radio-custom-btn mr-4">
                                            <input type="radio" value="2" name="payment-method" class="form-check">
                                            <span class="radio-checkmark"></span>
                                        </label>
                                        <div style="margin-bottom: -12px;">
                                            <img class="mr-1" src="{{asset('public/client/img/payment/atm.png')}}"
                                                width="20px" alt="">
                                            <label for="">Domestic atm card</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 d-flex align-items-center mb-3">
                                        <label for="" class="radio-custom-btn mr-4">
                                            <input type="radio" value="3" name="payment-method" class="form-check">
                                            <span class="radio-checkmark"></span>
                                        </label>
                                        <div style="margin-bottom: -12px;">
                                            <img class="mr-1"  src="{{asset('public/client/img/payment/zalo.png')}}"
                                                width="20px" alt="">
                                            <label for="">Zalo Pay</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 d-flex align-items-center mb-3">
                                        <label for="" class="radio-custom-btn mr-4">
                                            <input type="radio" value="4" name="payment-method" class="form-check">
                                            <span class="radio-checkmark"></span>
                                        </label>
                                        <div style="margin-bottom: -12px;">
                                            <img class="mr-1" src="{{asset('public/client/img/payment/visa.png')}}"
                                                width="20px" alt="">
                                            <label for="">Visa/Master/JCB</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 d-flex align-items-center mb-3">
                                        <label for="" class="radio-custom-btn mr-4">
                                            <input type="radio" value="5" name="payment-method" class="form-check">
                                            <span class="radio-checkmark"></span>
                                        </label>
                                        <div style="margin-bottom: -12px;">
                                            <img class="mr-1" src="{{asset('public/client/img/payment/momo.png')}}"
                                                width="20px" alt="">
                                            <label for="">Momo</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 d-flex align-items-center mb-3">
                                        <label for="" class="radio-custom-btn mr-4">
                                            <input type="radio" value="6" name="payment-method" class="form-check">
                                            <span class="radio-checkmark"></span>
                                        </label>
                                        <div style="margin-bottom: -12px;">
                                            <img class="mr-1" src="{{asset('public/client/img/payment/airpay.png')}}"
                                                width="20px" alt="">
                                            <label for="">Air pay</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                      

                            <div class="payment-box p-3 mb-4">
                                <h4>FAQ</h4>
                                <div class="accordion" id="accordionExample">
                                    <div class="card rounded-0">
                                        <div class="card-header p-0" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn w-100 text-left" type="button" data-toggle="collapse"
                                                    data-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    <i class="fas fa-plus mr-3"></i> Traveling with children
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                                skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                                Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                                proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                                                beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                                haven't heard of them accusamus labore sustainable VHS.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card rounded-0">
                                        <div class="card-header p-0" id="headingTwo">
                                            <h2 class="mb-0">
                                                <button class="btn w-100 text-left" type="button" data-toggle="collapse"
                                                    data-target="#collapseTwo" aria-expanded="false"
                                                    aria-controls="collapseTwo">
                                                    <i class="fas fa-plus mr-3"></i> Traveling in a group
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                                skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                                Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                                proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                                                beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                                haven't heard of them accusamus labore sustainable VHS.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card rounded-0">
                                        <div class="card-header p-0" id="headingThree">
                                            <h2 class="mb-0">
                                                <button class="btn w-100 text-left" type="button" data-toggle="collapse"
                                                    data-target="#collapseThree" aria-expanded="false"
                                                    aria-controls="collapseThree">
                                                    <i class="fas fa-plus mr-3"></i> Traveling solo
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                                skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                                Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                                proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                                                beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                                haven't heard of them accusamus labore sustainable VHS.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card rounded-0">
                                        <div class="card-header p-0" id="headingFour">
                                            <h2 class="mb-0">
                                                <button class="btn w-100 text-left" type="button" data-toggle="collapse"
                                                    data-target="#collapseFour" aria-expanded="false"
                                                    aria-controls="collapseFour">
                                                    <i class="fas fa-plus mr-3"></i> Food, drink and dietary
                                                    requirements
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                                skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                                Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                                proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                                                beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                                haven't heard of them accusamus labore sustainable VHS.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card rounded-0">
                                        <div class="card-header p-0" id="headingFive">
                                            <h2 class="mb-0">
                                                <button class="btn w-100 text-left" type="button" data-toggle="collapse"
                                                    data-target="#collapseFive" aria-expanded="false"
                                                    aria-controls="collapseFive">
                                                    <i class="fas fa-plus mr-3"></i> Safety and medical information
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                                skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                                Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                                proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                                                beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                                haven't heard of them accusamus labore sustainable VHS.
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-5">
                            <div class="payment-product  p-3">
                                @if($tour)
                                <div class="payment-img mb-3">
                                    <img src="{{asset('public/upload/'.$tour->tour_img)}}" alt="">
                                </div>
                                <div class="payment-name mb-3">{{$tour->tour_name}}</div>
                                <div class="bg-secondary w-25 mb-3" style="height: 1px;"></div>
                                <ul class="tour-days pl-3">
                                    <li>
                                        Price:
                                        <span class="ml-3" <sup>$</sup>
                                            {{$tour->tour_price}}
                                        </span>
                                    </li>
                                    <li>
                                        Duration:
                                        <span class="ml-3" <sup>$</sup>
                                            2 days
                                        </span>
                                    </li>
                                    <li>
                                        Start day:
                                        <span class="ml-3">
                                        {{$tour->start_day}}
                                        </span>
                                    </li>
                                    <li>
                                        End day:
                                        <span class="ml-3">
                                        {{$tour->end_day}}
                                        </span>
                                    </li>
                                </ul>
                                <div class="bg-secondary w-25 mb-3" style="height: 1px;"></div>
                                <div class="total-bill">Total : <sup>$</sup>{{$tour->tour_price}}</div>
                                <input type="hidden" id="total" name="total">
                                @else
                                <div class="payment-img mb-3">
                                    <img src="{{asset('public/upload/'.$hotel->hotel_img)}}" alt="">
                                </div>
                                <div class="payment-name mb-3">{{$hotel->hotel_name}}</div>
                                <div class="bg-secondary w-25 mb-3" style="height: 1px;"></div>
                                <ul class="tour-days pl-3">
                                <li style="font-weight:600; font-size:18px">
                                        Type:
                                        <span class="ml-3">
                                        {{$room->name_room}}                                        
                                    </span>
                                    </li>
                                    <li>
                                        Price:
                                        <span class="ml-3" <sup>$</sup>
                                            {{$room->price_room}}
                                        </span>
                                    </li>
                                    <li>
                                        Day number:
                                        <span class="ml-3 day_number">
                                           
                                        </span>
                                    </li>
                                    <li>
                                        Check in:
                                        <span class="ml-3 start_day">
                                     
                                        </span>
                                    </li>
                                    <li>
                                        Check out:
                                        <span class="ml-3 end_day">
                                        
                                        </span>
                                    </li>
                                </ul>
                                <div class="bg-secondary w-25 mb-3" style="height: 1px;"></div>
                                <div class="total-bill">Total : <sup>$</sup>{{$room->price_room}}</div>
                                <input type="hidden" id="total" name="total">
                                <input type="hidden" class="start_day" name="start_day">
                                <input type="hidden" class="end_day" name="end_day">
                                <input type="hidden" class="day_number" name="day_number">
                                <input type="hidden" value="{{$room->id_room}}" name="id_room">
                                @endif
                                <button type="submit" class="btn-sub-secondary rounded-0 mt-3">Payment</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

<script>
$(function(){
    <?php if(isset($tour)) { ?>
  $('#amount').change(function(){
      var amount = $('#amount').val();
      if(amount == 0){
          amount = 1;
          $('#amount').val(1);
      }
      var price = '<?php echo $tour->tour_price ?>';
      var total = (amount * parseInt(price)); 
      if(total){
        $('.total-bill').html('Total: <sup>$</sup>' + total);
      $('#total').val(total);
      }
  
  })
<?php } else { ?>

$('input[type="date"]').change(function(){
    var startDay = $("#start_day").val();
    var endDay = $("#end_day").val();  
    var numberDay = formatDate(startDay,endDay);
    var price = '<?php echo $room->price_room ?>';

    if(startDay && endDay){
      $('.start_day').text(startDay);
      $('.start_day').val(startDay);
      $('.end_day').text(endDay);
      $('.end_day').val(endDay);
    } 
    if(numberDay){
        $('.day_number').text(numberDay + ' days');
        $('.day_number').val(numberDay);
    } 

    var total = (numberDay * parseInt(price)); 
    if(total){
        $('.total-bill').html('Total: <sup>$</sup>' + total);
      $('#total').val(total);
    }
     
})

 
function formatDate(startDay,endDay){
    const oneDay = 24 * 60 * 60 * 1000;
const firstDate = new Date(startDay);
const secondDate = new Date(endDay);

const diffDays = Math.round(Math.abs((firstDate - secondDate) / oneDay));
return diffDays;
}
<?php } ?>



})
 




</script>
        <!-- SCROLL TO TOP BTN -->
        @include('client.component.scroll-to-top-btn')

    </div>

    <!-- FOOTER -->
    @include('client.component.footer')

</div>
@endsection