<?php

namespace Database\Seeders;

use App\Models\CommonAttribute;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    public function run(): void
    {
        $commonAttribute = CommonAttribute::create([
            'name' => 'active',
            'nomenclature' => 'act',
        ]);
        $commonAttribute->status()->create([
            'id_common_attribute' => $commonAttribute->common_attribute_id,
        ]);

        $commonAttribute = CommonAttribute::create([
            'name' => 'inactive',
            'nomenclature' => 'inac',
        ]);
        $commonAttribute->status()->create([
            'id_common_attribute' => $commonAttribute->common_attribute_id,
        ]);

        $commonAttribute = CommonAttribute::create([
            'name' => 'en espera',
            'nomenclature' => 'eesp',
        ]);
        $commonAttribute->status()->create([
            'id_common_attribute' => $commonAttribute->common_attribute_id,
        ]);

        $commonAttribute = CommonAttribute::create([
            'name' => 'atendida',
            'nomenclature' => 'atda',
        ]);
        $commonAttribute->status()->create([
            'id_common_attribute' => $commonAttribute->common_attribute_id,
        ]);

        $commonAttribute = CommonAttribute::create([
            'name' => 'cancelada',
            'nomenclature' => 'canc',
        ]);
        $commonAttribute->status()->create([
            'id_common_attribute' => $commonAttribute->common_attribute_id,
        ]);
    }
}
