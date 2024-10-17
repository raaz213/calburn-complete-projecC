<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $casts = [
        'images' => 'array',
    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function product(){
        return $this->hasMany(Product::class,'sub_category_id');
    }
    public function syllabus(){
        return $this->hasMany(Syllabus::class,'sub_category_id');
    }
}
