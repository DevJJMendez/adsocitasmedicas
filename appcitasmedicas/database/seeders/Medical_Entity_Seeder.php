<?php

namespace Database\Seeders;

use App\Models\Medical_Entities;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Medical_Entity_Seeder extends Seeder
{
    public function run(): void
    {
        Medical_Entities::create([
            'business_name' => 'HOSPITAL SAN MARCO',
            'nit' => fake()->numberBetween(100000000, 999999999),
            'number_phone' => fake()->phoneNumber(),
            'email' => fake()->email(),
            'id_entity_type' => fake()->numberBetween(1, 2),
            'address' => fake()->streetAddress(),
        ]);

        Medical_Entities::create([
            'business_name' => 'ANASWAYUU',
            'nit' => fake()->numberBetween(100000000, 999999999),
            'number_phone' => fake()->phoneNumber(),
            'email' => fake()->email(),
            'id_entity_type' => fake()->numberBetween(1, 2),
            'address' => fake()->streetAddress(),
        ]);

        Medical_Entities::create([
            'business_name' => 'ASOCIACIÓN INDÍGENA DEL CAUCA',
            'nit' => fake()->numberBetween(100000000, 999999999),
            'number_phone' => fake()->phoneNumber(),
            'email' => fake()->email(),
            'id_entity_type' => fake()->numberBetween(1, 2),
            'address' => fake()->streetAddress(),
        ]);

        Medical_Entities::create([
            'business_name' => 'ASOCIACION MUTUAL',
            'nit' => fake()->numberBetween(100000000, 999999999),
            'number_phone' => fake()->phoneNumber(),
            'email' => fake()->email(),
            'id_entity_type' => fake()->numberBetween(1, 2),
            'address' => fake()->streetAddress(),
        ]);
        Medical_Entities::create([
            'business_name' => 'COMPENSAR',
            'nit' => fake()->numberBetween(100000000, 999999999),
            'number_phone' => fake()->phoneNumber(),
            'email' => fake()->email(),
            'id_entity_type' => fake()->numberBetween(1, 2),
            'address' => fake()->streetAddress(),
        ]);

        Medical_Entities::create([
            'business_name' => 'SANITAS',
            'nit' => fake()->numberBetween(100000000, 999999999),
            'number_phone' => fake()->phoneNumber(),
            'email' => fake()->email(),
            'id_entity_type' => fake()->numberBetween(1, 2),
            'address' => fake()->streetAddress(),
        ]);

        Medical_Entities::create([
            'business_name' => 'SERVICIO OCCIDENTAL DE SALUD',
            'nit' => fake()->numberBetween(100000000, 999999999),
            'number_phone' => fake()->phoneNumber(),
            'email' => fake()->email(),
            'id_entity_type' => fake()->numberBetween(1, 2),
            'address' => fake()->streetAddress(),
        ]);

        Medical_Entities::create([
            'business_name' => 'HOSPITAL SURAMERICANA',
            'nit' => fake()->numberBetween(100000000, 999999999),
            'number_phone' => fake()->phoneNumber(),
            'email' => fake()->email(),
            'id_entity_type' => fake()->numberBetween(1, 2),
            'address' => fake()->streetAddress(),
        ]);

        Medical_Entities::create([
            'business_name' => 'FUNDACIÓN SALUD MIA',
            'nit' => fake()->numberBetween(100000000, 999999999),
            'number_phone' => fake()->phoneNumber(),
            'email' => fake()->email(),
            'id_entity_type' => fake()->numberBetween(1, 2),
            'address' => fake()->streetAddress(),
        ]);

        Medical_Entities::create([
            'business_name' => 'HOSPITAL NUEVO HORIZONTE',
            'nit' => fake()->numberBetween(100000000, 999999999),
            'number_phone' => fake()->phoneNumber(),
            'email' => fake()->email(),
            'id_entity_type' => fake()->numberBetween(1, 2),
            'address' => fake()->streetAddress(),
        ]);

        Medical_Entities::create([
            'business_name' => 'SALUD TOTAL',
            'nit' => fake()->numberBetween(100000000, 999999999),
            'number_phone' => fake()->phoneNumber(),
            'email' => fake()->email(),
            'id_entity_type' => fake()->numberBetween(1, 2),
            'address' => fake()->streetAddress(),
        ]);
        Medical_Entities::create([
            'business_name' => 'Fundacion Santa Fe',
            'nit' => fake()->numberBetween(100000000, 999999999),
            'number_phone' => fake()->phoneNumber(),
            'email' => fake()->email(),
            'id_entity_type' => fake()->numberBetween(1, 2),
            'address' => fake()->streetAddress(),
        ]);

        Medical_Entities::create([
            'business_name' => 'Hospital Pablo Tobon',
            'nit' => fake()->numberBetween(100000000, 999999999),
            'number_phone' => fake()->phoneNumber(),
            'email' => fake()->email(),
            'id_entity_type' => fake()->numberBetween(1, 2),
            'address' => fake()->streetAddress(),
        ]);

        Medical_Entities::create([
            'business_name' => 'Clinica Los Andes',
            'nit' => fake()->numberBetween(100000000, 999999999),
            'number_phone' => fake()->phoneNumber(),
            'email' => fake()->email(),
            'id_entity_type' => fake()->numberBetween(1, 2),
            'address' => fake()->streetAddress(),
        ]);

        Medical_Entities::create([
            'business_name' => 'Clinica Colsanitas',
            'nit' => fake()->numberBetween(100000000, 999999999),
            'number_phone' => fake()->phoneNumber(),
            'email' => fake()->email(),
            'id_entity_type' => fake()->numberBetween(1, 2),
            'address' => fake()->streetAddress(),
        ]);

        Medical_Entities::create([
            'business_name' => 'Hospital San Jose',
            'nit' => fake()->numberBetween(100000000, 999999999),
            'number_phone' => fake()->phoneNumber(),
            'email' => fake()->email(),
            'id_entity_type' => fake()->numberBetween(1, 2),
            'address' => fake()->streetAddress(),
        ]);
    }
}
