<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
     function login(Request $req)
     {
         $user= User::where(['email'=>$req->email])->first();
         if(!$user|| !hash::check($req->password,$user->password))
         {
             return "Username or password is not matched";
         }
         else
         {
             $req->session()->put("user",$user);
             return redirect("/");
         }
     }
}
