<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Syllabus;
use Illuminate\Http\Request;



class SyllabusController extends Controller
{
    public function syllabi($slug){
        $subcategory = SubCategory::where('slug',$slug)->first();
        $syllabus = Syllabus::where('sub_category_id',$subcategory->id)->get();
        return view('syllabus', compact('subcategory','syllabus'));
    }
  
}
 