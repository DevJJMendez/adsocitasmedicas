<?php

namespace Database\Seeders;

use App\Models\Medical_Entities;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Medical_Entity_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Medical_Entities::create([
            'nit' => fake()->numberBetween(100000000, 999999999),
            'number_phone' => '018000123703',
            'email' => 'aliansalud@gemail.com',
            'entity_type_id' => fake()->numberBetween(12, 13),
            'business_name' => 'ALIANSALUD ENTIDAD PROMOTORA DE SALUD S.A.',
            'address' => 'Cr 65 11-50, Piso 2, Lc 2-87 y 2-88
            Plaza Central',
            'statu_type_id' => 1,
        ]);

        Medical_Entities::create([
            'nit' => fake()->numberBetween(100000000, 999999999),
            'number_phone' => '018000962780',
            'email' => 'atencioninicialdeurgencias@epsianaswayuu.com',
            'entity_type_id' => fake()->numberBetween(12, 13),
            'business_name' => 'ANASWAYUU',
            'address' => 'Carrera 16 No. 16 - 31',
            'statu_type_id' => 1,
        ]);

        Medical_Entities::create([
            'nit' => fake()->numberBetween(100000000, 999999999),
            'number_phone' => '018000930135',
            'email' => 'notificacionesjudiciales@aicsalud.org.co',
            'entity_type_id' => fake()->numberBetween(12, 13),
            'business_name' => 'ASOCIACIÓN INDÍGENA DEL CAUCA',
            'address' => 'Calle 1 # 4-66, Barrio Vasquez',
            'statu_type_id' => 1,
        ]);

        Medical_Entities::create([
            'nit' => fake()->numberBetween(100000000, 999999999),
            'number_phone' => '018000116882',
            'email' => 'afiliacion@mutualser.com',
            'entity_type_id' => fake()->numberBetween(12, 13),
            'business_name' => 'ASOCIACION MUTUAL SER EMPRESA SOLIDARIA DE SALUD EPS',
            'address' => 'Carretera. Troncal No. 71B-105',
            'statu_type_id' => 1,
        ]);
        Medical_Entities::create([
            'nit' => fake()->numberBetween(100000000, 999999999),
            'number_phone' => '018000913202',
            'email' => 'compensar@gemail.com',
            'entity_type_id' => fake()->numberBetween(12, 13),
            'business_name' => 'COMPENSAR E.P.S.',
            'address' => 'Avenida 68 # 49A-47',
            'statu_type_id' => 1,
        ]);

        Medical_Entities::create([
            'nit' => fake()->numberBetween(100000000, 999999999),
            'number_phone' => '018000117636',
            'email' => 'sanitas@gemail.com',
            'entity_type_id' => fake()->numberBetween(12, 13),
            'business_name' => 'E.P.S. SANITAS S.A.',
            'address' => 'Carretera. Troncal No. 32B – 172',
            'statu_type_id' => 1,
        ]);

        Medical_Entities::create([
            'nit' => fake()->numberBetween(100000000, 999999999),
            'number_phone' => '018000938777',
            'email' => 'notificacionesjudiciales@sos.com.co',
            'entity_type_id' => fake()->numberBetween(12, 13),
            'business_name' => 'EPS SERVICIO OCCIDENTAL DE SALUD S.A.',
            'address' => 'Calle 23 AN 3N-57',
            'statu_type_id' => 1,
        ]);

        Medical_Entities::create([
            'nit' => fake()->numberBetween(100000000, 999999999),
            'number_phone' => '018000519519',
            'email' => 'notificacionesjudiciales@suramericana.com.co',
            'entity_type_id' => fake()->numberBetween(12, 13),
            'business_name' => 'EPS Y MEDICINA PREPAGADA SURAMERICANA S.A',
            'address' => 'Carrera 49 C # 80 - 176',
            'statu_type_id' => 1,
        ]);

        Medical_Entities::create([
            'nit' => fake()->numberBetween(100000000, 999999999),
            'number_phone' => '018000980001',
            'email' => 'contacto@saludmia.org',
            'entity_type_id' => fake()->numberBetween(12, 13),
            'business_name' => 'FUNDACIÓN SALUD MIA EPS',
            'address' => 'Carrera 49 C # 23-22',
            'statu_type_id' => 1,
        ]);

        Medical_Entities::create([
            'nit' => fake()->numberBetween(100000000, 999999999),
            'number_phone' => '018000930100',
            'email' => 'nuevaeps@gemail.org',
            'entity_type_id' => fake()->numberBetween(12, 13),
            'business_name' => 'NUEVA EPS S.A.',
            'address' => 'Carrera 85K No. 46A-66',
            'statu_type_id' => 1,
        ]);

        Medical_Entities::create([
            'nit' => fake()->numberBetween(100000000, 999999999),
            'number_phone' => '018000112524',
            'email' => 'saludtotal@gemail.org',
            'entity_type_id' => fake()->numberBetween(12, 13),
            'business_name' => 'SALUD TOTAL S.A. E.P.S.',
            'address' => 'Carrera 100a No. 63A-92',
            'statu_type_id' => 1,
        ]);
        Medical_Entities::create([
            'nit' => fake()->numberBetween(100000000, 999999999),
            'number_phone' => '018000765874',
            'email' => 'santafe@gemail.com',
            'entity_type_id' => fake()->numberBetween(12, 13),
            'business_name' => 'Fundacion Santa Fe',
            'address' => 'Cr 65 11-50',
            'statu_type_id' => 1,
        ]);

        Medical_Entities::create([
            'nit' => fake()->numberBetween(100000000, 999999999),
            'number_phone' => '0180006547830',
            'email' => 'hpablotobon@epsianaswayuu.com',
            'entity_type_id' => fake()->numberBetween(12, 13),
            'business_name' => 'Hospital Pablo Tobon',
            'address' => 'Carrera 16 No. 16-31',
            'statu_type_id' => 1,
        ]);

        Medical_Entities::create([
            'nit' => fake()->numberBetween(100000000, 999999999),
            'number_phone' => '018000234563',
            'email' => 'clinicashaio@org.co',
            'entity_type_id' => fake()->numberBetween(12, 13),
            'business_name' => 'Fundacion Clinica Shaio',
            'address' => 'Calle 1 # 4-66-727',
            'statu_type_id' => 1,
        ]);

        Medical_Entities::create([
            'nit' => fake()->numberBetween(100000000, 999999999),
            'number_phone' => '0180009874566',
            'email' => 'clinica@colsanitas.com',
            'entity_type_id' => fake()->numberBetween(12, 13),
            'business_name' => 'Clinica Colsanitas',
            'address' => 'Troncal No. 22B 105',
            'statu_type_id' => 1,
        ]);

        Medical_Entities::create([
            'nit' => fake()->numberBetween(100000000, 999999999),
            'number_phone' => '018000625341',
            'email' => 'sanjose@gemail.com',
            'entity_type_id' => fake()->numberBetween(12, 13),
            'business_name' => 'Hospital San Jose',
            'address' => 'Avenida 68 # 49A-47',
            'statu_type_id' => 1,
        ]);
    }
}
