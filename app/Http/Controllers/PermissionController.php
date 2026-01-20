<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Menu;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index(Request $request)
    {
        $roles = Role::all();
        $selectedRoleId = $request->get('role_id');
        $selectedRole = $selectedRoleId ? Role::with('menus')->find($selectedRoleId) : null;
        
        $menus = Menu::whereNull('parent_id')->with('children')->orderBy('order_no')->get();
        return view('pages.permission.index', compact('roles', 'menus', 'selectedRole'));
    }

    public function update(Request $request)
    {
        $roleId = $request->input('role_id');
        $data = $request->input('permissions', []);

        if ($roleId) {
            $role = Role::findOrFail($roleId);
            $formattedData = [];
            if (isset($data[$roleId])) {
                foreach ($data[$roleId] as $menuId => $actions) {
                    $formattedData[$menuId] = [
                        'can_create' => isset($actions['c']),
                        'can_read'   => isset($actions['r']),
                        'can_update' => isset($actions['u']),
                        'can_delete' => isset($actions['d']),
                    ];
                }
            }
            $role->menus()->sync($formattedData);

            // Log manual because pivot sync doesn't trigger standard Eloquent events
            $role->logCustomActivity(
                'updated_permissions',
                "Hak akses untuk role '{$role->name}' telah diperbarui",
                ['permissions' => $formattedData]
            );
        } else {
            // Fallback for bulk update if needed
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

                // Log manual
                $role->logCustomActivity(
                    'updated_permissions',
                    "Hak akses untuk role '{$role->name}' telah diperbarui (bulk)",
                    ['permissions' => $formattedData]
                );
            }
        }

        return redirect()->back()->with('success', 'Hak akses berhasil diperbarui');
    }
}
