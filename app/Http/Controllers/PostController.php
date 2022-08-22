<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

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



        return view('post', [
            'title' => 'All Post' . $title,
            'active' => 'post',

            //cara menampilkan semua berdasarkan urutan id
            // 'posts' => Post::all()

            //cara menampilkan berdasarkan yang terbaru
            // 'posts' => Post::latest()->get()

            //filter search di model
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()

        ]);
    }

    public function show(Post $post)
    {

        return view('single-post', [
            "title" => "single-post",
            'active' => 'post',
            "post" => $post
        ]);
    }
}