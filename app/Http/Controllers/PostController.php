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
}
