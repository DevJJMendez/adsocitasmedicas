<?php

namespace Database\Seeders;

use App\Models\Header;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Header::create([
            'key' => 'Estado',
        ]);
        Header::create([
            'key' => 'Genero',
        ]);
        Header::create([
            'key' => 'Tipo de documento',
        ]);
        Header::create([
            'key' => 'Tipo de contacto',
        ]);
        Header::create([
            'key' => 'Tipo de entidad',
        ]);
        Header::create([
            'key' => 'Tipo de correo',
        ]);
        Header::create([
            'key' => 'Prioridad',
        ]);
    }
}
