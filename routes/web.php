<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Hamcrest\Arrays\IsArray;
use Illuminate\Support\Facades\DB;
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

Route::get('/',[PostController::class,'index'])->name('home');

Route::get('/post/{post:slug}',[PostController::class,'show']);

Route::get('categories/{category:slug}', function (Category $category) {
  dd(request('categories'));
  return view('posts', [
    'posts' => $category->posts,
    'categories'=>Category::all()
  ]);
});

Route::get('authors/{author:username}', function (User $author) {
  return view('posts', [
    'posts' => $author->posts,
    'categories'=>Category::all()
  ]);
});

Route::get('register',[RegisterController::class,'create']);
Route::post('register',[RegisterController::class,'store']);
