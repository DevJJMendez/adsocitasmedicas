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
        $specialties = Specialty::select(['specialty_id', 'name'])->paginate(10);
        return view('specialties.index', compact('specialties'));
    }
    public function create()
    {
        return view('specialties.create');
    }
    public function store(SpecialtyRequest $specialtyRequest)
    {
        Specialty::create([
            'name' => $specialtyRequest->name,
        ]);
        notify()->success('Especialidad agregada correctamente', 'Agregar');
        return redirect()->route('specialtyView');
    }
    public function edit(Specialty $specialty)
    {
        return view('specialties.edit', compact('specialty'));
    }
    public function update(SpecialtyRequest $specialtyRequest, Specialty $specialty)
    {
        $specialty->update($specialtyRequest->all());
        notify()->success('Especialidad editada correctamente', 'Editar');
        return redirect()->route('specialtyView');
    }
    public function delete(Specialty $specialty)
    {
        $specialty->delete();
        notify()->error('Especialidad eliminada correctamente', 'Eliminar');
        return redirect()->route('specialtyView');
    }
}
