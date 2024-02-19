<?php

namespace App\Http\Controllers;

use App\Models\Objeto;
use App\Models\Personal;
use Illuminate\Http\Request;

/**
 * Class ObjetoController
 * @package App\Http\Controllers
 */
class ObjetoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objetos = Objeto::all()->where('estado', '1');
        $personals = Personal::all()->where('estado', '1');

        return view('objeto.index', compact('objetos','personals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $personal = null;

        // Si se proporciona un documento, busca el personal y pasa los datos al formulario
        if ($documento = $request->input('documento')) {
            $personal = Personal::where('numero_documento', $documento)->first();

            // Verifica si se encontró un personal con el documento proporcionado
            if (!$personal) {
                // Si no se encuentra el personal, se podría redirigir con un mensaje de error
                return redirect()->route('objetos.create')->with('success', 'No se encontró ningún personal con el número de documento proporcionado.');
            }
        }

        $objeto = new Objeto();
        return view('objeto.create', compact('objeto', 'personal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Objeto::$rules);

        $objeto = Objeto::create($request->all());

        return redirect()->route('objetos.index')
            ->with('success', 'Objeto Creado con Exito.')
            ->with('tittle', 'Guardado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $objeto = Objeto::find($id);

        return view('objeto.show', compact('objeto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $objeto = Objeto::find($id);
        $personal = Personal::where('id', $objeto->personal_id)->first();
        return view('objeto.edit', compact('objeto','personal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Objeto $objeto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Objeto $objeto)
    {
        request()->validate(Objeto::$rules);

        $objeto->update($request->all());

        return redirect()->route('objetos.index')
            ->with('success', 'Objeto Actualizado con Exito')
            ->with('tittle', 'Actualizado');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $objeto = Objeto::find($id);

        if ($objeto) {
            // Actualiza el estado a 0 en lugar de eliminar físicamente
            $objeto->update(['estado' => 0]);

            // También puedes realizar acciones adicionales si es necesario

            return redirect()->route('objetos.index')
                ->with('success', 'objeto eliminado con éxito')
                ->with('tittle', 'Eliminado');
        } else {
            return redirect()->route('objetos.index')
                ->with('success', 'No se encontró el Objeto');
        }
    }
}
