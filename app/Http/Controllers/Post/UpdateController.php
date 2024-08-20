<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Models\Post;

class UpdateController extends Controller
{
    public function __invoke(StoreRequest $request, Post $post)
    {
        $editedData = $request->validated();
        $tags = $editedData['tags'];
        unset($editedData['tags']);

        $post->update($editedData);
        $post->tags()->sync($tags);
        return redirect()->route('post.show', $post->id);
    }
}
