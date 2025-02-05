<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegistController;
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
        'active' => "categories",
        'categories' => Category::all()
    ];
    return view('categories', $data);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/regist', [RegistController::class, 'index'])->middleware('guest');
Route::post('/regist', [RegistController::class, 'store']);

Route::get('/dashboard', function() {
    $data = [
        'title' => 'Dashboard',
        'active' => 'dashboard'
    ];
    return view('dashboard.index', $data);
})->middleware('auth');

Route::get('dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('dashboard/posts', DashboardPostController::class)->middleware('auth');