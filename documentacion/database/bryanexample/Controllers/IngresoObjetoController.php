<?php

namespace App\Http\Controllers;

use App\Models\ingresoObjeto;
use App\Models\Objeto;
use App\Models\Personal;
use Carbon\Carbon;
use Illuminate\Http\Request;

class IngresoObjetoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personal = null;
        return view('porteria.objetos.index', compact('personal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // Inicializa $personal y $ultimoIngreso como null
        $personal = null;
        $ultimoIngreso = null;
        $objetos = [];

        // Si se proporciona un documento, busca el personal
        if ($documento = $request->input('documento')) {
            $personal = Personal::where('numero_documento', $documento)->first();

            // Verifica si se encontró un personal con el documento proporcionado
            if (!$personal) {
                // Si no se encuentra el personal, redirige con un mensaje de error
                return redirect()->route('ingresObjeto.create')->with([
                    'error' => 'No se encontró ningún personal con el número de documento proporcionado.',
                    'tittle' => 'Documento no Registrado',
                    'icon' => 'error'
                ]);
            }

            // Si se encontró un personal, verifica si tiene objetos asociados
            $objetos = $personal->objetos;

            // Verifica si hay objetos asociados al personal
            if ($objetos->isEmpty()) {
                return redirect()->route('ingresObjeto.create')->with([
                    'error' => 'El personal con el número de documento proporcionado no tiene objetos asociados.',
                    'tittle' => 'Objetos no encontrados',
                    'icon' => 'error'
                ]);
            }
        }

        // Pasa el personal y el último ingreso al formulario
        return view('porteria.objetos.index', compact('personal', 'objetos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(ingresoObjeto::$rules);
        $existingObjeto = ingresoObjeto::where('objeto_id', $request->input('objeto_id'))
            ->whereDate('created_at', Carbon::today())
            ->first();;

        if ($existingObjeto) {
            // Si ya existe personal con ese número de documento, muestra un mensaje de error y redirige
            return redirect()->back()->with([
                'error' => 'Usted ya registró su Entrada el dia de Hoy',
                'tittle' => 'Error',
                'icon' => 'error'
            ]);
        }

        // Si no existe, crea el personal
        $data = $request->all();
        $data['fecha'] = Carbon::now()->toDateString();
        $data['hora_entrada'] = Carbon::now()->toTimeString();
        $ingreso = ingresoObjeto::create($data);

        // Redirige a donde desees
        return redirect()->route('ingresObjeto.index')
            ->with('success', 'Ingreso Registrado con éxito')
            ->with('tittle', 'Ingreso');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ingresoObjeto $ingresoObjeto)
    {
        $request->validate(ingresoObjeto::$rules);
        $ingreso = ingresoObjeto::where('objeto_id', $request->input('objeto_id'))
            ->whereDate('created_at', Carbon::today())
            ->first();;

        if (!$ingreso) {
            // Manejar la situación en la que no se encuentra el registro
            return redirect()->back()->with([
                'error' => 'No se encontró el registro de ingreso',
                'tittle' => 'Error',
                'icon' => 'error'
            ]);
        }
        // Validar si ya se registró la salida
        if ($ingreso->hora_salida) {
            return redirect()->back()->with([
                'error' => 'Ya se registró la salida para este ingreso',
                'tittle' => 'Error',
                'icon' => 'error'
            ]);
        }


        // Actualizar el registro con la hora de salida
        $ingreso->update([
            'hora_salida' => Carbon::now()->toDateTimeString(),
        ]);

        // Redirige a donde desees
        return redirect()->route('ingresObjeto.index')
            ->with('success', 'Salida registrada con éxito')
            ->with('tittle', 'Salida')
            ->with('icon', 'success');
    }
}
