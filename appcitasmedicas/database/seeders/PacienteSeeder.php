<?php

namespace Database\Seeders;

use App\Models\Third_Data;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'sur_name' => fake()->lastName(),
            'second_sur_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'id_medical_entity' => fake()->numberBetween(12, 13),
            'id_specialty' => fake()->numberBetween(1, 34),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => fake()->email(),
            'password' => '1234',
        ])->assignRole('Paciente');
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'sur_name' => fake()->lastName(),
            'second_sur_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'id_medical_entity' => fake()->numberBetween(12, 13),
            'id_specialty' => fake()->numberBetween(1, 34),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => fake()->email(),
            'password' => '1234',
        ])->assignRole('Paciente');
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'sur_name' => fake()->lastName(),
            'second_sur_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'id_medical_entity' => fake()->numberBetween(12, 13),
            'id_specialty' => fake()->numberBetween(1, 34),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => fake()->email(),
            'password' => '1234',
        ])->assignRole('Paciente');
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'sur_name' => fake()->lastName(),
            'second_sur_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'id_medical_entity' => fake()->numberBetween(12, 13),
            'id_specialty' => fake()->numberBetween(1, 34),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => fake()->email(),
            'password' => '1234',
        ])->assignRole('Paciente');
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'sur_name' => fake()->lastName(),
            'second_sur_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'id_medical_entity' => fake()->numberBetween(12, 13),
            'id_specialty' => fake()->numberBetween(1, 34),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => fake()->email(),
            'password' => '1234',
        ])->assignRole('Paciente');
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'sur_name' => fake()->lastName(),
            'second_sur_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'id_medical_entity' => fake()->numberBetween(12, 13),
            'id_specialty' => fake()->numberBetween(1, 34),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => fake()->email(),
            'password' => '1234',
        ])->assignRole('Paciente');
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'sur_name' => fake()->lastName(),
            'second_sur_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'id_medical_entity' => fake()->numberBetween(12, 13),
            'id_specialty' => fake()->numberBetween(1, 34),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => fake()->email(),
            'password' => '1234',
        ])->assignRole('Paciente');
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'sur_name' => fake()->lastName(),
            'second_sur_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'id_medical_entity' => fake()->numberBetween(12, 13),
            'id_specialty' => fake()->numberBetween(1, 34),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => fake()->email(),
            'password' => '1234',
        ])->assignRole('Paciente');
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'sur_name' => fake()->lastName(),
            'second_sur_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'id_medical_entity' => fake()->numberBetween(12, 13),
            'id_specialty' => fake()->numberBetween(1, 34),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => fake()->email(),
            'password' => '1234',
        ])->assignRole('Paciente');
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'sur_name' => fake()->lastName(),
            'second_sur_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'id_medical_entity' => fake()->numberBetween(12, 13),
            'id_specialty' => fake()->numberBetween(1, 34),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => fake()->email(),
            'password' => '1234',
        ])->assignRole('Paciente');
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'sur_name' => fake()->lastName(),
            'second_sur_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'id_medical_entity' => fake()->numberBetween(12, 13),
            'id_specialty' => fake()->numberBetween(1, 34),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => fake()->email(),
            'password' => '1234',
        ])->assignRole('Paciente');
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'sur_name' => fake()->lastName(),
            'second_sur_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'id_medical_entity' => fake()->numberBetween(12, 13),
            'id_specialty' => fake()->numberBetween(1, 34),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => fake()->email(),
            'password' => '1234',
        ])->assignRole('Paciente');
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'sur_name' => fake()->lastName(),
            'second_sur_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'id_medical_entity' => fake()->numberBetween(12, 13),
            'id_specialty' => fake()->numberBetween(1, 34),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => fake()->email(),
            'password' => '1234',
        ])->assignRole('Paciente');
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'sur_name' => fake()->lastName(),
            'second_sur_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'id_medical_entity' => fake()->numberBetween(12, 13),
            'id_specialty' => fake()->numberBetween(1, 34),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => fake()->email(),
            'password' => '1234',
        ])->assignRole('Paciente');
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'sur_name' => fake()->lastName(),
            'second_sur_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'id_medical_entity' => fake()->numberBetween(12, 13),
            'id_specialty' => fake()->numberBetween(1, 34),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => fake()->email(),
            'password' => '1234',
        ])->assignRole('Paciente');
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'sur_name' => fake()->lastName(),
            'second_sur_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'id_medical_entity' => fake()->numberBetween(12, 13),
            'id_specialty' => fake()->numberBetween(1, 34),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => fake()->email(),
            'password' => '1234',
        ])->assignRole('Paciente');
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'sur_name' => fake()->lastName(),
            'second_sur_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'id_medical_entity' => fake()->numberBetween(12, 13),
            'id_specialty' => fake()->numberBetween(1, 34),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => fake()->email(),
            'password' => '1234',
        ])->assignRole('Paciente');
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'sur_name' => fake()->lastName(),
            'second_sur_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'id_medical_entity' => fake()->numberBetween(12, 13),
            'id_specialty' => fake()->numberBetween(1, 34),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => fake()->email(),
            'password' => '1234',
        ])->assignRole('Paciente');
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'sur_name' => fake()->lastName(),
            'second_sur_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'id_medical_entity' => fake()->numberBetween(12, 13),
            'id_specialty' => fake()->numberBetween(1, 34),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => fake()->email(),
            'password' => '1234',
        ])->assignRole('Paciente');
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'sur_name' => fake()->lastName(),
            'second_sur_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'id_medical_entity' => fake()->numberBetween(12, 13),
            'id_specialty' => fake()->numberBetween(1, 34),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => fake()->email(),
            'password' => '1234',
        ])->assignRole('Paciente');
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'sur_name' => fake()->lastName(),
            'second_sur_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'id_medical_entity' => fake()->numberBetween(12, 13),
            'id_specialty' => fake()->numberBetween(1, 34),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => fake()->email(),
            'password' => '1234',
        ])->assignRole('Paciente');
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'sur_name' => fake()->lastName(),
            'second_sur_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'id_medical_entity' => fake()->numberBetween(12, 13),
            'id_specialty' => fake()->numberBetween(1, 34),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => fake()->email(),
            'password' => '1234',
        ])->assignRole('Paciente');
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'sur_name' => fake()->lastName(),
            'second_sur_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'id_medical_entity' => fake()->numberBetween(12, 13),
            'id_specialty' => fake()->numberBetween(1, 34),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => fake()->email(),
            'password' => '1234',
        ])->assignRole('Paciente');
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'sur_name' => fake()->lastName(),
            'second_sur_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'id_medical_entity' => fake()->numberBetween(12, 13),
            'id_specialty' => fake()->numberBetween(1, 34),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => fake()->email(),
            'password' => '1234',
        ])->assignRole('Paciente');
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'sur_name' => fake()->lastName(),
            'second_sur_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'id_medical_entity' => fake()->numberBetween(12, 13),
            'id_specialty' => fake()->numberBetween(1, 34),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => fake()->email(),
            'password' => '1234',
        ])->assignRole('Paciente');
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'sur_name' => fake()->lastName(),
            'second_sur_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'id_medical_entity' => fake()->numberBetween(12, 13),
            'id_specialty' => fake()->numberBetween(1, 34),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => fake()->email(),
            'password' => '1234',
        ])->assignRole('Paciente');
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'sur_name' => fake()->lastName(),
            'second_sur_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'id_medical_entity' => fake()->numberBetween(12, 13),
            'id_specialty' => fake()->numberBetween(1, 34),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => fake()->email(),
            'password' => '1234',
        ])->assignRole('Paciente');
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'sur_name' => fake()->lastName(),
            'second_sur_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'id_medical_entity' => fake()->numberBetween(12, 13),
            'id_specialty' => fake()->numberBetween(1, 34),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => fake()->email(),
            'password' => '1234',
        ])->assignRole('Paciente');
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'sur_name' => fake()->lastName(),
            'second_sur_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'id_medical_entity' => fake()->numberBetween(12, 13),
            'id_specialty' => fake()->numberBetween(1, 34),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => fake()->email(),
            'password' => '1234',
        ])->assignRole('Paciente');
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'sur_name' => fake()->lastName(),
            'second_sur_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'id_medical_entity' => fake()->numberBetween(12, 13),
            'id_specialty' => fake()->numberBetween(1, 34),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => fake()->email(),
            'password' => '1234',
        ])->assignRole('Paciente');
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'sur_name' => fake()->lastName(),
            'second_sur_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'id_medical_entity' => fake()->numberBetween(12, 13),
            'id_specialty' => fake()->numberBetween(1, 34),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => fake()->email(),
            'password' => '1234',
        ])->assignRole('Paciente');
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'sur_name' => fake()->lastName(),
            'second_sur_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'id_medical_entity' => fake()->numberBetween(12, 13),
            'id_specialty' => fake()->numberBetween(1, 34),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => fake()->email(),
            'password' => '1234',
        ])->assignRole('Paciente');
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'sur_name' => fake()->lastName(),
            'second_sur_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'id_medical_entity' => fake()->numberBetween(12, 13),
            'id_specialty' => fake()->numberBetween(1, 34),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => fake()->email(),
            'password' => '1234',
        ])->assignRole('Paciente');
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'sur_name' => fake()->lastName(),
            'second_sur_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'id_medical_entity' => fake()->numberBetween(12, 13),
            'id_specialty' => fake()->numberBetween(1, 34),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => fake()->email(),
            'password' => '1234',
        ])->assignRole('Paciente');
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'sur_name' => fake()->lastName(),
            'second_sur_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'id_medical_entity' => fake()->numberBetween(12, 13),
            'id_specialty' => fake()->numberBetween(1, 34),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => fake()->email(),
            'password' => '1234',
        ])->assignRole('Paciente');
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'sur_name' => fake()->lastName(),
            'second_sur_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'id_medical_entity' => fake()->numberBetween(12, 13),
            'id_specialty' => fake()->numberBetween(1, 34),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => fake()->email(),
            'password' => '1234',
        ])->assignRole('Paciente');
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'sur_name' => fake()->lastName(),
            'second_sur_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'id_medical_entity' => fake()->numberBetween(12, 13),
            'id_specialty' => fake()->numberBetween(1, 34),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => fake()->email(),
            'password' => '1234',
        ])->assignRole('Paciente');
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'sur_name' => fake()->lastName(),
            'second_sur_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'id_medical_entity' => fake()->numberBetween(12, 13),
            'id_specialty' => fake()->numberBetween(1, 34),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => fake()->email(),
            'password' => '1234',
        ])->assignRole('Paciente');
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'sur_name' => fake()->lastName(),
            'second_sur_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'id_medical_entity' => fake()->numberBetween(12, 13),
            'id_specialty' => fake()->numberBetween(1, 34),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => fake()->email(),
            'password' => '1234',
        ])->assignRole('Paciente');
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'sur_name' => fake()->lastName(),
            'second_sur_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'id_medical_entity' => fake()->numberBetween(12, 13),
            'id_specialty' => fake()->numberBetween(1, 34),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => fake()->email(),
            'password' => '1234',
        ])->assignRole('Paciente');
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'sur_name' => fake()->lastName(),
            'second_sur_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'id_medical_entity' => fake()->numberBetween(12, 13),
            'id_specialty' => fake()->numberBetween(1, 34),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => fake()->email(),
            'password' => '1234',
        ])->assignRole('Paciente');
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'sur_name' => fake()->lastName(),
            'second_sur_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'id_medical_entity' => fake()->numberBetween(12, 13),
            'id_specialty' => fake()->numberBetween(1, 34),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => fake()->email(),
            'password' => '1234',
        ])->assignRole('Paciente');
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'sur_name' => fake()->lastName(),
            'second_sur_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'id_medical_entity' => fake()->numberBetween(12, 13),
            'id_specialty' => fake()->numberBetween(1, 34),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => fake()->email(),
            'password' => '1234',
        ])->assignRole('Paciente');
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'sur_name' => fake()->lastName(),
            'second_sur_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'id_medical_entity' => fake()->numberBetween(12, 13),
            'id_specialty' => fake()->numberBetween(1, 34),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => fake()->email(),
            'password' => '1234',
        ])->assignRole('Paciente');
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'sur_name' => fake()->lastName(),
            'second_sur_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'id_medical_entity' => fake()->numberBetween(12, 13),
            'id_specialty' => fake()->numberBetween(1, 34),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => fake()->email(),
            'password' => '1234',
        ])->assignRole('Paciente');
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'sur_name' => fake()->lastName(),
            'second_sur_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'id_medical_entity' => fake()->numberBetween(12, 13),
            'id_specialty' => fake()->numberBetween(1, 34),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => fake()->email(),
            'password' => '1234',
        ])->assignRole('Paciente');
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'sur_name' => fake()->lastName(),
            'second_sur_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'id_medical_entity' => fake()->numberBetween(12, 13),
            'id_specialty' => fake()->numberBetween(1, 34),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => fake()->email(),
            'password' => '1234',
        ])->assignRole('Paciente');
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'sur_name' => fake()->lastName(),
            'second_sur_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'id_medical_entity' => fake()->numberBetween(12, 13),
            'id_specialty' => fake()->numberBetween(1, 34),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => fake()->email(),
            'password' => '1234',
        ])->assignRole('Paciente');
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'sur_name' => fake()->lastName(),
            'second_sur_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'id_medical_entity' => fake()->numberBetween(12, 13),
            'id_specialty' => fake()->numberBetween(1, 34),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => fake()->email(),
            'password' => '1234',
        ])->assignRole('Paciente');
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'sur_name' => fake()->lastName(),
            'second_sur_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'id_medical_entity' => fake()->numberBetween(12, 13),
            'id_specialty' => fake()->numberBetween(1, 34),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => fake()->email(),
            'password' => '1234',
        ])->assignRole('Paciente');
        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number' => fake()->numberBetween(100000000, 999999999),
            'first_name' => fake()->firstName(),
            'second_name' => fake()->firstName(),
            'sur_name' => fake()->lastName(),
            'second_sur_name' => fake()->lastName(),
            'number_phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
            'gender_type_id' => fake()->numberBetween(6, 7),
            'address' => fake()->address(),
            'id_medical_entity' => fake()->numberBetween(12, 13),
            'id_specialty' => fake()->numberBetween(1, 34),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => fake()->email(),
            'password' => '1234',
        ])->assignRole('Paciente');
    }
}
