<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $current_time = Carbon::now()->year;
        return view('admin.main.index', compact('current_time'));
    }
}
