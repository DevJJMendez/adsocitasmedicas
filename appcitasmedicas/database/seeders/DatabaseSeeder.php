<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            HeaderSeeder::class,
            DetailSeeder::class,
            Rolseeder::class,
            Medical_Entity_Seeder::class,
            ThirdDataSeeder::class,
            ProfessionSeeder::class,
        ]);
    }
}
