<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Carbon\Carbon;

class ShowController extends Controller
{
    public function __invoke(Post $post)
    {
        $current_time = Carbon::now()->year;
        $categories = Category::all();
        return view('admin.post.show', compact('post', 'categories' , 'current_time'));
    }
}
