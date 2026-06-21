<?php

use App\Models\Role;
use App\Models\User;

beforeEach(function () {
    // super-admin bypasses CheckPermission via Gate::before
    $adminRole = Role::firstOrCreate(['slug' => 'super-admin'], ['name' => 'Super Admin']);
    $this->admin = User::factory()->create(['role_id' => $adminRole->id]);
    $this->targetRole = Role::firstOrCreate(['slug' => 'user'], ['name' => 'User']);
});

test('guest cannot create a user', function () {
    $this->post(route('user.store'), [
        'name' => 'Ooka Pratama',
        'email' => 'ooka@gmail.com',
        'password' => 'secret123',
        'role_id' => $this->targetRole->id,
    ])->assertRedirect(route('login'));

    $this->assertDatabaseMissing('users', ['email' => 'ooka@gmail.com']);
});

test('admin can create a user', function () {
    $this->actingAs($this->admin)
        ->post(route('user.store'), [
            'name' => 'Ooka Pratama',
            'email' => 'ooka@gmail.com',
            'password' => 'secret123',
            'role_id' => $this->targetRole->id,
        ])
        ->assertRedirect(route('user.index'))
        ->assertSessionHas('success');

    // UserService::store upper-cases the name as business logic
    $this->assertDatabaseHas('users', [
        'email' => 'ooka@gmail.com',
        'name' => 'OOKA PRATAMA',
        'role_id' => $this->targetRole->id,
    ]);
});

test('creating a user fails validation when required fields are missing', function () {
    $this->actingAs($this->admin)
        ->post(route('user.store'), [
            'name' => 'No Email',
        ])
        ->assertSessionHasErrors(['email', 'password', 'role_id']);

    $this->assertDatabaseMissing('users', ['name' => 'NO EMAIL']);
});
