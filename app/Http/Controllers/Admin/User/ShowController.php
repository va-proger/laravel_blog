<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use Carbon\Carbon;

class ShowController extends Controller
{
    public function __invoke(User $user)
    {
        $current_time = Carbon::now()->year;
        return view('admin.user.show', compact('user', 'current_time'));
    }
}
