<?php

namespace Database\Seeders;

use App\Models\Profession;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfessionSeeder extends Seeder
{
    public function run(): void
    {
        Profession::create([
            'name'=>'Alergólogo',
        ]);
        Profession::create([
            'name'=>'Anestesiólogo',
        ]);
        Profession::create([
            'name'=>'Cardiólogo',
        ]);
        Profession::create([
            'name'=>'Cardiólogo Pediatra',
        ]);
        Profession::create([
            'name'=>'Cirujano General',
        ]);
        Profession::create([
            'name'=>'Cirujano Pediátrico',
        ]);
        Profession::create([
            'name'=>'Cirujano Plástico',
        ]);
        Profession::create([
            'name'=>'Cirujano Vascular',
        ]);
        Profession::create([
            'name'=>'Dermatólogo',
        ]);
        Profession::create([
            'name'=>'Especialista en Dolor y Cuidados Paliativos',
        ]);
        Profession::create([
            'name'=>'Endocrinólogo',
        ]);
        Profession::create([
            'name'=>'Endocrinólogo Pediatra',
        ]);
        Profession::create([
            'name'=> 'Fonoaudiólogo',
        ]);
        Profession::create([
            'name'=>'Gastroenterólogo',
        ]);
        Profession::create([
            'name'=>'Ginecólogo',
        ]);
        Profession::create([
            'name'=>'Internista',
        ]);
        Profession::create([
            'name'=>'Nefrólogo',
        ]);
        Profession::create([
            'name'=>'Nefrólogo Pediatra',
        ]);
        Profession::create([
            'name'=>'Neumólogo',
        ]);
        Profession::create([
            'name'=>'Neumólogo Pediatra',
        ]);
        Profession::create([
            'name'=>'Neurocirujano',
        ]);
        Profession::create([
            'name'=>'Neurólogo',
        ]);
        Profession::create([
            'name'=> 'Neurólogo Infantil',
        ]);
        Profession::create([
            'name'=>'Nutricionista',
        ]);
        Profession::create([
            'name'=>'Odontólogo',
        ]);
        Profession::create([
            'name'=>'Ortopedista',
        ]);
        Profession::create([
            'name'=>'Otorrinolaringólogo',
        ]);
        Profession::create([
            'name'=>'Otorrinolaringólogo Infantil',
        ]);
        Profession::create([
            'name'=>'Pediatra',
        ]);
        Profession::create([
            'name'=>'Psicólogo',
        ]);
        Profession::create([
            'name'=>'Psiquiatra',
        ]);
        Profession::create([
            'name'=>'Reumatólogo',
        ]);
        Profession::create([
            'name'=>'Urólogo',
        ]);
    }
}
