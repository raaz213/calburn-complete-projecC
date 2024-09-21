<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\SyllabusController;
use App\Http\Controllers\UserController;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});



Route::get('/chest', [UserController::class, 'chest']);


Route::get('/category/{slug}', [SubCategoryController::class, 'index']);

Route::get('/subcategory/{slug}', [ProductController::class, 'index']);

Route::get('/userinfo', [UserController::class, 'userInfo']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/exercise', [CategoryController::class, 'categories']);
    Route::get('/nutrition', [UserController::class, 'nutrition']);
    Route::get('/syllabus', [SyllabusController::class, 'syllabuslist']);

});
