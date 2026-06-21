<?php

use App\Models\Products;
use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

beforeEach(function () {
    // super-admin bypasses CheckPermission via Gate::before
    $role = Role::firstOrCreate(['slug' => 'super-admin'], ['name' => 'Super Admin']);
    $this->admin = User::factory()->create(['role_id' => $role->id]);
});

function makeProduct(): Products
{
    return Products::create([
        // cover left without a matching Media row so the media-cleanup branch is skipped
        'cover' => '',
        'name' => 'Test Product',
        'price' => 1000,
        'quantity' => 5,
        'description' => 'A product used for delete regression testing',
        'is_active' => true,
    ]);
}

test('product delete returns a JSON envelope when the client accepts JSON', function () {
    $product = makeProduct();

    $this->actingAs($this->admin)
        ->deleteJson(route('products.destroy', $product))
        ->assertStatus(200)
        ->assertJson(['success' => true]);

    $this->assertModelMissing($product);
    $this->assertDatabaseMissing('products', ['id' => $product->id]);
});

test('product delete redirects with a flash message for a normal web request', function () {
    $product = makeProduct();

    $this->actingAs($this->admin)
        ->delete(route('products.destroy', $product))
        ->assertRedirect(route('products.index'))
        ->assertSessionHas('success');

    $this->assertModelMissing($product);
});
