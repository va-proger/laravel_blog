<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Carbon\Carbon;

class CreateController extends Controller
{
    public function __invoke()
    {
        $current_time = Carbon::now()->year;
        $categories = Category::all();
        return view('admin.post.create', compact('categories', 'current_time'));
    }
}
