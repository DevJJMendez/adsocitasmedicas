<?php

namespace Database\Seeders;

use App\Models\Third_Data;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ThirdDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => '12345678910',
            'first_name' => 'usuarioPrueba',
            'second_name' => 'apellidoPrueba',
            'number_phone' => '3005657465',
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'idMedicalEntity' => fake()->numberBetween(1, 16),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => 'usertest@gmail.com',
            'password' => $thirddata['identification_number'],
            'role' => 'paciente',
        ]);
    }
}
