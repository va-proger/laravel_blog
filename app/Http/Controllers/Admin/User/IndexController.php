<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use Carbon\Carbon;

class IndexController extends Controller
{
    public function __invoke()
    {
        $users = User::all();
        $current_time = Carbon::now()->year;
        return view('admin.user.index', compact('users', 'current_time'));
    }
}
