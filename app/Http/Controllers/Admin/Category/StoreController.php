<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Category;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $category = $this->service->store($data);
        return $category instanceof Category ? redirect()->route('admin.category.index') : $category;
    }
}
