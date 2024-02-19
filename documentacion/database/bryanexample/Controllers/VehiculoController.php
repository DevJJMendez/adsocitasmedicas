<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use App\Models\Vehiculo;
use App\Models\vs_vehiculo;
use Illuminate\Http\Request;

/**
 * Class VehiculoController
 * @package App\Http\Controllers
 */
class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehiculos = Vehiculo::all()->where('estado', '1');
        $personals = Personal::all()->where('estado', '1');

        return view('vehiculo.index', compact('vehiculos', 'personals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $tipo_vehiculo = vs_vehiculo::pluck('nombre', 'id');

        // Inicializa $personal como null
        $personal = null;

        // Si se proporciona un documento, busca el personal y pasa los datos al formulario
        if ($documento = $request->input('documento')) {
            $personal = Personal::where('numero_documento', $documento)->first();

            // Verifica si se encontró un personal con el documento proporcionado
            if (!$personal) {
                // Si no se encuentra el personal, se podría redirigir con un mensaje de error
                return redirect()->route('vehiculos.create')->with('success', 'No se encontró ningún personal con el número de documento proporcionado.');
            }
        }

        // Si no se proporciona un documento o se encuentra un personal, simplemente retorna el formulario vacío
        $vehiculo = new Vehiculo();
        return view('vehiculo.create', compact('vehiculo', 'personal', 'tipo_vehiculo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Vehiculo::$rules);

        $vehiculo = Vehiculo::create($request->all());

        return redirect()->route('vehiculos.index')
        ->with('title', 'Creado')
            ->with('success', 'Vehiculo Creado con Exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehiculo = Vehiculo::find($id);

        return view('vehiculo.show', compact('vehiculo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipo_vehiculo = vs_vehiculo::pluck('nombre', 'id');
        $vehiculo = Vehiculo::find($id);
        // Buscar el registro en la tabla Personal
        $personal = Personal::where('id', $vehiculo->personal_id)->first();

        return view('vehiculo.edit', compact('vehiculo', 'tipo_vehiculo', 'personal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Vehiculo $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehiculo $vehiculo)
    {
        request()->validate(Vehiculo::$rules);

        $vehiculo->update($request->all());

        return redirect()->route('vehiculos.index')
        ->with('title', 'Actualizado')
            ->with('success', 'Vehiculo Actualizado Correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $vehiculo = Vehiculo::find($id);

        if ($vehiculo) {
            // Actualiza el estado a 0 en lugar de eliminar físicamente
            $vehiculo->update(['estado' => 0]);

            // También puedes realizar acciones adicionales si es necesario

            return redirect()->route('vehiculos.index')
                ->with('success', 'Vehiculo eliminado con éxito')
                ->with('tittle', 'Eliminado');
        } else {
            return redirect()->route('vehiculos.index')
                ->with('success', 'No se encontró el Vehiculo')
                ->with('tittle', 'Error');
        }
        
    }
}
