<?php

namespace App\Http\Controllers;

use App\Services\RoleService;
use App\Http\Requests\RoleRequest;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function __construct(
        protected RoleService $service
    ) {}

    public function index()
    {
        $roles = $this->service->all();
        return view('pages.role.index', compact('roles'));
    }

    public function create()
    {
        return view('pages.role.create');
    }

    public function store(RoleRequest $request)
    {
        $this->service->create($request->validated());
        return redirect()->route('role.index')->with('success', 'Role berhasil ditambahkan');
    }

    public function show(int $id)
    {
        $role = $this->service->find($id);
        return view('pages.role.show', compact('role'));
    }

    public function edit(int $id)
    {
        $role = $this->service->find($id);
        return view('pages.role.edit', compact('role'));
    }

    public function update(RoleRequest $request, int $id)
    {
        $this->service->update($id, $request->validated());
        return redirect()->route('role.index')->with('success', 'Role berhasil diperbarui');
    }

    public function destroy(int $id)
    {
        $this->service->delete($id);
        return redirect()->route('role.index')->with('success', 'Role berhasil dihapus');
    }
}
