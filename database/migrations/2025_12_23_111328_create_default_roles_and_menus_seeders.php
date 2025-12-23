<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // 1. Create Super Admin Role
        $roleId = DB::table('roles')->insertGetId([
            'name' => 'Super Admin',
            'slug' => 'super-admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 2. Create Default Menus
        $menuIds = [];
        $menus = [
            ['name' => 'Dashboard', 'slug' => 'dashboard', 'url' => '/', 'icon' => 'ri-home-smile-line', 'order_no' => 1],
            ['name' => 'User Management', 'slug' => 'user-management', 'url' => null, 'icon' => 'ri-user-settings-line', 'order_no' => 2],
            ['parent' => 'User Management', 'name' => 'Users', 'slug' => 'user.index', 'url' => '/user', 'icon' => 'ri-user-line', 'order_no' => 1],
            ['parent' => 'User Management', 'name' => 'Roles', 'slug' => 'role.index', 'url' => '/role', 'icon' => 'ri-shield-user-line', 'order_no' => 2],
            ['parent' => 'User Management', 'name' => 'Menus', 'slug' => 'menu.index', 'url' => '/menu', 'icon' => 'ri-menu-search-line', 'order_no' => 3],
            ['parent' => 'User Management', 'name' => 'Permissions', 'slug' => 'permission.index', 'url' => '/permission', 'icon' => 'ri-lock-password-line', 'order_no' => 4],
        ];

        $parentIdMap = [];
        foreach ($menus as $m) {
            $parentId = isset($m['parent']) ? $parentIdMap[$m['parent']] : null;
            $id = DB::table('menus')->insertGetId([
                'parent_id' => $parentId,
                'name' => $m['name'],
                'slug' => $m['slug'],
                'url' => $m['url'],
                'icon' => $m['icon'],
                'order_no' => $m['order_no'],
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            $parentIdMap[$m['name']] = $id;
            $menuIds[] = $id;
        }

        // 3. Assign all menus to Super Admin
        foreach ($menuIds as $mid) {
            DB::table('role_menu')->insert([
                'role_id' => $roleId,
                'menu_id' => $mid,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        
        // 4. Update existing users to Super Admin (for testing)
        DB::table('users')->update(['role_id' => $roleId]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('role_menu')->delete();
        DB::table('menus')->delete();
        DB::table('roles')->where('slug', 'super-admin')->delete();
    }
};
