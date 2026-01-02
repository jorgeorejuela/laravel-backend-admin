<?php

use App\Models\User;

test('admin can view user list', function () {
    $admin = User::factory()->create(['role' => 'admin']);

    $response = $this->actingAs($admin)->get('/admin/users');

    $response->assertStatus(200);
});

test('regular user cannot view user list', function () {
    $user = User::factory()->create(['role' => 'user']);

    $response = $this->actingAs($user)->get('/admin/users');

    $response->assertStatus(403);
});

test('admin can create a user', function () {
    $admin = User::factory()->create(['role' => 'admin']);

    $response = $this->actingAs($admin)->post('/admin/users', [
        'name' => 'New User',
        'email' => 'new@example.com',
        'password' => 'password',
        'password_confirmation' => 'password',
        'role' => 'user',
    ]);

    $response->assertRedirect('/admin/users');
    $this->assertDatabaseHas('users', ['email' => 'new@example.com']);
});

test('admin can update a user', function () {
    $admin = User::factory()->create(['role' => 'admin']);
    $user = User::factory()->create();

    $response = $this->actingAs($admin)->put("/admin/users/{$user->id}", [
        'name' => 'Updated Name',
        'email' => $user->email,
        'role' => 'admin',
    ]);

    $response->assertRedirect('/admin/users');
    $this->assertDatabaseHas('users', ['id' => $user->id, 'name' => 'Updated Name', 'role' => 'admin']);
});

test('admin can delete a user', function () {
    $admin = User::factory()->create(['role' => 'admin']);
    $user = User::factory()->create();

    $response = $this->actingAs($admin)->delete("/admin/users/{$user->id}");

    $response->assertRedirect('/admin/users');
    $this->assertDatabaseMissing('users', ['id' => $user->id]);
});
