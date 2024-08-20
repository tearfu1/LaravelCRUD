<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Models\Post;

class UpdateController extends BaseController
{
    public function __invoke(StoreRequest $request, Post $post)
    {
        $editedData = $request->validated();
        $this->service->update($post, $editedData);
        return redirect()->route('post.show', $post->id);
    }
}
