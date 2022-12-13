<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Carbon\Carbon;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::all();
        $current_time = Carbon::now()->year;
        return view('admin.post.index', compact('posts', 'current_time'));
    }
}
