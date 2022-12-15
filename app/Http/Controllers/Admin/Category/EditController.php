<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Carbon\Carbon;

class EditController extends Controller
{
    public function __invoke(Category $category)
    {
        $current_time = Carbon::now()->year;
        return view('admin.category.edit', compact('category','current_time'));
    }
}
