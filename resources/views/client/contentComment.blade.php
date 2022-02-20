<div class="sub-title-section d-flex align-items-baseline">
    <div class="yellow-row mr-1"></div>
    <i class="fas fa-walking"></i>
</div>
<div class="title-section mt-1 mb-5">
    <div class="d-flex align-items-baseline">
        <h1 class="mr-5">{{$comment->count()}} Comment</h1>
        <h5 class="text-sub-primary mr-3">
            @for ($i = 0 ;$i < $rating; $i++)
                <i class="fas fa-star"></i>
            @endfor
                @for ($i = 0 ;$i < 5 - $rating; $i++)
                    <i class="far fa-star"></i>
                @endfor
        </h5>
        <h5>({{$ratings->count()}} Rates)</h5>
    </div>
</div>
@if(isset($comment))
@forelse($comment as $item)
    <div class="row border-bottom pb-3 mb-3">
        <div class="col-3 col-md-1">
        @if(isset($item->account))
            <img class="rounded-circle"
                src="{{asset('public/upload')}}/{{$item->account->avatar}}" width="70px"
                height="70px" alt="">
                
        @else
         <img class="rounded-circle"
                src="{{asset('public/upload/user.png')}}" width="70px"
                height="70px" alt="">
        @endif
        </div>
        <div class="col-9 col-md-11 pl-0 pl-md-5">
            <div class="info-comment d-flex justify-content-between">
                <div class="name-comment font-weight-bold">{{ isset($item->account->full_name) ? $item->account->full_name:$item->full_name}}</div>
                <div class="time-comment font-weight-bold"><i class="mr-1 fas fa-clock"></i>{{$item->date_comment}} </div>
            </div>
            <div class="content-comment mt-2 mb-2">
                {{$item->comment_content}}
            </div>
    <!--        <div class="d-flex align-items-baseline">-->
    <!--               <i style="color:#ffdd00" class="fas fa-star"></i>-->
    <!--                <i style="color:#ffdd00" class="far fa-star"></i>-->
     
    <!--</div>-->
            <div class="collapse w-100 mt-2 position-relative" id="collapseComment">
                <input type="text"
                    class="form-control form-control-sm rounded-0 input-comment-content">
                <div class="btn-comment-icon-box">
                    <button class="btn-none btn-comment-icon ml-2"><i
                            class="far fa-paper-plane"></i></button>
                    <button class="btn-none btn-comment-icon ml-2"
                        onclick="$('#collapseComment').collapse('hide')"><i
                            class="far fa-times-circle"></i></button>
                </div>
            </div>
        </div>
    </div>
@empty
<h5>No Comment</h5>
@endforelse
    @endif

