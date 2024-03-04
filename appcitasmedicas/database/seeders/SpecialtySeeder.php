<?php

namespace Database\Seeders;

use App\Models\Specialty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecialtySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Specialty::create([
            'name' => 'Alergólogo',
        ]);
        Specialty::create([
            'name' => 'Anestesiólogo',
        ]);
        Specialty::create([
            'name' => 'Cardiólogo',
        ]);
        Specialty::create([
            'name' => 'Cardiólogo Pediatra',
        ]);
        Specialty::create([
            'name' => 'Cirujano General',
        ]);
        Specialty::create([
            'name' => 'Cirujano Pediátrico',
        ]);
        Specialty::create([
            'name' => 'Cirujano Plástico',
        ]);
        Specialty::create([
            'name' => 'Cirujano Vascular',
        ]);
        Specialty::create([
            'name' => 'Dermatólogo',
        ]);
        Specialty::create([
            'name' => 'Especialista en Dolor y Cuidados Paliativos',
        ]);
        Specialty::create([
            'name' => 'Endocrinólogo',
        ]);
        Specialty::create([
            'name' => 'Endocrinólogo Pediatra',
        ]);
        Specialty::create([
            'name' => 'Fonoaudiólogo',
        ]);
        Specialty::create([
            'name' => 'Gastroenterólogo',
        ]);
        Specialty::create([
            'name' => 'Ginecólogo',
        ]);
        Specialty::create([
            'name' => 'Internista',
        ]);
        Specialty::create([
            'name' => 'Nefrólogo',
        ]);
        Specialty::create([
            'name' => 'Nefrólogo Pediatra',
        ]);
        Specialty::create([
            'name' => 'Neumólogo',
        ]);
        Specialty::create([
            'name' => 'Neumólogo Pediatra',
        ]);
        Specialty::create([
            'name' => 'Neurocirujano',
        ]);
        Specialty::create([
            'name' => 'Neurólogo',
        ]);
        Specialty::create([
            'name' => 'Neurólogo Infantil',
        ]);
        Specialty::create([
            'name' => 'Nutricionista',
        ]);
        Specialty::create([
            'name' => 'Odontólogo',
        ]);
        Specialty::create([
            'name' => 'Ortopedista',
        ]);
        Specialty::create([
            'name' => 'Otorrinolaringólogo',
        ]);
        Specialty::create([
            'name' => 'Otorrinolaringólogo Infantil',
        ]);
        Specialty::create([
            'name' => 'Pediatra',
        ]);
        Specialty::create([
            'name' => 'Psicólogo',
        ]);
        Specialty::create([
            'name' => 'Psiquiatra',
        ]);
        Specialty::create([
            'name' => 'Reumatólogo',
        ]);
        Specialty::create([
            'name' => 'Urólogo']);
    }
}
