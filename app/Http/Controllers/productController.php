<?php

namespace App\Http\Controllers;
use App\Models\cart;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    function index()
    {
        $data=product::all();
        return view('products',['products'=>$data]);
    }

    function addToCart(Request $req)
    {
        if($req->session()->has('userSession'))
        {
            $cart = new cart;
            $cart->user_id=$req->session()->get('userSession')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/products');
        }
        else
        {
         return redirect('/login');
        }
    }
 
    static function cartItem()
    {
        $userid=Session::get('userSession')['id'];
        return cart::where('user_id',$userid)->count();
    }
 
    function cartList()
    {
        $userid=Session::get('userSession')['id'];
        $products=DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userid)
        ->select('products.*','cart.id as cart_id')
        ->get();
        return view('cartList',['products'=>$products]);
    }
 
    function removeCartItems($id)
    {
 
     echo "hello";
     exit;
        cart::destroy($id);
        return redirect('/cartList');
    }
}
