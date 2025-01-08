<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        Post::factory(20)->create();

        // User::create([
        //     'name'=> 'Andri Widani',
        //     'email' => 'andriwidani@upi.edu',
        //     'password' => bcrypt('12345')
        // ]);
        // User::create([
        //     'name'=> 'Andri Awe',
        //     'email' => 'andriwidani@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        // Post::create([
        //     'title'=> 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores labore quod sed enim rem, iste at suscipit dolores ullam, repudiandae harum unde laborum optio.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores labore quod sed enim rem, iste at suscipit dolores ullam, repudiandae harum unde laborum optio facilis quasi nobis libero cumque voluptate voluptates itaque totam cupiditate ut necessitatibus! Nostrum temporibus amet doloribus tenetur, facilis incidunt exercitationem vero nulla ad, quos saepe corporis similique quaerat? Ab, tenetur esse nesciunt aperiam quam repellat eum, illum fuga mollitia consequatur consequuntur, autem laboriosam voluptatum molestias earum obcaecati doloremque architecto corporis tempore iste. Aspernatur numquam reiciendis consequuntur dignissimos eligendi sit! Similique consequatur voluptatibus nam provident enim ipsa sunt ducimus reprehenderit error, maiores assumenda dicta molestiae optio dignissimos.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]); 
        // Post::create([
        //     'title'=> 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores labore quod sed enim rem, iste at suscipit dolores ullam.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores labore quod sed enim rem, iste at suscipit dolores ullam, repudiandae harum unde laborum optio facilis quasi nobis libero cumque voluptate voluptates itaque totam cupiditate ut necessitatibus! Nostrum temporibus amet doloribus tenetur, facilis incidunt exercitationem vero nulla ad, quos saepe corporis similique quaerat? Ab, tenetur esse nesciunt aperiam quam repellat eum, illum fuga mollitia consequatur consequuntur, autem laboriosam voluptatum molestias earum obcaecati doloremque architecto corporis tempore iste. Aspernatur numquam reiciendis consequuntur dignissimos eligendi sit! Similique consequatur voluptatibus nam provident enim ipsa sunt ducimus reprehenderit error, maiores assumenda dicta molestiae optio dignissimos.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]); 
        // Post::create([
        //     'title'=> 'Judul Ke tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores labore quod sed enim rem, iste at suscipit dolores ullam.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores labore quod sed enim rem, iste at suscipit dolores ullam, repudiandae harum unde laborum optio facilis quasi nobis libero cumque voluptate voluptates itaque totam cupiditate ut necessitatibus! Nostrum temporibus amet doloribus tenetur, facilis incidunt exercitationem vero nulla ad, quos saepe corporis similique quaerat? Ab, tenetur esse nesciunt aperiam quam repellat eum, illum fuga mollitia consequatur consequuntur, autem laboriosam voluptatum molestias earum obcaecati doloremque architecto corporis tempore iste. Aspernatur numquam reiciendis consequuntur dignissimos eligendi sit! Similique consequatur voluptatibus nam provident enim ipsa sunt ducimus reprehenderit error, maiores assumenda dicta molestiae optio dignissimos.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]); 
        // Post::create([
        //     'title'=> 'Judul Ke empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores labore quod sed enim rem, iste at suscipit dolores ullam. asdasdddddsaas.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores labore quod sed enim rem, iste at suscipit dolores ullam, repudiandae harum unde laborum optio facilis quasi nobis libero cumque voluptate voluptates itaque totam cupiditate ut necessitatibus! Nostrum temporibus amet doloribus tenetur, facilis incidunt exercitationem vero nulla ad, quos saepe corporis similique quaerat? Ab, tenetur esse nesciunt aperiam quam repellat eum, illum fuga mollitia consequatur consequuntur, autem laboriosam voluptatum molestias earum obcaecati doloremque architecto corporis tempore iste. Aspernatur numquam reiciendis consequuntur dignissimos eligendi sit! Similique consequatur voluptatibus nam provident enim ipsa sunt ducimus reprehenderit error, maiores assumenda dicta molestiae optio dignissimos.',
        //     'category_id' => 3,
        //     'user_id' => 2
        // ]); 
    }
}

