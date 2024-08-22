<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\Post\BaseController;
use App\Http\Requests\Post\StoreRequest;
use App\Models\Post;

class UpdateController extends BaseController
{
    public function __invoke(StoreRequest $request, Post $post)
    {
        $editedData = $request->validated();
        $this->service->update($post, $editedData);
        return redirect()->route('admin.post.show', $post->id);
    }
}
