<?php
    use App\Http\Controllers\ProductController;
    use Illuminate\Support\Facades\Session;
    $total=0;
    if(Session::has('userSession'))
    {
        $total=ProductController::cartItem();
    }

?>

@extends('layouts.master')

@section('pageTitle', 'Task | Products')

@section('content')

<div id="navSection">
    @include('layouts.header')
</div>
<div class="swiper-container mySwiper">
    <div class="swiper-wrapper">
    @foreach($products as $items)
        <div class="swiper-slide" style="background-color:{{$items['airbag_color']}};">
            <form action="/cart" method="GET" >
                @csrf
                    <input type="hidden" name="product_id" value="{{$items['id']}}">
                    <button class="container mr-auto mt-2 cart_icon" style="background-color:{{$items['airbag_color']}};border:0;"><i class="fa fa-shopping-cart round" aria-hidden="true"><sup> {{$total}}</sup></i></button>
            </form>
            <div class="left-product" id="left-product">
                <img src="{{$items['product_image']}}"  alt="Product_Image">
            </div>
            <div class="right-product" id="right-product">
                <h1>{{$items['product_tittle']}}</h1>
                <p>{{$items['Product_description']}}</p>
                <p id="psize_{{$items['id']}}" style="display:none;">{{$items['Product_size']}}</p>
                <p id="id" style="display:none;">{{$items['id']}}</p>
                <div class="d-flex size">
                    <p id="psizeO_{{$items['id']}}" class="size1 round mr-3"></p>
                    <p id="psizeT_{{$items['id']}}" class="size2 round mr-3"></p>
                    <p id="psizeTh_{{$items['id']}}" class="size3 round mr-3"></p>
                    <p id="psizeF_{{$items['id']}}" class="size4 round mr-3"></p>
                </div>
                <script>
                    // debugger;
                    var id = document.getElementById('id').innerHTML;
                    var psize = document.getElementById("psize_"+id).innerHTML;
                    console.log(psize.split(","));
                    pAsize = psize.split(",");
                    document.getElementById("psizeO_"+id).innerHTML = (pAsize[0] == undefined)? "N/A" : pAsize[0] ;
                    document.getElementById("psizeT_"+id).innerHTML = (pAsize[1] == undefined)? "N/A" : pAsize[1] ;
                    document.getElementById("psizeTh_"+id).innerHTML = (pAsize[2] == undefined)? "N/A" : pAsize[2] ;
                    document.getElementById("psizeF_"+id).innerHTML = (pAsize[3] == undefined)? "N/A" : pAsize[3] ;
                    document.getElementById('id').innerHTML = parseInt(id) + 1;

                </script>
                <div class="custom" id="custom">
                    <div>
                        <label>BASE</label>
                        @foreach($products as $colours)
                        <div style="height:30px; width:30px; background-color:{{$colours['base_color']}}; border-radius:50%"></div>
                        @endforeach
                    </div>
                    <div>
                        <label>SWOOSH</label>
                        @foreach($products as $colours)
                        <div style="height:30px; width:30px; background-color:{{$colours['swoosh_color']}}; border-radius:50%"></div>
                        @endforeach
                    </div>
                    <div>
                        <label>LACES</label>
                        @foreach($products as $colours)
                        <div style="height:30px; width:30px; background-color:{{$colours['lace_color']}}; border-radius:50%"></div>
                        @endforeach
                    </div>
                    <div>
                        <label>AIRBAG</label>
                        @foreach($products as $colours)
                        <div style="height:30px; width:30px; background-color:{{$colours['airbag_color']}}; border-radius:50%"></div>
                        @endforeach
                    </div>
                </div>
                <div class="d-flex">
                    <button class="btn btn-danger mr-3" id="Customize">Customize</button>
                    <form action="/add" method="POST">
                    @csrf
                        <input type="hidden" name="product_id" value="{{$items['id']}}">
                        <button class="btn btn-primary">Add to Cart ( ${{$items['Product_price']}})</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>


<div id="footerSection">
    @include('layouts.footer')
</div>

@endsection

@section('script')
 <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script>
     $(".size1").click(function(){
        $(".size1").addClass("big-round");
        // $(".size1").removeClass("round");
        $(".size2").removeClass("big-round");
        $(".size3").removeClass("big-round");
        $(".size4").removeClass("big-round");
    });
    $(".size2").click(function(){
        $(".size2").addClass("big-round");
        // $(".size2").removeClass("round");
        $(".size1").removeClass("big-round");
        $(".size3").removeClass("big-round");
        $(".size4").removeClass("big-round");
    });
    $(".size3").click(function(){
        $(".size3").addClass("big-round");
        // $(".size3").removeClass("round");
        $(".size1").removeClass("big-round");
        $(".size2").removeClass("big-round");
        $(".size4").removeClass("big-round");
    });
    $(".size4").click(function(){
        $(".size4").addClass("big-round");
        // $(".size4").removeClass("round");
        $(".size1").removeClass("big-round");
        $(".size2").removeClass("big-round");
        $(".size3").removeClass("big-round");
    });

    $("#Customize").click(function(){
        $(".right-product").css("display","none");
        $("#custom").removeClass("custom");
        $("#custom").css("display","block");
    });
 </script>
 <script src="{{ URL::asset('js/index.js') }}"></script>
@endsection



