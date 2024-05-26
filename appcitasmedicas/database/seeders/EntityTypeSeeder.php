<?php

namespace Database\Seeders;

use App\Models\CommonAttribute;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EntityTypeSeeder extends Seeder
{
    public function run(): void
    {
        $commonAttribute = CommonAttribute::create([
            'common_attribute_id' => 8,
            'name' => 'eps',
            'nomenclature' => null,
        ]);
        $commonAttribute->entityType()->create([
            'id_common_attribute' => $commonAttribute->common_attribute_id,
        ]);

        $commonAttribute = CommonAttribute::create([
            'common_attribute_id' => 9,
            'name' => 'ips',
            'nomenclature' => null,
        ]);
        $commonAttribute->entityType()->create([
            'id_common_attribute' => $commonAttribute->common_attribute_id,
        ]);
    }
}
