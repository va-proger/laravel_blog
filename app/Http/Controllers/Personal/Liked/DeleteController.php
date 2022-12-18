<?php

namespace App\Http\Controllers\Personal\Liked;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Carbon\Carbon;

class DeleteController extends Controller
{
    public function __invoke(Post $post)
    {
        auth()->user()->likedPosts()->detach($post->id);
        $current_time = Carbon::now()->year;

        return redirect()->route('personal.liked.index');
    }
}
