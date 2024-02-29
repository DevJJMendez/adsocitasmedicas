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
        'identification_number'=>fake()->randomNumber($length=12),
        'first_name' =>fake() ->firstName(),
        'second_name'=>fake() ->firstName(),
        'sur_name'=>fake() ->lastName(),
        'second_sur_name'=>fake() ->lastName(),
        'number_phone'=> fake()->phoneNumber(),
        'birth_date'=>fake()->date(),
        'gender_type_id'=> fake()->numberBetween(6, 7),
        'address'=> fake()->address(),
        'entity_type_id'=> fake()->numberBetween(12, 13),
        ]);
        User::create([
            'third_data_id' => $thirddata['data_id'],
            'email' => 'jei@gmail.com',
            'password' => '1234',
            'role' => 'admin',
        ]);

        $thirddata = Third_Data::create([
            'document_type_id' => fake()->numberBetween(8, 11),
            'identification_number'=>fake()->randomNumber($length=12),
            'first_name' =>fake() ->firstName(),
            'second_name'=>fake() ->firstName(),
            'sur_name'=>fake() ->lastName(),
            'second_sur_name'=>fake() ->lastName(),
            'number_phone'=> fake()->phoneNumber(),
            'birth_date'=>fake()->date(),
            'gender_type_id'=> fake()->numberBetween(6, 7),
            'address'=> fake()->address(),
            'entity_type_id'=> fake()->numberBetween(12, 13),
            ]);
            User::create([
                'third_data_id' => $thirddata['data_id'],
                'email' => 'Devjjmendez@gmail.com',
                'password' => '1234',
                'role' => 'admin',
            ]);

            $thirddata = Third_Data::create([
                'document_type_id' => fake()->numberBetween(8, 11),
                'identification_number'=>fake()->randomNumber($length=12),
                'first_name' =>fake() ->firstName(),
                'second_name'=>fake() ->firstName(),
                'sur_name'=>fake() ->lastName(),
                'second_sur_name'=>fake() ->lastName(),
                'number_phone'=> fake()->phoneNumber(),
                'birth_date'=>fake()->date(),
                'gender_type_id'=> fake()->numberBetween(6, 7),
                'address'=> fake()->address(),
                'entity_type_id'=> fake()->numberBetween(12, 13),
                ]);
                User::create([
                    'third_data_id' => $thirddata['data_id'],
                    'email' => 'luish@gmail.com',
                    'password' => '1234',
                    'role' => 'doctor',
                ]);

                $thirddata = Third_Data::create([
                    'document_type_id' => fake()->numberBetween(8, 11),
                    'identification_number'=>fake()->randomNumber($length=12),
                    'first_name' =>fake() ->firstName(),
                    'second_name'=>fake() ->firstName(),
                    'sur_name'=>fake() ->lastName(),
                    'second_sur_name'=>fake() ->lastName(),
                    'number_phone'=> fake()->phoneNumber(),
                    'birth_date'=>fake()->date(),
                    'gender_type_id'=> fake()->numberBetween(6, 7),
                    'address'=> fake()->address(),
                    'entity_type_id'=> fake()->numberBetween(12, 13),
                    ]);
                    User::create([
                        'third_data_id' => $thirddata['data_id'],
                        'email' => 'miguel1@gmail.com',
                        'password' => '1234',
                        'role' => 'paciente',
                    ]);

                    $thirddata = Third_Data::create([
                        'document_type_id' => fake()->numberBetween(8, 11),
                        'identification_number'=>fake()->randomNumber($length=12),
                        'first_name' =>fake() ->firstName(),
                        'second_name'=>fake() ->firstName(),
                        'sur_name'=>fake() ->lastName(),
                        'second_sur_name'=>fake() ->lastName(),
                        'number_phone'=> fake()->phoneNumber(),
                        'birth_date'=>fake()->date(),
                        'gender_type_id'=> fake()->numberBetween(6, 7),
                        'address'=> fake()->address(),
                        'entity_type_id'=> fake()->numberBetween(12, 13),
                        ]);
                        User::create([
                            'third_data_id' => $thirddata['data_id'],
                            'email' => 'migueladmin@gmail.com',
                            'password' => '1234',
                            'role' => 'admin',
                        ]);

    }
}
