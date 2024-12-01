<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    // Especificar el nombre de la tabla
    protected $table = 'hotel';

    // Campos permitidos para asignación masiva
    protected $fillable = [
        'nombre',
        'pais',
        'estado',
        'lugar',
        'precio',
        'personas',
    ];
}
