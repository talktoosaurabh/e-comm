@extends('layouts.master')

@section('pageTitle', 'Task | Carts')

@section('content')

<div id="navSection">
    @include('layouts.header')
</div>

<?php $i=0; $total_price=0 ?>
<div class="ml-5 mt-5">
   <table>
      <tr class="text-center">
       <th>SR NO.</th>
       <th>Tittle</th>
       <th>Image</th>
       <th>Price</th>
       <th>Action</th>
      <tr>
        @foreach($products as $items)
        
        <?php $i++; 
        if( ($items->cart_flag)==0)
        {
            $total_price=$total_price + (int) $items->Product_price;
        }
        ?>
        <tr>
            <td> <?php echo $i; ?></td>
            <td>{{$items->product_tittle}}</td>
            <td><img class="table-image" src="{{$items->product_image}}"  alt="Product_Image"></td>
            <td>${{$items->Product_price}} </td>
            <td>
            <form action="/cart-delete" method="POST" >
             @csrf
                <input type="hidden" name="cart_id" value="{{$items->cart_id}}"> 
                <button class="btn btn-danger">Delete</button>
            </form>
            <form action="/cart-later" method="POST" >
             @csrf
                <input type="hidden" name="product_id" value="{{$items->cart_id}}">      
                @if( ($items->cart_flag)==0)
                    <button id="later" class="btn btn-success mt-2">Save for Later</button>
                @else
                    <button id="later" class="btn btn-success mt-2" disabled="true">Saved</button>
                @endif
            </form>
            </td>
        </tr>
       @endforeach
   </table>
    <div class="mt-5 ml-5 d-flex">
        <h4>Total Price: ${{$total_price}}</h4>
        <button class="btn btn-primary ml-5">Buy Now </Button>
    </div>
</div>


<div id="footerSection">
    @include('layouts.footer')
</div>

@endsection



