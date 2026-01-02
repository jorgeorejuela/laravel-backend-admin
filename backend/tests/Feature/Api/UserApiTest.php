<?php

use App\Models\User;
use Laravel\Sanctum\Sanctum;

test('authenticated user can fetch user list via api', function () {
    $user = User::factory()->create();
    Sanctum::actingAs($user);

    $response = $this->getJson('/api/users');

    $response->assertStatus(200)
             ->assertJsonStructure([
                 '*' => ['id', 'name', 'email', 'role', 'created_at', 'updated_at']
             ]);
});

test('unauthenticated user cannot fetch user list', function () {
    $response = $this->getJson('/api/users');

    $response->assertStatus(401);
});

test('user can be created via api', function () {
    $user = User::factory()->create();
    Sanctum::actingAs($user);

    $response = $this->postJson('/api/users', [
        'name' => 'API User',
        'email' => 'api@example.com',
        'password' => 'password',
        'password_confirmation' => 'password',
        'role' => 'user',
    ]);

    $response->assertStatus(201)
             ->assertJson(['name' => 'API User']);
});
