<?php

namespace App\Http\Controllers;


use App\Models\Ficha;
use App\Models\vs_cargo;
use App\Models\vs_genero;
use App\Models\vs_tipo_documento;
use App\Models\Personal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class PersonalController
 * @package App\Http\Controllers
 */
class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Obtener datos del personal y realizar la consulta en la vista
        $personals = Personal::with(['tipoDocumento', 'generos', 'cargos'])->get()
            ->where('estado', 1);

        $eliminados = Personal::with(['tipoDocumento', 'generos', 'cargos'])->get()
        ->where('estado', 0);

        // Pasar los datos a la vista
        return view('personal.index', compact('personals','eliminados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $generos = vs_genero::pluck('nombre', 'id');
        $tiposDocumentos = vs_tipo_documento::pluck('nombre', 'id');
        $cargos = vs_cargo::pluck('nombre', 'id');
        $ficha = Ficha::pluck('numero', 'id');
        $personal = new Personal();
        return view('personal.create', compact('personal', 'ficha', 'tiposDocumentos', 'generos', 'cargos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validación de datos
        $request->validate(Personal::$rules);
    
        // Validar existencia de personal por número de documento
        $existingPersonal = Personal::where('numero_documento', $request->input('numero_documento'))->first();
    
        if ($existingPersonal) {
            // Si ya existe personal con ese número de documento, muestra un mensaje de error y redirige
            return redirect()->back()->with('success', 'Ya existe un personal con este número de documento.');
        }
    
        // Si no existe, crea el personal
        $data = $request->all();
        $personal = Personal::create($data);
    
        // Redirige a donde desees
        return redirect()->route('personals.index')
            ->with('success', 'Personal creado con éxito')
            ->with('title', 'Guardado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personal = Personal::find($id);
        $ficha = Ficha::all();

        return view('personal.show', compact('personal', 'ficha'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $personal = Personal::find($id);
        $cargos = vs_cargo::pluck('nombre', 'id');
        $generos = vs_genero::pluck('nombre', 'id');
        $tiposDocumentos = vs_tipo_documento::pluck('nombre', 'id');
        $ficha = Ficha::pluck('numero', 'id');
        return view('personal.edit', compact('personal', 'ficha', 'tiposDocumentos', 'generos', 'cargos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Personal $personal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $personal = Personal::find($id);


        // Validar los datos
        $request->validate(Personal::$rules);

        // Actualizar datos de Personal
        $personal->update($request->all());

        return redirect()->route('personals.index')
            ->with('success', 'Personal actualizado con éxito')
            ->with('title', 'Editado');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $personal = Personal::find($id);

        if ($personal) {
            // Verifica si el estado actual es 1
            if ($personal->estado == 1) {
                // Estado actual es 1, entonces actualiza a 0
                $personal->update(['estado' => 0]);
                return redirect()->route('personals.index')
                    ->with('success', 'Personal eliminado con éxito')
                    ->with('title', 'Eliminado');
            } else {
                // Estado actual es 0, entonces actualiza a 1
                $personal->update(['estado' => 1]);
                return redirect()->route('personals.index')
                    ->with('success', 'Personal activado con éxito')
                    ->with('title', 'Activado');
            }
        } else {
            return redirect()->route('personals.index')
                ->with('error', 'No se encontró el personal');
        }
    }
}
