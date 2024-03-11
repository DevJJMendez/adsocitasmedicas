<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Specialty;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Third_Data;
use Spatie\Permission\Models\Role;
class CitasController extends Controller
{

    public function index()
    {
        $specialty = Specialty::select('specialty_id', 'name')->get();
        $medicoRol = Role::where('name', 'Doctor')->first();
        $medicos = $medicoRol->users()->with('thirdDataUser')->get();
        return view('citas.citas', compact('specialty', 'medicos'));

        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Evento $evento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Evento $evento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Evento $evento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evento $evento)
    {
        //
    }
}
