<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RoleAndMenuSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Roles
        $roles = [
            ['name' => 'Super Admin', 'slug' => 'super-admin'],
            ['name' => 'Admin', 'slug' => 'admin'],
            ['name' => 'User', 'slug' => 'user'],
            ['name' => 'Visitor', 'slug' => 'visitor'],
        ];

        $roleIds = [];
        foreach ($roles as $role) {
            $roleIds[$role['slug']] = DB::table('roles')->updateOrInsert(
                ['slug' => $role['slug']],
                [
                    'name' => $role['name'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
            // Get the actual ID
            $roleIds[$role['slug']] = DB::table('roles')->where('slug', $role['slug'])->first()->id;
        }

        // 2. Menus
        $menus = [
            ['name' => 'Dashboard', 'slug' => 'dashboard', 'path' => '/', 'icon' => 'ri-home-smile-line', 'order_no' => 1],
            ['name' => 'User Management', 'slug' => 'user-management', 'path' => null, 'icon' => 'ri-user-settings-line', 'order_no' => 2],
            ['parent' => 'User Management', 'name' => 'Users', 'slug' => 'user.index', 'path' => '/user', 'icon' => 'ri-user-line', 'order_no' => 1],
            ['parent' => 'User Management', 'name' => 'Roles', 'slug' => 'role.index', 'path' => '/role', 'icon' => 'ri-shield-user-line', 'order_no' => 2],
            ['parent' => 'User Management', 'name' => 'Menus', 'slug' => 'menu.index', 'path' => '/menu', 'icon' => 'ri-menu-search-line', 'order_no' => 3],
            ['parent' => 'User Management', 'name' => 'Permissions', 'slug' => 'permission.index', 'path' => '/permission', 'icon' => 'ri-lock-password-line', 'order_no' => 4],
            ['name' => 'Katalog Produk', 'slug' => 'products.index', 'path' => '/products', 'icon' => 'ri-shopping-bag-3-line', 'order_no' => 3],
            ['name' => 'Activity Log', 'slug' => 'activity-log.index', 'path' => '/activity-log', 'icon' => 'ri-history-line', 'order_no' => 4],
            ['name' => 'API Docs', 'slug' => 'api-docs', 'path' => '/api/documentation', 'icon' => 'ri-book-open-line', 'order_no' => 5],
        ];

        $menuIdMap = [];
        foreach ($menus as $m) {
            $parentId = isset($m['parent']) ? ($menuIdMap[$m['parent']] ?? null) : null;
            
            DB::table('menus')->updateOrInsert(
                ['slug' => $m['slug']],
                [
                    'parent_id' => $parentId,
                    'name' => $m['name'],
                    'path' => $m['path'],
                    'icon' => $m['icon'],
                    'order_no' => $m['order_no'],
                    'is_active' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
            
            $dbMenu = DB::table('menus')->where('slug', $m['slug'])->first();
            $menuIdMap[$m['name']] = $dbMenu->id;

            // Assign to Super Admin by default
            DB::table('role_menu')->updateOrInsert(
                ['role_id' => $roleIds['super-admin'], 'menu_id' => $dbMenu->id],
                [
                    'can_create' => true,
                    'can_read' => true,
                    'can_update' => true,
                    'can_delete' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );

            // Assign some to Admin
            if (in_array($m['slug'], ['dashboard', 'user.index', 'activity-log.index'])) {
                DB::table('role_menu')->updateOrInsert(
                    ['role_id' => $roleIds['admin'], 'menu_id' => $dbMenu->id],
                    [
                        'can_create' => true,
                        'can_read' => true,
                        'can_update' => true,
                        'can_delete' => false,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]
                );
            }

            // Assign some to User
            if (in_array($m['slug'], ['dashboard'])) {
                DB::table('role_menu')->updateOrInsert(
                    ['role_id' => $roleIds['user'], 'menu_id' => $dbMenu->id],
                    [
                        'can_create' => false,
                        'can_read' => true,
                        'can_update' => false,
                        'can_delete' => false,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]
                );
            }

            // Assign some to Visitor (Full view of public features but Read Only)
            if (in_array($m['slug'], ['dashboard', 'products.index'])) {
                DB::table('role_menu')->updateOrInsert(
                    ['role_id' => $roleIds['visitor'], 'menu_id' => $dbMenu->id],
                    [
                        'can_create' => false,
                        'can_read' => true,
                        'can_update' => false,
                        'can_delete' => false,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]
                );
            }
        }
    }
}
