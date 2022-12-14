<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Carbon\Carbon;

class EditController extends Controller
{
    public function __invoke(Post $post)
    {
        $tags = Tag::all();
        $categories = Category::all();
        $current_time = Carbon::now()->year;
        return view('admin.post.edit', compact('post','current_time', 'tags', 'categories' ));
    }
}
