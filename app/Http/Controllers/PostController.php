<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('post.create', compact('categories'));
    }

    public function store()
    {
        $post = request()->validate([
            "title" => "string",
            "content" => "string",
            "image" => "string",
            "category_id" => "integer",
        ]);
        Post::create($post);
        return redirect()->route('post.index');
    }

    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('post.edit', compact('post', 'categories'));
    }

    public function update(Post $post)
    {
        $editedData = request()->validate([
            "title" => "string",
            "content" => "string",
            "image" => "string",
            "category_id" => "integer",
        ]);
        $post->update($editedData);
        return redirect()->route('post.show', $post->id);
    }

    public function delete()
    {
        $post = Post::withTrashed()->find(1);
        $post->restore();
        dd("deleted");
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
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
