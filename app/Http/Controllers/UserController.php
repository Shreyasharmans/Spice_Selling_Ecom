<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function contactview(){

        if (Auth::check()) {
            return view('contact');
         }
        return view('auth.login');       
    }
    public function storeview(){

        if (Auth::check()) {
            return view('store');
         }
        return view('auth.login');       
    }
    public function spiceview(){

        if (Auth::check()) {
            return view('spice');
         }
        return view('auth.login');       
    }

    public function productsView(){

        if(Auth::check()){
            return view('product');
        }
        return view('auth.login');

    }
    public function aboutview(){

        if(Auth::check()){
            return view('aboutus');
        }
        return view('auth.login');

    }
   
}
