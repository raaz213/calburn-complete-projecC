<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categories()
    {
        $categories = Category::all();
        return view('exercise', compact('categories'));
    }

    // public function show($slug)
    // {
    //     $category = Category::where('slug', $slug)->firstOrFail();
    //     return view('category.show', compact('category'));
    // }
   
}
