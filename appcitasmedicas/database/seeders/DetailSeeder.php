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
            'value'=>'active',
            'nomenclature' => 'ACT',
        ]);
        Detail::create([
            'id_header' => 1,
            'value'=>'inactive',
            'nomenclature' => 'INA',
        ]);
        Detail::create([
            'id_header' => 1,
            'value'=>'waiting',
            'nomenclature' => 'WAI',
        ]);
        Detail::create([
            'id_header' => 1,
            'value'=>'attended',
            'nomenclature' => 'ATT',
        ]);
        Detail::create([
            'id_header' => 1,
            'value'=>'cancelled',
            'nomenclature' => 'CANC',
        ]);
    }
}
