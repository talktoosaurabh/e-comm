@extends('layouts.master')

@section('pageTitle', 'Task | Carts')

@section('content')

<div id="navSection">
    @include('layouts.header')
</div>

<div class="row">
    @foreach($products as $items)
        <div class="col-lg-3 col-sm-10 offset-1 mt-5">
            <div class="left-cart">
                <img src="{{$items->product_image}}"  alt="Product_Image">
            </div>
            <div class="right-cart mt-2">
                <h5>{{$items->product_tittle}}</h5>
                <p>{{$items->Product_description}}</p>
                <p>{{$items->Product_size}}</p>
                <form>
                    <a href="#" class="btn btn-danger">Customize</a>
                    <a href="/add" class="btn btn-primary">Buy Now ( ${{$items->Product_price}})</a>
                </form>
            </div>
        </div>
    @endforeach
</div>

<div id="footerSection">
    @include('layouts.footer')
</div>

@endsection



