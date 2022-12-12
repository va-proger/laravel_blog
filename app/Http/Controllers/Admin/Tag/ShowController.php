<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Carbon\Carbon;

class ShowController extends Controller
{
    public function __invoke(Tag $tag)
    {
        $current_time = Carbon::now()->year;
        return view('admin.tag.show', compact('tag', 'current_time'));
    }
}
