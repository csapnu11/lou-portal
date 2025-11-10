<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Enums\UserRole;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        // Create one user per role
        User::factory()->role(UserRole::ADMIN)->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
        ]);

        User::factory()->role(UserRole::FACULTY)->create([
            'name' => 'Faculty User',
            'email' => 'faculty@example.com',
        ]);

        User::factory()->role(UserRole::STAFF)->create([
            'name' => 'Staff User',
            'email' => 'staff@example.com',
        ]);

        User::factory()->role(UserRole::STUDENT)->count(5)->create();
    }
}
