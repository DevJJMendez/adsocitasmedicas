<?php

namespace App\Http\Controllers;

use App\Models\ingresoVehiculo;
use App\Models\Personal;
use Carbon\Carbon;
use Illuminate\Http\Request;

class IngresoVehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personal = null;
        return view('porteria.vehiculos.index', compact('personal'));
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
        $vehiculos = null;

        // Si se proporciona un documento, busca el personal
        if ($documento = $request->input('documento')) {
            $personal = Personal::where('numero_documento', $documento)->first();

            // Verifica si se encontró un personal con el documento proporcionado
            if (!$personal) {
                // Si no se encuentra el personal, redirige con un mensaje de error
                return redirect()->route('ingresovehiculo.create')->with([
                    'error' => 'No se encontró ningún personal con el número de documento proporcionado.',
                    'tittle' => 'Documento no Registrado',
                    'icon' => 'error'
                ]);
            }

            // Si se encontró un personal, verifica si tiene objetos asociados
            $vehiculos = $personal->vehiculos;

            // Verifica si hay objetos asociados al personal
            if ($vehiculos->isEmpty()) {
                return redirect()->route('ingresovehiculo.create')->with([
                    'error' => 'El personal con el número de documento proporcionado no tiene vehiculos asociados.',
                    'tittle' => 'Vehiculos no encontrados',
                    'icon' => 'error'
                ]);
            }
        }

        // Pasa el personal y el último ingreso al formulario
        return view('porteria.vehiculos.index', compact('personal', 'vehiculos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(ingresoVehiculo::$rules);
        $existingVehiculo = ingresoVehiculo::where('vehiculo_id', $request->input('vehiculo_id'))
            ->whereDate('created_at', Carbon::today())
            ->first();;

        if ($existingVehiculo) {
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
        $ingreso = ingresoVehiculo::create($data);

        // Redirige a donde desees
        return redirect()->route('ingresovehiculo.index')
            ->with('success', 'Ingreso Registrado con éxito')
            ->with('tittle', 'Ingreso');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ingresoVehiculo $ingresoVehiculo)
    {
        $request->validate(ingresoVehiculo::$rules);
        $ingreso = ingresoVehiculo::where('vehiculo_id', $request->input('vehiculo_id'))
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
        return redirect()->route('ingresovehiculo.index')
            ->with('success', 'Salida registrada con éxito')
            ->with('tittle', 'Salida')
            ->with('icon', 'success');
    }

   
}
