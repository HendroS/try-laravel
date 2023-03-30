<?php

use App\Http\Controllers\PostController;
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
Route::get('/post/{slug}', [PostController::class, 'show']);
