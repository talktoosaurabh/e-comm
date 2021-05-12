<?php

namespace App\Http\Controllers;
use App\Models\product;

use Illuminate\Http\Request;

class productController extends Controller
{
    function index()
    {
        $data=product::all();
        return view('products',['products'=>$data]);
    }
}
