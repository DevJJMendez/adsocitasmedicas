<?php

namespace Database\Seeders;

use App\Models\Third_Data;
use App\Models\User;
use Database\Factories\AdminFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        $thirddata = Third_Data::create([
            'id_document_type' => 1,
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'id_gender' => fake()->numberBetween(1, 2),
            'address' => fake()->address(),
        ]);
        User::create([
            'id_third_data' => $thirddata->third_data_id,
            'email' => 'admin@gmail.com',
            'password' => bcrypt('1234'),
        ])->assignRole('Administrador');
    }
}
