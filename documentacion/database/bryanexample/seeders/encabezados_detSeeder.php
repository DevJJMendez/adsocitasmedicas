<?php

namespace Database\Seeders;

use App\Models\encabezados_det;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class encabezados_detSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        encabezados_det::create([
            'encabezados_id' => '1',
            'nombre' => 'Cedula de Ciudadania',
            'nomenclatura'=>'CC'
        ]);
        encabezados_det::create([
            'encabezados_id' => '1',
            'nombre' => 'Tarjeta de Identidad',
            'nomenclatura'=>'TI'
        ]);
        encabezados_det::create([
            'encabezados_id' => '1',
            'nombre' => 'Permiso de Permanencia',
            'nomenclatura'=>'PPT'
        ]);
        encabezados_det::create([
            'encabezados_id' => '2',
            'nombre' => 'Carro',
            'nomenclatura'=>'CAR'
        ]);
        encabezados_det::create([
            'encabezados_id' => '2',
            'nombre' => 'Moto',
            'nomenclatura'=>'MOT'
        ]);
        encabezados_det::create([
            'encabezados_id' => '2',
            'nombre' => 'Bicicleta',
            'nomenclatura'=>'BIC'
        ]);
        encabezados_det::create([
            'encabezados_id' => '3',
            'nombre' => 'Masculino',
            'nomenclatura'=>'MAS'
        ]);
        encabezados_det::create([
            'encabezados_id' => '3',
            'nombre' => 'Femenino',
            'nomenclatura'=>'FEM'
        ]);
        encabezados_det::create([
            'encabezados_id' => '4',
            'nombre' => 'Aprendiz',
            'nomenclatura'=>'APR'
        ]);
        encabezados_det::create([
            'encabezados_id' => '4',
            'nombre' => 'Instructor',
            'nomenclatura'=>'CON'
        ]);
        encabezados_det::create([
            'encabezados_id' => '4',
            'nombre' => 'Contratista',
            'nomenclatura'=>'CON'
        ]);
        encabezados_det::create([
            'encabezados_id' => '4',
            'nombre' => 'Vigilante',
            'nomenclatura'=>'VIG'
        ]);
        encabezados_det::create([
            'encabezados_id' => '4',
            'nombre' => 'Visitante',
            'nomenclatura'=>'VIS'
        ]);
    }
}
