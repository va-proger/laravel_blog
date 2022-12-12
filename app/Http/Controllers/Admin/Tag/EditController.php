<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Carbon\Carbon;

class EditController extends Controller
{
    public function __invoke(Tag $tag)
    {
        $current_time = Carbon::now()->year;
        return view('admin.tag.edit', compact('tag','current_time'));
    }
}
