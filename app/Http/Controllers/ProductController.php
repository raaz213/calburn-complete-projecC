<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($slug){
        $subcategory = SubCategory::where('slug',$slug)->first();
        $products = Product::where('sub_category_id',$subcategory->id)->get();
        return view('product', compact('subcategory','products'));
    }
}
