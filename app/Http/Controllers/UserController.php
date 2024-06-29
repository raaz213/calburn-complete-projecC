<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function nutrition(){
        return view('nutrition');
    }
    public function healthtips(){
        return view('healthtips');
    }
    public function userInfo(){
        return view('userinfo');
    }
   
    public function chest(){
        $products = Product::latest()->take(8)->get();
        return view('chest', compact('products'));
    }
}

