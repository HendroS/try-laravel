<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Models\User;

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
        "name" => "Indra Saputra",
        "email" => "indra@ymail.com",
        "image" => 'img/MyImage.jpg'
    ]);
});
Route::get('/about', function () {
    return view('about', [
        'title' => 'about',
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
        'categories' => Category::all()
    ]);
});
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});
Route::get('/authors/{author:username}', function (User $author) {
    return view('posts', [
        'title' => 'User Posts',
        'posts' => $author->posts,
    ]);
});
