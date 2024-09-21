<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;



class SyllabusController extends Controller
{
    public function syllabuslist()
    {
        $syllabus = Category::all();
        return view('syllabus', compact('syllabus'));
    }
}
