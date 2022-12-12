<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Carbon\Carbon;

class IndexController extends Controller
{
    public function __invoke()
    {
        $tags = Tag::all();
        $current_time = Carbon::now()->year;
        return view('admin.tag.index', compact('tags', 'current_time'));
    }
}
