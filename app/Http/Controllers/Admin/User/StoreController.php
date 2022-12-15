<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Requests\Admin\User\StoreRequest;
use App\Models\Category;
use App\Models\User;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $user = $this->service->store($data);
        return $user instanceof User ? redirect()->route('admin.user.index') : $user;
    }
}
