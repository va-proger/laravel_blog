<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use Carbon\Carbon;

class EditController extends Controller
{
    public function __invoke(User $user)
    {
        $current_time = Carbon::now()->year;
        $roles = User::getRoles();
        return view('admin.user.edit', compact('user', 'roles', 'current_time'));
    }
}
