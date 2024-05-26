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
            'number_phone' => '01800083703',
            'email' => fake()->email(),
            'id_entity_type' => fake()->numberBetween(1, 2),
            'address' => 'Barranquilla',
            'id_status' => 1,
        ]);

        Medical_Entities::create([
            'business_name' => 'ANASWAYUU',
            'nit' => fake()->numberBetween(100000000, 999999999),
            'number_phone' => '018000962780',
            'email' => fake()->email(),
            'id_entity_type' => fake()->numberBetween(1, 2),
            'address' => 'Barranquilla',
            'id_status' => 1,
        ]);

        Medical_Entities::create([
            'business_name' => 'ASOCIACIÓN INDÍGENA DEL CAUCA',
            'nit' => fake()->numberBetween(100000000, 999999999),
            'number_phone' => '01800093095',
            'email' => fake()->email(),
            'id_entity_type' => fake()->numberBetween(1, 2),
            'address' => 'Barranquilla',
            'id_status' => 1,
        ]);

        Medical_Entities::create([
            'business_name' => 'ASOCIACION MUTUAL',
            'nit' => fake()->numberBetween(100000000, 999999999),
            'number_phone' => '018000116882',
            'email' => fake()->email(),
            'id_entity_type' => fake()->numberBetween(1, 2),
            'address' => 'Barranquilla',
            'id_status' => 1,
        ]);
        Medical_Entities::create([
            'business_name' => 'COMPENSAR',
            'nit' => fake()->numberBetween(100000000, 999999999),
            'number_phone' => '01800099202',
            'email' => fake()->email(),
            'id_entity_type' => fake()->numberBetween(1, 2),
            'address' => 'Barranquilla',
            'id_status' => 1,
        ]);

        Medical_Entities::create([
            'business_name' => 'SANITAS',
            'nit' => fake()->numberBetween(100000000, 999999999),
            'number_phone' => '018000117636',
            'email' => fake()->email(),
            'id_entity_type' => fake()->numberBetween(1, 2),
            'address' => 'Barranquilla',
            'id_status' => 1,
        ]);

        Medical_Entities::create([
            'business_name' => 'SERVICIO OCCIDENTAL DE SALUD',
            'nit' => fake()->numberBetween(100000000, 999999999),
            'number_phone' => '018000938777',
            'email' => fake()->email(),
            'id_entity_type' => fake()->numberBetween(1, 2),
            'address' => 'Barranquilla',
            'id_status' => 1,
        ]);

        Medical_Entities::create([
            'business_name' => 'HOSPITAL SURAMERICANA',
            'nit' => fake()->numberBetween(100000000, 999999999),
            'number_phone' => '018000519519',
            'email' => fake()->email(),
            'id_entity_type' => fake()->numberBetween(1, 2),
            'address' => 'Barranquilla',
            'id_status' => 1,
        ]);

        Medical_Entities::create([
            'business_name' => 'FUNDACIÓN SALUD MIA',
            'nit' => fake()->numberBetween(100000000, 999999999),
            'number_phone' => '018000980001',
            'email' => fake()->email(),
            'id_entity_type' => fake()->numberBetween(1, 2),
            'address' => 'Barranquilla',
            'id_status' => 1,
        ]);

        Medical_Entities::create([
            'business_name' => 'HOSPITAL NUEVO HORIZONTE',
            'nit' => fake()->numberBetween(100000000, 999999999),
            'number_phone' => '018000930100',
            'email' => fake()->email(),
            'id_entity_type' => fake()->numberBetween(1, 2),
            'address' => 'Barranquilla',
            'id_status' => 1,
        ]);

        Medical_Entities::create([
            'business_name' => 'SALUD TOTAL',
            'nit' => fake()->numberBetween(100000000, 999999999),
            'number_phone' => '01800018524',
            'email' => fake()->email(),
            'id_entity_type' => fake()->numberBetween(1, 2),
            'address' => 'Carrera 100a No. 63A-92',
            'id_status' => 1,
        ]);
        Medical_Entities::create([
            'business_name' => 'Fundacion Santa Fe',
            'nit' => fake()->numberBetween(100000000, 999999999),
            'number_phone' => '018000765874',
            'email' => fake()->email(),
            'id_entity_type' => fake()->numberBetween(1, 2),
            'address' => 'Cr 65 11-50',
            'id_status' => 1,
        ]);

        Medical_Entities::create([
            'business_name' => 'Hospital Pablo Tobon',
            'nit' => fake()->numberBetween(100000000, 999999999),
            'number_phone' => '0180006547830',
            'email' => fake()->email(),
            'id_entity_type' => fake()->numberBetween(1, 2),
            'address' => 'Carrera 16 No. 16-31',
            'id_status' => 1,
        ]);

        Medical_Entities::create([
            'business_name' => 'Clinica Los Andes',
            'nit' => fake()->numberBetween(100000000, 999999999),
            'number_phone' => '018000234563',
            'email' => fake()->email(),
            'id_entity_type' => fake()->numberBetween(1, 2),
            'address' => 'Calle 1 # 4-66-727',
            'id_status' => 1,
        ]);

        Medical_Entities::create([
            'business_name' => 'Clinica Colsanitas',
            'nit' => fake()->numberBetween(100000000, 999999999),
            'number_phone' => '0180009874566',
            'email' => fake()->email(),
            'id_entity_type' => fake()->numberBetween(1, 2),
            'address' => 'Troncal No. 22B 105',
            'id_status' => 1,
        ]);

        Medical_Entities::create([
            'business_name' => 'Hospital San Jose',
            'nit' => fake()->numberBetween(100000000, 999999999),
            'number_phone' => '018000625341',
            'email' => fake()->email(),
            'id_entity_type' => fake()->numberBetween(1, 2),
            'address' => 'Avenida 68 # 49A-47',
            'id_status' => 1,
        ]);
    }
}
