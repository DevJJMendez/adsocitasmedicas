<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Milon\Barcode\DNS1D;
use Milon\Barcode\DNS2D;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class carnetController extends Controller
{
    public function index()
    {

        $personal = null;

        return view('carnet.index', compact('personal'));
    }

    public function busqueda(Request $request)
    {
        $request->validate([
            'documento' => 'required|numeric', // Ejemplo: Requerido, numérico y exactamente 8 dígitos
        ]);
        // Si se proporciona un documento, busca el personal
        if ($documento = $request->input('documento')) {
            $personal = Personal::where('numero_documento', $documento)->first();

            // Verifica si se encontró un personal con el documento proporcionado
            if (!$personal) {
                // Si no se encuentra el personal, redirige con un mensaje de error
                return redirect()->route('carnet.index')->with([
                    'error' => 'No se encontró ningún personal con el número de documento proporcionado.',
                    'tittle' => 'Documento no Registrado',
                    'icon' => 'error'
                ]);
            }
        }

        return view('carnet.index', compact('personal'));
    }

    public function descargar(Request $request)
    {
        // Recupera los datos de ingresos del formulario
        $datos = $request->all();
        $Documento = $datos['documento'];
        $numeroDocumento = intval($Documento);
        // Crea una instancia del generador de códigos de barras
        $barcode = new DNS1D();
        // Define el tipo de código de barras que deseas generar (puedes usar otros tipos según tus necesidades)
        $tipoCodigo = 'C128';
        // Genera el código de barras
        $imagePath = $barcode->getBarcodePNGPath($numeroDocumento, $tipoCodigo);
        // $qrCode = QrCode::size(190)->generate(json_encode($numeroDocumento));

        $fecha = Carbon::now()->format('d/m/Y');
        $hora = Carbon::now()->format('H:i:s A');
        $name = Carbon::now()->format('Ymd_His');
        $pdf = Pdf::setPaper([0, 0, 250, 450])->loadView('pdf.carnet', compact('datos', 'imagePath', 'fecha', 'hora'));
        return $pdf->download($name . '.pdf');
    }
}
