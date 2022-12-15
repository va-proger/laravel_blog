<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Requests\Admin\Tag\StoreRequest;
use App\Models\Tag;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $tag = $this->service->store($data);
        return $tag instanceof Tag ? redirect()->route('admin.tag.index') : $tag;
    }
}
