<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Services\FileUploadService;

class UserController extends Controller
{
    public function __construct(
        protected UserService $service,
        protected \App\Interfaces\Repositories\RoleRepositoryInterface $roleRepository,
        protected FileUploadService $fileUploadService
    ) {}

    /**
     * Display a listing of users
     */
    public function index(Request $request)
    {
        $users = $this->service->all();
        return view('pages.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new user
     */
    public function create()
    {
        $roles = $this->roleRepository->all();
        return view('pages.user.create', compact('roles'));
    }

    /**
     * Store a newly created user
     */
    public function store(UserRequest $request)
    {
        $data = $request->validated();
        
        if ($request->hasFile('avatar')) {
            $media = $this->fileUploadService->upload($request->file('avatar'), 'avatars');
            $data['avatar'] = $media->path;
        }

        $this->service->store($data);

        return redirect()->route('user.index')
            ->with('success', 'User berhasil ditambahkan!');
    }

    /**
     * Display the specified user
     */
    public function show(int $id)
    {
        $user = $this->service->find($id);
        return view('pages.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified user
     */
    public function edit(int $id)
    {
        $user = $this->service->find($id);
        $roles = $this->roleRepository->all();
        return view('pages.user.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified user
     */
    public function update(UserRequest $request, int $id)
    {
        $data = $request->validated();

        if ($request->hasFile('avatar')) {
            $media = $this->fileUploadService->upload($request->file('avatar'), 'avatars');
            $data['avatar'] = $media->path;
        }

        $this->service->update($id, $data);

        return redirect()->route('user.index')
            ->with('success', 'User berhasil diperbarui!');
    }

    /**
     * Remove the specified user
     */
    public function destroy(int $id)
    {
        $this->service->delete($id);

        return redirect()->route('user.index')
            ->with('success', 'User berhasil dihapus!');
    }
}
