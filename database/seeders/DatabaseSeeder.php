<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        //jika menggunakan manula ini di comen
        //jika menggunakan factory dibawah ini
        User::factory(3)->create();
        Post::factory(20)->create();


        //cara manual
        // User::create([
        //     'name' => 'Satriyo Nugroho',
        //     'email' => 'satriyonugroho2@gmail.com',
        //     'password' => bcrypt('12345'),
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi sapiente hic eaque eius, nisi dolore. Ad, fuga optio dolores quis repudiandae voluptate accusamus quo minima commodi doloribus iste aperiam adipisci nesciunt recusandae accusantium voluptatum ea iure architecto praesentium vitae.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi sapiente hic eaque eius, nisi dolore. Ad, fuga optio dolores quis repudiandae voluptate accusamus quo minima commodi doloribus iste aperiam adipisci nesciunt recusandae accusantium voluptatum ea iure architecto praesentium vitae. Distinctio debitis ullam velit dignissimos voluptatum, recusandae eligendi? Fugit et, non quia nostrum eos, deserunt quisquam accusamus dolor ipsum blanditiis impedit rem, reiciendis facilis nisi cumque harum assumenda laboriosam dolorum dignissimos! Explicabo magni, expedita tempore debitis eum eveniet pariatur odio maxime, hic nobis quis! Fugiat facere rerum, praesentium illum aspernatur pariatur. Culpa sit ad exercitationem aut quibusdam autem similique. Consequuntur, vero.',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi sapiente hic eaque eius, nisi dolore. Ad, fuga optio dolores quis repudiandae voluptate accusamus quo minima commodi doloribus iste aperiam adipisci nesciunt recusandae accusantium voluptatum ea iure architecto praesentium vitae.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi sapiente hic eaque eius, nisi dolore. Ad, fuga optio dolores quis repudiandae voluptate accusamus quo minima commodi doloribus iste aperiam adipisci nesciunt recusandae accusantium voluptatum ea iure architecto praesentium vitae. Distinctio debitis ullam velit dignissimos voluptatum, recusandae eligendi? Fugit et, non quia nostrum eos, deserunt quisquam accusamus dolor ipsum blanditiis impedit rem, reiciendis facilis nisi cumque harum assumenda laboriosam dolorum dignissimos! Explicabo magni, expedita tempore debitis eum eveniet pariatur odio maxime, hic nobis quis! Fugiat facere rerum, praesentium illum aspernatur pariatur. Culpa sit ad exercitationem aut quibusdam autem similique. Consequuntur, vero.',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi sapiente hic eaque eius, nisi dolore. Ad, fuga optio dolores quis repudiandae voluptate accusamus quo minima commodi doloribus iste aperiam adipisci nesciunt recusandae accusantium voluptatum ea iure architecto praesentium vitae.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi sapiente hic eaque eius, nisi dolore. Ad, fuga optio dolores quis repudiandae voluptate accusamus quo minima commodi doloribus iste aperiam adipisci nesciunt recusandae accusantium voluptatum ea iure architecto praesentium vitae. Distinctio debitis ullam velit dignissimos voluptatum, recusandae eligendi? Fugit et, non quia nostrum eos, deserunt quisquam accusamus dolor ipsum blanditiis impedit rem, reiciendis facilis nisi cumque harum assumenda laboriosam dolorum dignissimos! Explicabo magni, expedita tempore debitis eum eveniet pariatur odio maxime, hic nobis quis! Fugiat facere rerum, praesentium illum aspernatur pariatur. Culpa sit ad exercitationem aut quibusdam autem similique. Consequuntur, vero.',
        //     'category_id' => 2,
        //     'user_id' => 1,
        // ]);
    }
}