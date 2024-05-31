<?php

namespace Database\Seeders;

use App\Models\CommonAttribute;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    public function run(): void
    {
        $commonAttribute = CommonAttribute::create([
            'common_attribute_id' => 6,
            'name' => 'masculino',
            'nomenclature' => 'm',
        ]);
        $commonAttribute->gender()->create([
            'id_common_attribute' => $commonAttribute->common_attribute_id,
        ]);

        $commonAttribute = CommonAttribute::create([
            'common_attribute_id' => 7,
            'name' => 'femenino',
            'nomenclature' => 'm',
        ]);
        $commonAttribute->gender()->create([
            'id_common_attribute' => $commonAttribute->common_attribute_id,
        ]);
    }
}
