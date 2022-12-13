<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class CreateController extends Controller
{
    public function __invoke()
    {
        $current_time = Carbon::now()->year;
        return view('admin.post.create', compact('current_time'));
    }
}
