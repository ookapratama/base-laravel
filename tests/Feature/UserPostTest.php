<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserPostTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test creating user via POST request
     */
    public function test_post_web_route()
    {
        $response = $this->post('/user', [
            'name' => 'Ooka Pratama',
            'email' => 'ooka2@gmail.com',
            'password' => '123456',
        ]);

        $response->assertStatus(200);
        $response->assertJsonStructure([
            'status',
            'message',
            'data' => ['id', 'name', 'email'],
        ]);
    }
}
