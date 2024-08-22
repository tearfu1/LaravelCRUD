<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Http\Resources\Post\PostResource;
use App\Models\Post;

class UpdateController extends BaseController
{
    public function __invoke(StoreRequest $request, Post $post)
    {
        $editedData = $request->validated();
        $post = $this->service->update($post, $editedData);
        if ($post instanceof Post) {
            return new PostResource($post);
        }
        return $post;
    }
}
