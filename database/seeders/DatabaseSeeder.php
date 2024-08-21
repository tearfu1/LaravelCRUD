<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Category::factory(3)->create();
        Tag::factory(5)->create();
        Post::factory(10)->create();

        $tags = Tag::all();
        $posts = Post::all();

        foreach ($posts as $post) {
            $tagsAmount = random_int(1, 5);
            $tagsIds = $tags->random($tagsAmount)->pluck('id');
            $post->tags()->attach($tagsIds);
        }
    }
}
