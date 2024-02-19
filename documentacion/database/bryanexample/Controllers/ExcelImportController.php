<?php

namespace App\Http\Controllers;

use App\Imports\PersonalImport;
use App\Models\Personal;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExcelImportController extends Controller
{
    public function index()
    {

        return view('admin.importar');
    }


    public function importar(Request $request)
    {
        $import = new PersonalImport;
        $request->validate([
            'archivo' => 'required|mimes:csv,txt',
        ]);

        $archivo = $request->file('archivo');

       // Importa los datos utilizando la clase PersonalImport
       $import = new PersonalImport;
       Excel::import($import, $archivo);

     

       // Llama al método afterImport después de la importación
       
        return redirect()->route('importar.excel')->with('success', 'Importación exitosa');
    }
}
