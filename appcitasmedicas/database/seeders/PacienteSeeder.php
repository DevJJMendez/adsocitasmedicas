<?php

namespace Database\Seeders;

use App\Models\Third_Data;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PacienteSeeder extends Seeder
{
    public function run(): void
    {
        $thirddata = Third_Data::create([
            'id_document_type' => fake()->numberBetween(1, 4),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'name' => 'Paciente',
            'last_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'id_gender' => fake()->numberBetween(1, 2),
            'address' => fake()->streetAddress(),
            'id_medical_entity' => fake()->numberBetween(1, 16),
        ]);
        User::create([
            'id_third_data' => $thirddata['third_data_id'],
            'email' => 'paciente@gmail.com',
            'password' => bcrypt('1234'),
        ])->assignRole('Paciente');

        $thirddata = Third_Data::create([
            'id_document_type' => fake()->numberBetween(1, 4),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'name' => 'Paciente2',
            'last_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'id_gender' => fake()->numberBetween(1, 2),
            'address' => fake()->streetAddress(),
            'id_medical_entity' => fake()->numberBetween(1, 16),
        ]);
        User::create([
            'id_third_data' => $thirddata['third_data_id'],
            'email' => 'paciente2@gmail.com',
            'password' => bcrypt('1234'),
        ])->assignRole('Paciente');

        $thirddata = Third_Data::create([
            'id_document_type' => fake()->numberBetween(1, 4),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'id_gender' => fake()->numberBetween(1, 2),
            'address' => fake()->streetAddress(),
            'id_medical_entity' => fake()->numberBetween(1, 16),
        ]);
        User::create([
            'id_third_data' => $thirddata['third_data_id'],
            'email' => fake()->email(),
            'password' => bcrypt('1234'),
        ])->assignRole('Paciente');

        $thirddata = Third_Data::create([
            'id_document_type' => fake()->numberBetween(1, 4),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'id_gender' => fake()->numberBetween(1, 2),
            'address' => fake()->streetAddress(),
            'id_medical_entity' => fake()->numberBetween(1, 16),
        ]);
        User::create([
            'id_third_data' => $thirddata['third_data_id'],
            'email' => fake()->email(),
            'password' => bcrypt('1234'),
        ])->assignRole('Paciente');

        $thirddata = Third_Data::create([
            'id_document_type' => fake()->numberBetween(1, 4),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'id_gender' => fake()->numberBetween(1, 2),
            'address' => fake()->streetAddress(),
            'id_medical_entity' => fake()->numberBetween(1, 16),
        ]);
        User::create([
            'id_third_data' => $thirddata['third_data_id'],
            'email' => fake()->email(),
            'password' => bcrypt('1234'),
        ])->assignRole('Paciente');
    }
}
