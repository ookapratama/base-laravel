<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseHelper;
use App\Services\UserService;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(
        protected UserService $service
    ) {}

    /**
     * Display a listing of users
     */
    public function index(Request $request)
    {
        $users = $this->service->all();
        return ResponseHelper::success($users, 'Users retrieved successfully');
    }

    /**
     * Display the specified user
     */
    public function show(int $id)
    {
        $user = $this->service->find($id);
        return ResponseHelper::success($user, 'User retrieved successfully');
    }

    /**
     * Store a newly created user
     */
    public function store(UserRequest $request)
    {
        $data = $request->validated();
        $result = $this->service->store($data);
        return ResponseHelper::success($result, 'User created successfully');
    }

    /**
     * Update the specified user
     */
    public function update(UserRequest $request, int $id)
    {
        $data = $request->validated();
        $result = $this->service->update($id, $data);
        return ResponseHelper::success($result, 'User updated successfully');
    }

    /**
     * Remove the specified user
     */
    public function destroy(int $id)
    {
        $this->service->delete($id);
        return ResponseHelper::success(null, 'User deleted successfully');
    }
}
