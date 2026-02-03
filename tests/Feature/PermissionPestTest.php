<?php

use App\Models\User;
use App\Models\Role;
use App\Models\Menu;
use Illuminate\Foundation\Testing\RefreshDatabase;



beforeEach(function () {
    $role = Role::firstOrCreate(['slug' => 'super-admin'], ['name' => 'Super Admin']);
    $this->admin = User::factory()->create(['role_id' => $role->id]);
});

test('guest cannot access permission page', function () {
    $this->get(route('permission.index'))
        ->assertRedirect(route('login'));
});

test('admin can view permission index', function () {
    // Create a dummy role to show in list
    $role = Role::firstOrCreate(['slug' => 'test-role'], ['name' => 'Test Role']);

    $this->actingAs($this->admin)
        ->get(route('permission.index'))
        ->assertStatus(200)
        ->assertSee('Test Role');
});

test('admin can update role permissions', function () {
    $role = Role::firstOrCreate(['slug' => 'editor'], ['name' => 'Editor']);
    
    $menu = Menu::firstOrCreate(['slug' => 'test-dashboard-unique'], [
        'name' => 'Test Dashboard',
        'path' => 'dashboard',
        'order_no' => 1
    ]);

    $payload = [
        'role_id' => $role->id,
        'permissions' => [
            $role->id => [
                $menu->id => [
                    'c' => 1,
                    'r' => 1
                ]
            ]
        ]
    ];

    $this->actingAs($this->admin)
        ->put(route('permission.update'), $payload)
        ->assertRedirect()
        ->assertSessionHas('success');

    $this->assertDatabaseHas('role_menu', [
        'role_id' => $role->id,
        'menu_id' => $menu->id,
        'can_create' => 1,
        'can_read' => 1
    ]);
});
