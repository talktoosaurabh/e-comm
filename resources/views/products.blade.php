@extends('layouts.master')

@section('pageTitle', 'Task | Products')

@section('content')

<div id="navSection">
    @include('layouts.header')
</div>

<div class="slider-container">
    @foreach($products as $items)
        <div class="slide">
            <div class="left-product">
                <img src="{{$items['product_image']}}"  alt="Product_Image">
            </div>
            <div class="right-product" style="float: right;width:50vw;">
                <h1>{{$items['product_tittle']}}</h1>
                <p>{{$items['Product_description']}}</p>
                <p>{{$items['Product_size']}}</p>
                <form>
                    <a href="#" class="btn btn-danger">Customize</a>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </form>
            </div>
        </div>
    @endforeach
</div>

<div id="footerSection">
    @include('layouts.footer')
</div>

@endsection



