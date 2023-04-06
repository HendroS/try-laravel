<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{

    public function index()
    {
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }
        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }
        // @dd(Post::latest()->filter(request(['search', 'category', 'author']))->get());
        // @dd(request(['search', 'category', 'author']));
        return view('posts', [
            'title' => 'All Posts' . $title,
            'active' => 'posts',
            'posts' => Post::latest()
                ->filter(request(['search', 'category', 'author']))
                ->paginate(7) //tidak perlu memakai with karena sudah dihandle di model
                ->withQueryString()
        ]);
    }
    public function show(Post $post)
    {
        return view(
            'post',
            [
                'title' => 'single post',
                'active' => 'posts',
                'post' => $post
            ]
        );
    }
}
