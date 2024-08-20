<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class UpdateController extends Controller
{
    public function __invoke(Post $post)
    {
        $editedData = request()->validate([
            "title" => "string",
            "content" => "string",
            "image" => "string",
            "category_id" => "integer",
            "tags" => '',
        ]);
        $tags = $editedData['tags'];
        unset($editedData['tags']);

        $post->update($editedData);
        $post->tags()->sync($tags);
        return redirect()->route('post.show', $post->id);
    }
}
