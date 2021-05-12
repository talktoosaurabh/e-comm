<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\userController;
use App\Http\Controllers\productController;


Route::get('/', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/logout',[userController::class,'logout']);

Route::post('/signin',[userController::class,'login']);

Route::get('/products',[productController::class,'index']);



