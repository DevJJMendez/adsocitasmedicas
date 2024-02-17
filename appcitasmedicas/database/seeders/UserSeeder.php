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
            'name' => 'jjmendez',
            'email' => 'jjmendez@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('90209020'),
            'cedula' => '1002235233',
            'address' => 'Malambo',
            'number_phone' => '3156071707',
            'role' => 'admin',
        ]);
        // User::factory()->count(100)->create();
    }
}