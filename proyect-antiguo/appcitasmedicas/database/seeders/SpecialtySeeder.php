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
            'name'=>'Alergología',
        ]);
        Specialty::create([
            'name'=>'Anestesiología',
        ]);
        Specialty::create([
            'name'=>'Cardiología',
        ]);
        Specialty::create([
            'name'=>'Cardiología Pediátrica',
        ]);
        Specialty::create([
            'name'=>'Cirugía General',
        ]);
        Specialty::create([
            'name'=>'Cirugía Pediátrica',
        ]);
        Specialty::create([
            'name'=>'Cirugía Plástica',
        ]);
        Specialty::create([
            'name'=>'Cirugía Vascular Periférica',
        ]);
        Specialty::create([
            'name'=>'Dermatología',
        ]);
        Specialty::create([
            'name'=>'Dolor y Cuidados Paliativos',
        ]);
        Specialty::create([
            'name'=>'Endocrinología',
        ]);
        Specialty::create([
            'name'=>'Endocrinología Pediátrica',
        ]);
        Specialty::create([
            'name'=> 'Fonoaudiología',
        ]);
        Specialty::create([
            'name'=>'Gastroenterología',
        ]);
        Specialty::create([
            'name'=>'Ginecología',
        ]);
        Specialty::create([
            'name'=>'Medicia Interna',
        ]);
        Specialty::create([
            'name'=>'Nefrología',
        ]);
        Specialty::create([
            'name'=>'Nefrología Pediátrica',
        ]);
        Specialty::create([
            'name'=>'Neumología',
        ]);
        Specialty::create([
            'name'=>'Neumología Pediátrica',
        ]);
        Specialty::create([
            'name'=>'Neurocirugía',
        ]);
        Specialty::create([
            'name'=>'Neurología',
        ]);
        Specialty::create([
            'name'=> 'Neurología Infantil',
        ]);
        Specialty::create([
            'name'=>'Nutricionista',
        ]);
        Specialty::create([
            'name'=>'Odontología',
        ]);
        Specialty::create([
            'name'=>'Ortopedia y Traumatología',
        ]);
        Specialty::create([
            'name'=>'Otorrinolaringología',
        ]);
        Specialty::create([
            'name'=>'Otorrinolaringología Infantil',
        ]);
        Specialty::create([
            'name'=>'Pediatría',
        ]);
        Specialty::create([
            'name'=>'Psicología',
        ]);
        Specialty::create([
            'name'=>'Psiquiatría',
        ]);
        Specialty::create([
            'name'=>'Reumatología',
        ]);
        Specialty::create([
            'name'=>'Urología ',
        ]);
    }
}
