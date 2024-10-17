<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Syllabus;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userInfo(){
        return view('userinfo');
    }
   
    public function index(){
        $products = Product::latest()->take(8)->get();
        return view('product', compact('products'));
    }
    public function syllabi(){
        $syllabus = Syllabus::latest()->take(8)->get();
        return view('syllabus', compact('syllabus'));
    }
}

