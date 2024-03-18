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
            SpecialtySeeder::class,
            Medical_Entity_Seeder::class,
            ThirdDataSeeder::class,
            MedicoSeeder::class,
            PacienteSeeder::class,
        ]);
    }
}
