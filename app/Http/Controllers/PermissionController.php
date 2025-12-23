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
            $formattedData = [];
            if (isset($data[$role->id])) {
                foreach ($data[$role->id] as $menuId => $actions) {
                    $formattedData[$menuId] = [
                        'can_create' => isset($actions['c']),
                        'can_read'   => isset($actions['r']),
                        'can_update' => isset($actions['u']),
                        'can_delete' => isset($actions['d']),
                    ];
                }
            }
            $role->menus()->sync($formattedData);
        }

        return redirect()->back()->with('success', 'Hak akses berhasil diperbarui');
    }
}
