<?php

namespace Database\Seeders;

use App\Models\CommonAttribute;
use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    public function run(): void
    {
        $commonAttribute = CommonAttribute::create([
            'common_attribute_id' => 1,
            'name' => 'activo',
            'nomenclature' => 'act',
        ]);
        Status::create([
            'id_common_attribute' => $commonAttribute['common_attribute_id'],
        ]);

        $commonAttribute = CommonAttribute::create([
            'common_attribute_id' => 2,
            'name' => 'inactivo',
            'nomenclature' => 'inac',
        ]);
        Status::create([
            'id_common_attribute' => $commonAttribute['common_attribute_id'],
        ]);

        $commonAttribute = CommonAttribute::create([
            'common_attribute_id' => 3,
            'name' => 'en espera',
            'nomenclature' => 'eesp',
        ]);
        Status::create([
            'id_common_attribute' => $commonAttribute['common_attribute_id'],
        ]);

        $commonAttribute = CommonAttribute::create([
            'common_attribute_id' => 4,
            'name' => 'atendida',
            'nomenclature' => 'atda',
        ]);
        Status::create([
            'id_common_attribute' => $commonAttribute['common_attribute_id'],
        ]);

        $commonAttribute = CommonAttribute::create([
            'common_attribute_id' => 5,
            'name' => 'cancelada',
            'nomenclature' => 'canc',
        ]);
        Status::create([
            'id_common_attribute' => $commonAttribute['common_attribute_id'],
        ]);
    }
}
