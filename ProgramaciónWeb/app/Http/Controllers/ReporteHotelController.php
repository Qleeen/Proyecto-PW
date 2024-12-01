<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Exports\HotelesExport;
use Maatwebsite\Excel\Facades\Excel;


use App\Models\Hotel;
use Barryvdh\DomPDF\Facade\Pdf;


class ReporteHotelController extends Controller
{
    public function exportarExcel()
    {
        return Excel::download(new HotelesExport, 'hoteles.xlsx');
    }

    public function exportarPdf()
    {
        $hoteles = hotel::all(); // Obtén todos los registros de hoteles
        $pdf = Pdf::loadView('reportes.hotelesPdf', compact('hoteles')); // Carga una vista con los datos
        return $pdf->download('hoteles.pdf'); // Descarga el archivo
    }
}
