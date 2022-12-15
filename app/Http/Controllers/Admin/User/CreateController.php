<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class CreateController extends Controller
{
    public function __invoke()
    {
        $current_time = Carbon::now()->year;
        return view('admin.user.create', compact('current_time'));
    }
}
