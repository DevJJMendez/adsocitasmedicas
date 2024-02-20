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
            'name' => 'jeison',
            'email' => 'jei@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('90209020'),
            'cedula' => '1002235233',
            'address' => 'Malambo',
            'number_phone' => '3156071707',
            'role' => 'admin',
        ]);
        User::factory()->count(100)->create();
    }
}
//  SQLSTATE[22001]: String data, right truncated: 1406 Data too long for column 'address' at row 1 (Connection: mysql, SQL: insert into `users` (`name`, `email`, `email_verified_at`, `password`, `remember_token`, `cedula`, `address`, `number_phone`, `role`, `updated_at`, `created_at`) values (Jaquelin Collier, lempi.berge@example.net, 2024-02-13 17:45:11, $2y$12$y/MAvuw.XLD4cLbb8O43l.FCNdUqa/jqQXb5zz5c0wuMjZPl5K1Qm, PWymxCuAMU, 65464778, 23781 Gregory Estates Suite 557
// Ziemetown, NH 45319-3617, 1-845-576-1719, paciente, 2024-02-13 17:45:11, 2024-02-13 17:45:11)) 