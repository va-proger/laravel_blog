<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;
use Carbon\Carbon;

class CreateController extends Controller
{
    public function __invoke()
    {
        $current_time = Carbon::now()->year;
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.post.create', compact('categories', 'tags', 'current_time'));
    }
}
