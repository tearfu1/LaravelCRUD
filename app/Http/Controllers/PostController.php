<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where("likes", 10)->first();
        dd($posts);
    }

    public function create()
    {
        $postsArr = [
            [
                "title" => "postXXX",
                "content" => "contentXXX",
                "image" => "imgXXX",
                "likes" => 3232,
                "is_published" => 1,
            ],
            [
                "title" => "postZZZ",
                "content" => "contentZZZ",
                "image" => "imgZZZ",
                "likes" => 6767,
                "is_published" => 1,
            ],

        ];
        foreach ($postsArr as $post) {
            Post::create($post);
        }
        dd("created");
    }

    public function update()
    {
        $post = Post::find(4);
        $post->update([
            "title" => "updated title",
            "content" => "updated content",
        ]);
        dd("updated");
    }

    public function delete()
    {
        $post = Post::withTrashed()->find(1);
        $post->restore();
        dd("deleted");
    }

    public function firstOrCreate()
    {
        $postArr = [
            "title" => "FOCtitle",
            "content" => "FOCcontent",
            "image" => "FOCimg",
            "likes" => 1111,
        ];
        $post = Post::firstOrCreate([
            "title" => "FOCtitle",
        ], $postArr);
        dd("FOCdone");
    }

    public function updateOrCreate()
    {
        $postArr = [
            "title" => "UOCtitle",
            "content" => "UOCcontent",
            "image" => "UOCimg",
            "likes" => 2222,
        ];
        $post = Post::updateOrCreate([
            "title" => "FOCtitle",
        ], $postArr);
        dd("UOCdone");
    }
}
