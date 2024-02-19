<?php

namespace App\Http\Controllers;

use App\Models\Ficha;
use Illuminate\Http\Request;

/**
 * Class FichaController
 * @package App\Http\Controllers
 */
class FichaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fichas = Ficha::all()
        ->where('estado','1');

        return view('ficha.index', compact('fichas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ficha = new Ficha();
        return view('ficha.create', compact('ficha'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Ficha::$rules);

        $ficha = Ficha::create($request->all());

        return redirect()->route('fichas.index')
            ->with('success', 'Ficha Creada con Exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ficha = Ficha::find($id);

        return view('ficha.show', compact('ficha'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ficha = Ficha::find($id);

        return view('ficha.edit', compact('ficha'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Ficha $ficha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ficha $ficha)
    {
        request()->validate(Ficha::$rules);

        $ficha->update($request->all());

        return redirect()->route('fichas.index')
            ->with('success', 'Ficha Actualizada Con exito');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ficha = Ficha::find($id);

        if ($ficha) {
            // Actualiza el estado a 0 en lugar de eliminar físicamente
            $ficha->update(['estado' => 0]);

            // También puedes realizar acciones adicionales si es necesario
            return redirect()->route('fichas.index')
            ->with('success', 'ficha eliminado con éxito')
            ->with('title', 'Eliminado');
    } else {
        return redirect()->route('fichas.index')
            ->with('error', 'No se encontró la ficha');
    }
    }
}
