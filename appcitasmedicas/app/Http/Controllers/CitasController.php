<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Medical_Entities;
use App\Models\Profession;
use Illuminate\Http\Request;

class CitasController extends Controller
{
    
    public function index()
    {
        $profession = Profession::select('profession_id','name')->get();
        return view('citas.citas',compact( 'profession'));
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
