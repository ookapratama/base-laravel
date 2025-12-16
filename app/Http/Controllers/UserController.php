<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseHelper;
use App\Services\UserService;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function __construct(
        protected UserService $service
    ) {}

    public function store(UserRequest $request)
    {
        $data = $request->validated();
        $result = $this->service->store($data);

        return ResponseHelper::success($result, 'User created');
    }
}
