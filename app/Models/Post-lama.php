<?php

namespace App\Models;


class Post
{
    private static $blog_post = [
        [
            "title" => 'Judul post Pertama',
            "slug" => 'judul-post-pertama',
            "author" => 'Satriyo',
            "body" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, inventore esse facere aperiam hic incidunt quas aliquid neque non voluptatem enim quasi, tempora blanditiis nostrum accusamus fugiat eaque, libero sequi placeat. Modi quod dolorum facere suscipit nesciunt, inventore mollitia voluptatem obcaecati minima, quis praesentium atque beatae enim repellendus reprehenderit cum dolore asperiores. Accusantium at facilis dolor corrupti totam ducimus sapiente eius. Id cumque repudiandae explicabo deleniti mollitia commodi adipisci dolorum quo delectus nam voluptates, fugit doloribus placeat facere minima magnam?'
        ],
        [
            "title" => 'Judul post Kedua',
            "slug" => 'judul-post-kedua',
            "author" => 'Nugroho',
            "body" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, inventore esse facere aperiam hic incidunt quas aliquid neque non voluptatem enim quasi, tempora blanditiis nostrum accusamus fugiat eaque, libero sequi placeat. Modi quod dolorum facere suscipit nesciunt, inventore mollitia voluptatem obcaecati minima, quis praesentium atque beatae enim repellendus reprehenderit cum dolore asperiores. Accusantium at facilis dolor corrupti totam ducimus sapiente eius. Id cumque repudiandae explicabo deleniti mollitia commodi adipisci dolorum quo delectus nam voluptates, fugit doloribus placeat facere minima magnam?'
        ]
    ];

    public static function all()
    {
        //menggunakan caraa self
        // return self::$blog_post;

        //menggunakan cara collect
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {

        //menggunakan cara self
        // $posts = self::$blog_post;
        // $post = [];
        // foreach($posts as $p){
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }

        //menggunakan metode collect
        $posts = static::all();



        return $posts->firstwhere('slug', $slug);
    }
}