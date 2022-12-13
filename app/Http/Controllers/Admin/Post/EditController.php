<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Carbon\Carbon;

class EditController extends Controller
{
    public function __invoke(Post $post)
    {
        $current_time = Carbon::now()->year;
        return view('admin.post.edit', compact('post','current_time'));
    }
}
