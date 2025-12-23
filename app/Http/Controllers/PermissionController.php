<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Menu;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        $menus = Menu::whereNull('parent_id')->with('children')->orderBy('order_no')->get();
        return view('pages.permission.index', compact('roles', 'menus'));
    }

    public function update(Request $request)
    {
        $data = $request->input('permissions', []);

        foreach (Role::all() as $role) {
            $menuIds = isset($data[$role->id]) ? array_keys($data[$role->id]) : [];
            $role->menus()->sync($menuIds);
        }

        return redirect()->back()->with('success', 'Hak akses berhasil diperbarui');
    }
}
