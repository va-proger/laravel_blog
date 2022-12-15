<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class CreateController extends Controller
{
    public function __invoke()
    {
        $current_time = Carbon::now()->year;
        return view('admin.category.create', compact('current_time'));
    }
}
