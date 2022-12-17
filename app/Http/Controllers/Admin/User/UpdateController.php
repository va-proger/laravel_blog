<?php

namespace App\Http\Controllers\Admin\User;


use App\Http\Requests\Admin\User\UpdateRequest;
use App\Models\Category;
use App\Models\User;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, User $user)
    {

        $data = $request->validated();

        $user = $this->service->update($data, $user);
        return $user instanceof User ? redirect()->route('admin.user.show', $user->id) : $user;
    }
}
