<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Admin user
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'role' => 'admin',
            'password' => bcrypt('password'),
        ]);

        // Regular user
        User::factory()->create([
            'name' => 'Regular User',
            'email' => 'user@user.com',
            'role' => 'user',
            'password' => bcrypt('password'),
        ]);
        
        // Random users
        User::factory(10)->create();
    }
}
