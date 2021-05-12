<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class userController extends Controller
{
    function login(Request $req)
    {
       $user=User::where(['email'=>$req->username])->first();

       if($user && Hash::check($req->passkey,$user->password))
       {
          $req->session()->put('userSession',$user);
          return redirect('/products');
       }
       else{
        return "username or pasword does not match";
       }
    }

    function registration(Request $req)
    {
        if(strcmp($req->pass,$req->cnfrm_pass)==0)
        {
            $user = new User;
            $user->name=$req->fname;
            $user->email=$req->gmail;
            $user->contact=$req->contact;
            $user->password=Hash::make($req->pass);
            $user->save();
            return redirect('/');
        }
        else{
            return "Password and Confirm Password does not match";
        }
    }

    function logout()
    {
        Session::forget('userSession');
        return redirect('/');
    }
}
