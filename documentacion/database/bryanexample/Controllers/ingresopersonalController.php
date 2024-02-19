<?php

namespace App\Http\Controllers;

use App\Models\ingresoPersonal;
use App\Models\Personal;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ingresopersonalController extends Controller
{
    public function index()
    {
        $personal = null;
        return view('porteria.personal.index', compact('personal'));
    }

    public function create(Request $request)
    {
        
        
        // Inicializa $personal como null
        $personal = null;
        
        // Si se proporciona un documento, busca el personal
        if ($documento = $request->input('documento')) {
            $personal = Personal::where('numero_documento', $documento)->first();

            // Verifica si se encontró un personal con el documento proporcionado
            if (!$personal) {
                // Si no se encuentra el personal, redirige con un mensaje de error
                return redirect()->route('ingresopersonal.create')->with([
                    'error' => 'No se encontró ningún personal con el número de documento proporcionado.',
                    'tittle' => 'Documento no Registrado',
                    'icon' => 'error'
                ]);
            }

        }

        // Pasa el personal y el último ingreso al formulario
        return view('porteria.personal.index', compact('personal'));
    }

    public function store(Request $request)
    {
        // Validación de datos
        $request->validate(ingresoPersonal::$rules);
    
        // Validar existencia de personal por número de documento
        $existingPersonal = ingresoPersonal::where('personal_id', $request->input('personal_id'))
            ->whereDate('created_at', Carbon::today())
            ->first();
    
        if ($existingPersonal) {
            // Si ya existe personal con ese número de documento, redirige al método update
            return $this->update($request, $existingPersonal->personal_id);
        }
    
        // Si no existe, crea el personal
        $data = $request->all();
        $data['fecha'] = Carbon::now()->toDateString();
        $data['hora_entrada'] = Carbon::now()->toTimeString();
        $ingreso = ingresoPersonal::create($data);
    
        // Redirige a donde desees
        return redirect()->route('ingresopersonal.index')
            ->with('success', 'Ingreso Registrado con éxito')
            ->with('tittle', 'Ingreso');
    }
    

    public function update(Request $request, $id)
    {
        // Validación de datos
        $request->validate(ingresoPersonal::$rules);

        $ingreso = ingresoPersonal::where('personal_id', $id)
            ->orderByDesc('created_at')
            ->first();

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
                'error' => 'Ya se registró la salida para Personal El dia de Hoy',
                'tittle' => 'Error',
                'icon' => 'error'
            ]);
        }

        // Actualizar el registro con la hora de salida
        $ingreso->update([
            'hora_salida' => Carbon::now()->toDateTimeString(),
        ]);

        // Redirige a donde desees
        return redirect()->route('ingresopersonal.index')
            ->with('success', 'Salida registrada con éxito')
            ->with('tittle', 'Salida')
            ->with('icon', 'success');
    }
}
