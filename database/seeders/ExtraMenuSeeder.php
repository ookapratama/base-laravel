<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;
use App\Models\Role;

class ExtraMenuSeeder extends Seeder
{
    public function run(): void
    {
        // Add Settings Menu
        $settingsMenu = Menu::updateOrCreate(
            ['slug' => 'settings.index'],
            [
                'name' => 'Pengaturan Website',
                'icon' => 'ri-settings-4-line',
                'path' => 'settings',
                'order_no' => 99, // Place it at the bottom
            ]
        );

        // Add Profile Menu (if not exists)
        $profileMenu = Menu::updateOrCreate(
            ['slug' => 'profile.index'],
            [
                'name' => 'Profil Saya',
                'icon' => 'ri-user-settings-line',
                'path' => 'profile',
                'order_no' => 98,
            ]
        );

        // Assign to Super Admin and Admin
        $roles = Role::whereIn('slug', ['super-admin', 'admin'])->get();
        foreach ($roles as $role) {
            $role->menus()->syncWithoutDetaching([
                $settingsMenu->id => ['can_create' => true, 'can_read' => true, 'can_update' => true, 'can_delete' => true],
                $profileMenu->id => ['can_create' => true, 'can_read' => true, 'can_update' => true, 'can_delete' => true],
            ]);
        }
    }
}
