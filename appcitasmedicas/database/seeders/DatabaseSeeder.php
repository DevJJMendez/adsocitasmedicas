<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            StatusSeeder::class,
            GenderSeeder::class,
            EntityTypeSeeder::class,
            DocumentTypeSeeder::class,
            Medical_Entity_Seeder::class,
        ]);
    }
}
