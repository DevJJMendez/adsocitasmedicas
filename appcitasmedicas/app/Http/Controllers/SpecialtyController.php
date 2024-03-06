<?php

namespace App\Http\Controllers;

use App\Http\Requests\SpecialtyRequest;
use App\Models\Specialty;

class SpecialtyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('can:Administrador');

    }
    public function index()
    {
        $specialties = Specialty::select(['specialty_id', 'name'])->get();
        return view('specialties.index', compact('specialties'));
    }
    public function create()
    {
        return view('specialties.create');
    }
    public function createNewSpecialty(SpecialtyRequest $specialtyRequest)
    {
        Specialty::create([
            'name' => $specialtyRequest->name,
        ]);
        notify()->success('Especialidad agregada correctamente', 'Agregar');
        return redirect()->route('specialtyView');
    }
    public function especialtyEdit(Specialty $specialty)
    {
        return view('specialties.edit', compact('specialty'));
    }
    public function updateSpecialty(SpecialtyRequest $specialtyRequest, Specialty $specialty)
    {
        $specialty->update($specialtyRequest->all());
        notify()->success('Especialidad editada correctamente', 'Editar');
        return redirect()->route('specialtyView');
    }
    public function deleteSpecialty(Specialty $specialty)
    {
        $specialty->delete();
        notify()->error('Especialidad eliminada correctamente', 'Eliminar');
        return redirect()->route('specialtyView');
    }
}
