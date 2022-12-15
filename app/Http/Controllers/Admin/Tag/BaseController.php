<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Services\TagsService;

class BaseController extends Controller
{
    public $service;

    public function __construct(TagsService $service)
    {
        $this->service = $service;
    }
}
