<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {

        return view('post', [
            'title' => 'All Post',

            //cara menampilkan semua berdasarkan urutan id
            // 'posts' => Post::all()

            //cara menampilkan berdasarkan yang terbaru
            'posts' => Post::with(['author', 'category'])->latest()->get()

        ]);
    }

    public function show(Post $post)
    {

        return view('single-post', [
            "title" => "single-post",
            "post" => $post
        ]);
    }
}