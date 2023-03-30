<?php

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


Route::get('/posts', function () {
    $blog_posts = [
        [
            'title' => 'Post Pertama',
            'slug' => 'post-pertama',
            'author' => 'Hendro S',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, error optio. Eos numquam similique doloribus, sed consequatur esse. Ullam corporis placeat, nobis adipisci eaque nostrum distinctio reiciendis vel! Quasi dicta pariatur quam sit qui, vel eius quod ut, ratione inventore quibusdam ab aspernatur illum beatae accusamus eos dolores soluta ex autem sed eveniet incidunt. Dolor nulla dolorum at ratione! Deserunt nemo quibusdam quia ratione eligendi nesciunt provident nisi nostrum, repudiandae labore suscipit quasi soluta reprehenderit, sunt nobis repellat saepe temporibus animi sit asperiores. Nihil, alias culpa fugiat illo optio iure voluptatum quae incidunt esse inventore doloremque consectetur sapiente assumenda accusamus?'
        ],
        [
            'title' => 'Post Kedua',
            'slug' => 'post-kedua',
            'author' => 'Indra S',
            'body' =>   'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum corporis accusantium inventore ea minima harum neque esse incidunt beatae voluptates, consequatur minus libero, in fugit sed illo dolorum! Accusantium, minima possimus, dignissimos, amet alias obcaecati omnis soluta hic tempore error voluptates! Neque quidem animi tempora, nemo cumque nobis vel odio praesentium magnam sit repudiandae rem sequi, sed dolorum maxime, autem eligendi consectetur ipsa distinctio alias impedit est ab. Ducimus assumenda sequi nihil nam, suscipit dignissimos aliquam. Doloremque reiciendis magni, fugit quia debitis maxime, eum dolorem obcaecati vero iure accusamus provident pariatur minima nulla quis ipsam possimus quaerat ducimus quas voluptas eos eveniet sequi hic aspernatur! Unde dolores id maiores reiciendis veniam. Et, eaque! Porro a reprehenderit quod nesciunt delectus facere et saepe accusantium modi, impedit molestias veniam aspernatur nobis pariatur dolorum explicabo beatae sed, quae aliquam quisquam dolorem ipsum ipsa? Quos odio a tempora quibusdam ad placeat reiciendis dolorum optio!'
        ]
    ];

    return view('posts', [
        'title' => 'posts Blog',
        'posts' => $blog_posts
    ]);
});

//Halaman single post

Route::get('/post/{slug}', function ($slug) {
    $blog_posts = [
        [
            'title' => 'Post Pertama',
            'slug' => 'post-pertama',
            'author' => 'Hendro S',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, error optio. Eos numquam similique doloribus, sed consequatur esse. Ullam corporis placeat, nobis adipisci eaque nostrum distinctio reiciendis vel! Quasi dicta pariatur quam sit qui, vel eius quod ut, ratione inventore quibusdam ab aspernatur illum beatae accusamus eos dolores soluta ex autem sed eveniet incidunt. Dolor nulla dolorum at ratione! Deserunt nemo quibusdam quia ratione eligendi nesciunt provident nisi nostrum, repudiandae labore suscipit quasi soluta reprehenderit, sunt nobis repellat saepe temporibus animi sit asperiores. Nihil, alias culpa fugiat illo optio iure voluptatum quae incidunt esse inventore doloremque consectetur sapiente assumenda accusamus?'
        ],
        [
            'title' => 'Post Kedua',
            'slug' => 'post-kedua',
            'author' => 'Indra S',
            'body' =>   'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum corporis accusantium inventore ea minima harum neque esse incidunt beatae voluptates, consequatur minus libero, in fugit sed illo dolorum! Accusantium, minima possimus, dignissimos, amet alias obcaecati omnis soluta hic tempore error voluptates! Neque quidem animi tempora, nemo cumque nobis vel odio praesentium magnam sit repudiandae rem sequi, sed dolorum maxime, autem eligendi consectetur ipsa distinctio alias impedit est ab. Ducimus assumenda sequi nihil nam, suscipit dignissimos aliquam. Doloremque reiciendis magni, fugit quia debitis maxime, eum dolorem obcaecati vero iure accusamus provident pariatur minima nulla quis ipsam possimus quaerat ducimus quas voluptas eos eveniet sequi hic aspernatur! Unde dolores id maiores reiciendis veniam. Et, eaque! Porro a reprehenderit quod nesciunt delectus facere et saepe accusantium modi, impedit molestias veniam aspernatur nobis pariatur dolorum explicabo beatae sed, quae aliquam quisquam dolorem ipsum ipsa? Quos odio a tempora quibusdam ad placeat reiciendis dolorum optio!'
        ]
    ];
    $post = [];

    foreach ($blog_posts as $blog) {
        if ($blog['slug'] === $slug) {
            $post = $blog;
            break;
        }
    }

    return view(
        'post',

        [
            'title' => 'single post',
            'post' => $post
        ]
    );
});
