<?php

namespace Database\Seeders;

use App\Models\Detail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Detail::create([
            'id_header' => 1,
            'value'=>'Activo',
            'nomenclature' => 'ACT',
        ]);
        Detail::create([
            'id_header' => 1,
            'value'=>'Inactivo',
            'nomenclature' => 'INAC',
        ]);
        Detail::create([
            'id_header' => 1,
            'value'=>'En Espera',
            'nomenclature' => 'EESP',
        ]);
        Detail::create([
            'id_header' => 1,
            'value'=>'Atendida',
            'nomenclature' => 'ATDA',
        ]);
        Detail::create([
            'id_header' => 1,
            'value'=>'Cancelada',
            'nomenclature' => 'CANC',
        ]);

        Detail::create([
            'id_header' => 2,
            'value'=>'Masculino',
            'nomenclature' => 'M',
        ]);
        Detail::create([
            'id_header' => 2,
            'value'=>'Femenino',
            'nomenclature' => 'F',
        ]);

        Detail::create([
            'id_header' => 3,
            'value'=>'Cedula de Ciudadania',
            'nomenclature' => 'CC',
        ]);
        Detail::create([
            'id_header' => 3,
            'value'=>'Tarjeta de Identidad',
            'nomenclature' => 'TI',
        ]);
        Detail::create([
            'id_header' => 3,
            'value'=>'Registro Civil',
            'nomenclature' => 'RC',
        ]);
        Detail::create([
            'id_header' => 3,
            'value'=>'Cédula de Extranjería',
            'nomenclature' => 'CE',
        ]);

        Detail::create([
            'id_header' => 4,
            'value'=>'Telefono',
            'nomenclature' => null,
        ]);
        Detail::create([
            'id_header' => 4,
            'value'=>'Telefono',
            'nomenclature' => null,
        ]);
        // TODO: check
    }
}
