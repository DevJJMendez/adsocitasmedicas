<?php

namespace App\Http\Controllers;

use App\Models\ingresoObjeto;
use App\Models\ingresoVehiculo;
use App\Models\Personal;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class ReporteController extends Controller
{

    public function reportep()
    {

        $ingresos = null;

        return view('reportes.personal', compact('ingresos'));
    }

    public function consultap(Request $request)
    {
        // Define las reglas de validación
        $reglas = [
            'documento' => 'required',
            'desde' => 'required',
            'hasta' => 'required',
        ];

        // Define los mensajes de error personalizados si lo deseas
        $mensajes = [
            'documento.required' => 'El campo documento es obligatorio.',
            'desde.required' => 'El campo Fecha desde es obligatorio.',
            'hasta.required' => 'El campo Fecha hasta es obligatorio.',
        ];

        // Realiza la validación
        $validator = Validator::make($request->all(), $reglas, $mensajes);

        if ($validator->fails()) {
            return redirect()->route('reporte.personal')
                ->withErrors($validator)  // Envia los errores a la vista
                ->withInput();  // Mantiene los valores anteriores en el formulario
        }

        if ($documento = $request->input('documento')) {

            $personal = Personal::where('numero_documento', $documento)->first();

            // Verifica si se encontró un personal con el documento proporcionado
            if (!$personal) {
                // Si no se encuentra el personal, redirige con un mensaje de error
                return redirect()->route('reporte.personal')->with([
                    'error' => 'No se encontró ningún personal con el número de documento proporcionado.',
                    'tittle' => 'Documento no Registrado',
                    'icon' => 'error'
                ]);
            }
            $desde = $request->input('desde');
            $hasta = $request->input('hasta');

            //Filtra los ingresos por rango de fechas
            $ingresos = $personal->ingreso()->whereBetween('fecha', [$desde, $hasta])->get();



            if ($ingresos->isEmpty()) {
                return redirect()->route('reporte.personal')->with([
                    'error' => 'El personal con el número de documento proporcionado no tiene Registros asociados.',
                    'tittle' => 'Registros no encontrados',
                    'icon' => 'error'
                ]);
            }
        }
        // Pasa el personal y el último ingreso al formulario
        return view('reportes.personal', compact('personal', 'ingresos'));
    }



    public function desrepopersonal(Request $request)
    {
        // Recupera los datos de ingresos del formulario
        $datos = $request->all();

        if (empty($datos) || !isset($datos['id'])) {
            return redirect()->route('reporte.personal')->with([
                'error' => 'Ingrese los datos del personal que desea generar los reportes.',
                'tittle' => 'No hay datos registrados',
                'icon' => 'error'
            ]);
        }
        if (isset($datos['fecha'])) {
            
            if (is_array($datos['fecha'])) {
                
                $datos['fecha'] = array_map(function ($fecha) {
                    return Carbon::createFromFormat('Y-m-d', $fecha)->format('d/m/Y');
                }, $datos['fecha']);
            } else {
                
                $datos['fecha'] = Carbon::createFromFormat('Y-m-d', $datos['fecha'])->format('d/m/Y');
            }
        }

        $fecha = Carbon::now()->format('d/m/Y');
        $hora = Carbon::now()->format('H:i:s A');
        $name = Carbon::now()->format('Ymd_His');
        $pdf = Pdf::loadView('pdf.reportpersonal', compact('datos', 'fecha', 'hora'));
        return $pdf->download($name . '.pdf');
    }

    public function reporteo()
    {
        $ingresos = null;
        return view('reportes.objeto', compact('ingresos'));
    }

    public function consultaob(Request $request)
    {
        // Define las reglas de validación
        $reglas = [
            'documento' => 'required',
            'desde' => 'required',
            'hasta' => 'required',
        ];

        // Define los mensajes de error personalizados si lo deseas
        $mensajes = [
            'documento.required' => 'El campo documento es obligatorio.',
            'desde.required' => 'El campo Fecha desde es obligatorio.',
            'hasta.required' => 'El campo Fecha hasta es obligatorio.',
        ];

        // Realiza la validación
        $validator = Validator::make($request->all(), $reglas, $mensajes);

        if ($validator->fails()) {
            return redirect()->route('reporte.objeto')
                ->withErrors($validator)  // Envia los errores a la vista
                ->withInput();  // Mantiene los valores anteriores en el formulario
        }

        if ($documento = $request->input('documento')) {
            $personal = Personal::where('numero_documento', $documento)->first();

            // Verifica si se encontró un personal con el documento proporcionado
            if (!$personal) {
                // Si no se encuentra el personal, redirige con un mensaje de error
                return redirect()->route('reporte.personal')->with([
                    'error' => 'No se encontró ningún personal con el número de documento proporcionado.',
                    'tittle' => 'Documento no Registrado',
                    'icon' => 'error'
                ]);
            }

            // Si se encontró un personal, obtén los ingresos asociados a los objetos
            $ingresos = ingresoObjeto::whereIn('objeto_id', $personal->objetos->pluck('id')->toArray())
                ->whereBetween('fecha', [$request->input('desde'), $request->input('hasta')])
                ->get();

            if ($ingresos->isEmpty()) {
                return redirect()->route('reporte.objeto')->with([
                    'error' => 'El personal con el número de documento proporcionado no tiene Registros asociados.',
                    'tittle' => 'Registros no encontrados',
                    'icon' => 'error'
                ]);
            }
            // Pasa el personal y los ingresos al formulario
            return view('reportes.objeto', compact('personal', 'ingresos'));
        }
    }

    public function desrepoObjeto(Request $request)
    {
        // Recupera los datos de ingresos del formulario
        $datos = $request->all();

        if (empty($datos) || !isset($datos['id'])) {
            return redirect()->route('reporte.objeto')->with([
                'error' => 'Ingrese los datos del personal que desea generar los reportes.',
                'tittle' => 'No hay datos registrados',
                'icon' => 'error'
            ]);
        }
        if (isset($datos['fecha'])) {
            
            if (is_array($datos['fecha'])) {
                
                $datos['fecha'] = array_map(function ($fecha) {
                    return Carbon::createFromFormat('Y-m-d', $fecha)->format('d/m/Y');
                }, $datos['fecha']);
            } else {
                
                $datos['fecha'] = Carbon::createFromFormat('Y-m-d', $datos['fecha'])->format('d/m/Y');
            }
        }
        $fecha = Carbon::now()->format('d/m/Y');
        $hora = Carbon::now()->format('H:i:s A');
        $name = Carbon::now()->format('Ymd_His');
        $pdf = Pdf::loadView('pdf.reportobjeto', compact('datos', 'fecha', 'hora'));
        return $pdf->download($name . '.pdf');
    }

    public function reportev()
    {
        $ingresos = null;
        return view('reportes.vehiculo', compact('ingresos'));
    }

    public function consultave(Request $request)
    {
        // Define las reglas de validación
        $reglas = [
            'documento' => 'required',
            'desde' => 'required',
            'hasta' => 'required',
        ];

        // Define los mensajes de error personalizados si lo deseas
        $mensajes = [
            'documento.required' => 'El campo documento es obligatorio.',
            'desde.required' => 'El campo Fecha desde es obligatorio.',
            'hasta.required' => 'El campo Fecha hasta es obligatorio.',
        ];

        // Realiza la validación
        $validator = Validator::make($request->all(), $reglas, $mensajes);

        if ($validator->fails()) {
            return redirect()->route('reporte.objeto')
                ->withErrors($validator)  // Envia los errores a la vista
                ->withInput();  // Mantiene los valores anteriores en el formulario
        }

        if ($documento = $request->input('documento')) {
            $personal = Personal::where('numero_documento', $documento)->first();

            // Verifica si se encontró un personal con el documento proporcionado
            if (!$personal) {
                // Si no se encuentra el personal, redirige con un mensaje de error
                return redirect()->route('reporte.personal')->with([
                    'error' => 'No se encontró ningún personal con el número de documento proporcionado.',
                    'tittle' => 'Documento no Registrado',
                    'icon' => 'error'
                ]);
            }

            // Si se encontró un personal, obtén los ingresos asociados a los objetos
            $ingresos = ingresoVehiculo::whereIn('vehiculo_id', $personal->vehiculos->pluck('id')->toArray())
                ->whereBetween('fecha', [$request->input('desde'), $request->input('hasta')])
                ->get();

            if ($ingresos->isEmpty()) {
                return redirect()->route('reporte.objeto')->with([
                    'error' => 'El personal con el número de documento proporcionado no tiene Registros asociados.',
                    'tittle' => 'Registros no encontrados',
                    'icon' => 'error'
                ]);
            }
            // Pasa el personal y los ingresos al formulario
            return view('reportes.vehiculo', compact('personal', 'ingresos'));
        }
    }

    public function desrepovehiculo(Request $request)
    {
        // Recupera los datos de ingresos del formulario
        $datos = $request->all();

        if (empty($datos) || !isset($datos['id'])) {
            return redirect()->route('reporte.objeto')->with([
                'error' => 'Ingrese los datos del personal que desea generar los reportes.',
                'tittle' => 'No hay datos registrados',
                'icon' => 'error'
            ]);
        }
        if (isset($datos['fecha'])) {
            
            if (is_array($datos['fecha'])) {
                
                $datos['fecha'] = array_map(function ($fecha) {
                    return Carbon::createFromFormat('Y-m-d', $fecha)->format('d/m/Y');
                }, $datos['fecha']);
            } else {
                
                $datos['fecha'] = Carbon::createFromFormat('Y-m-d', $datos['fecha'])->format('d/m/Y');
            }
        }
        $fecha = Carbon::now()->format('d/m/Y');
        $hora = Carbon::now()->format('H:i:s A');
        $name = Carbon::now()->format('Ymd_His');
        $pdf = Pdf::loadView('pdf.reportvehiculo', compact('datos', 'fecha', 'hora'));
        return $pdf->download($name . '.pdf');
    }
}
