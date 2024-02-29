<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'email' => 'jei@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('90209020'),
            'role' => 'admin',
        ]);
        // User::factory()->count(100)->create();
    }
}
