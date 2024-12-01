<?php

namespace App\Exports;

use App\Models\Cliente; // O el modelo que uses
use Maatwebsite\Excel\Concerns\FromCollection;

class ClientesExport implements FromCollection
{
    public function collection()
    {
        return Cliente::all(); // Cambia según tu modelo
    }
}
