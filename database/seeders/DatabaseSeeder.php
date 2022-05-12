<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Post::truncate();
        Category::truncate();

        $user = User::factory()->create();

        $persona = Category::create([
          'name' => 'Personal',
          'slug' => 'personal'
        ]);

        $family = Category::create([
          'name' => 'Family',
          'slug' => 'family'
        ]);

        $work = Category::create([
          'name' => 'Work',
          'slug' => 'work'
        ]);

        Post::create([
          'user_id' => $user->id,
          'category_id' => $family->id,
          'title'=> 'My Family Post',
          'slug'=> 'my-family-post',
          'excerpt'=> 'Lorem ipsum dolar sit amet.',
          'body'=> 'Lorem ipsum dolar sit ametLorem ipsum dolar sit ametLorem ipsum dolar sit amet.',
        ]);

        Post::create([
          'user_id' => $user->id,
          'category_id' => $work->id,
          'title'=> 'My work Post',
          'slug'=> 'my-work-post',
          'excerpt'=> 'Lorem ipsum dolar sit amet.',
          'body'=> 'Lorem ipsum dolar sit ametLorem ipsum dolar sit ametLorem ipsum dolar sit amet.',
        ]);
    }
}
