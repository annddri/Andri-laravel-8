<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    $data = [
        'title' => 'Posts Categories',
        'categories' => Category::all()
    ];
    return view('categories', $data);
});

Route::get('/category/{category:slug}', function(\App\Models\Category $category){
    $data = [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ];
    return view('category', $data);
});
