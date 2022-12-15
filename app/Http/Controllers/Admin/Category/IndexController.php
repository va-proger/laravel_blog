<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Carbon\Carbon;

class IndexController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        $current_time = Carbon::now()->year;
        return view('admin.category.index', compact('categories', 'current_time'));
    }
}
