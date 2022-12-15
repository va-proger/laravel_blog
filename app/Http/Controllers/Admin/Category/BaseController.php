<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Services\CategoryService;

class BaseController extends Controller
{
    public $service;

    public function __construct(CategoryService $service)
    {
        $this->service = $service;
    }
}
