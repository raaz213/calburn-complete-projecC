<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index($slug){
        $category = Category::where('slug',$slug)->first();
        $subcategories = SubCategory::where('category_id',$category->id)->get();
        return view('subcategory', compact('category','subcategories'));
    }
}
