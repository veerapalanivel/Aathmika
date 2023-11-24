<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
   public function login(Request $request){

   //return Hash::make($request->password);
        $credentials = [
            'email'=>$request->email,
            'password'=>$request->password
        ];

        if(Auth::attempt($credentials)){
            return Auth::user()->id;
        }
   }
}
