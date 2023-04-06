<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('home', [
        'title' => 'home',
        'active' => 'home',
        "name" => "Indra Saputra",
        "email" => "indra@ymail.com",
        "image" => 'img/MyImage.jpg'
    ]);
});
Route::get('/about', function () {
    return view('about', [
        'title' => 'about',
        'active' => 'about',
        "name" => "Indra Saputra",
        "email" => "indra@ymail.com",
        "image" => 'img/MyImage.jpg'
    ]);
});


Route::get(
    '/posts',
    [PostController::class, 'index']
);

//Halaman single post
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'title' => 'dashboard',
    ]);
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('dashboard/posts', DashboardPostController::class)->middleware('auth');
Route::resource('dashboard/categories', AdminCategoryController::class)
    ->except('show')
    ->middleware('admin');
