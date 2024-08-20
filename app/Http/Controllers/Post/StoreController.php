<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\UpdateRequest;
use App\Models\Post;

class StoreController extends BaseController
{
    public function __invoke(UpdateRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);
        return redirect()->route('post.index');
    }
}
