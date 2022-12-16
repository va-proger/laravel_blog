<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;

class CreateController extends Controller
{
    public function __invoke()
    {
        $current_time = Carbon::now()->year;
        $roles = User::getRoles();
        return view('admin.user.create', compact('current_time', 'roles'));
    }
}
