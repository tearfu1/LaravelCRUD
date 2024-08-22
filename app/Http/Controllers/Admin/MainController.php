<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\FilterRequest;
use App\Models\Post;

class MainController extends Controller
{
    public function __invoke(FilterRequest $request)
    {
        $posts = Post::paginate(10);
        return view('admin.main', compact('posts'));
    }
}
