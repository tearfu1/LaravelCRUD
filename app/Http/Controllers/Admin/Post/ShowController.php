<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class ShowController extends Controller
{
    public function __invoke(Post $post)
    {
        $posts = Post::paginate(10);
        return view('admin.post.show', compact('post', 'posts'));
    }
}
