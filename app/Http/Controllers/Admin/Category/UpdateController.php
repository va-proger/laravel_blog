<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Category $category)
    {
        $data = $request->validated();
        $category = $this->service->updateCategory($data, $category);
        return $category instanceof Category ? redirect()->route('admin.category.show', $category->id) : $category;
    }
}
