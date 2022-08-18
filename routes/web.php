<?php

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

Route::get('/', function () {
    return view('home',[
        'title'=> 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about',[
        'title'=> 'About'
    ]);
});




Route::get('/post', function () {
    $blog_posts= [
        [
            "title"=> 'Judul post Pertama',
            "slug"=> 'judul-post-pertama',
            "author"=> 'Satriyo',
            "body"=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, inventore esse facere aperiam hic incidunt quas aliquid neque non voluptatem enim quasi, tempora blanditiis nostrum accusamus fugiat eaque, libero sequi placeat. Modi quod dolorum facere suscipit nesciunt, inventore mollitia voluptatem obcaecati minima, quis praesentium atque beatae enim repellendus reprehenderit cum dolore asperiores. Accusantium at facilis dolor corrupti totam ducimus sapiente eius. Id cumque repudiandae explicabo deleniti mollitia commodi adipisci dolorum quo delectus nam voluptates, fugit doloribus placeat facere minima magnam?'
        ],
        [
            "title"=> 'Judul post Kedua',
            "slug"=> 'judul-post-kedua',
            "author"=> 'Nugroho',
            "body"=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, inventore esse facere aperiam hic incidunt quas aliquid neque non voluptatem enim quasi, tempora blanditiis nostrum accusamus fugiat eaque, libero sequi placeat. Modi quod dolorum facere suscipit nesciunt, inventore mollitia voluptatem obcaecati minima, quis praesentium atque beatae enim repellendus reprehenderit cum dolore asperiores. Accusantium at facilis dolor corrupti totam ducimus sapiente eius. Id cumque repudiandae explicabo deleniti mollitia commodi adipisci dolorum quo delectus nam voluptates, fugit doloribus placeat facere minima magnam?'
        ]
        ];

    return view('post',[
        'title'=> 'Post',
        'posts'=> $blog_posts
    ]);
});

//Halaman Single Post
Route::get('post/{slug}', function($slug){

    $blog_posts= [
        [
            "title"=> 'Judul post Pertama',
            "slug"=> 'judul-post-pertama',
            "author"=> 'Satriyo',
            "body"=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, inventore esse facere aperiam hic incidunt quas aliquid neque non voluptatem enim quasi, tempora blanditiis nostrum accusamus fugiat eaque, libero sequi placeat. Modi quod dolorum facere suscipit nesciunt, inventore mollitia voluptatem obcaecati minima, quis praesentium atque beatae enim repellendus reprehenderit cum dolore asperiores. Accusantium at facilis dolor corrupti totam ducimus sapiente eius. Id cumque repudiandae explicabo deleniti mollitia commodi adipisci dolorum quo delectus nam voluptates, fugit doloribus placeat facere minima magnam?'
        ],
        [
            "title"=> 'Judul post Kedua',
            "slug"=> 'judul-post-kedua',
            "author"=> 'Nugroho',
            "body"=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, inventore esse facere aperiam hic incidunt quas aliquid neque non voluptatem enim quasi, tempora blanditiis nostrum accusamus fugiat eaque, libero sequi placeat. Modi quod dolorum facere suscipit nesciunt, inventore mollitia voluptatem obcaecati minima, quis praesentium atque beatae enim repellendus reprehenderit cum dolore asperiores. Accusantium at facilis dolor corrupti totam ducimus sapiente eius. Id cumque repudiandae explicabo deleniti mollitia commodi adipisci dolorum quo delectus nam voluptates, fugit doloribus placeat facere minima magnam?'
        ]
        ];

        $new_post = [];
        foreach($blog_posts as $post){
            if($post["slug"] === $slug){
                $new_post = $post;
            }
        }
    return view ('single-post', [
        "title"=> "single-post",
        "post"=> $new_post
    ]);
});
