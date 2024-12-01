<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vuelo extends Model
{
    use HasFactory;

    protected $table = 'vuelos'; // Definir la tabla si no sigue la convención plural de Laravel

    protected $fillable = [
        'origen', 
        'destino', 
        'fecha_salida', 
        'fecha_regreso', 
        'num_pasajeros', 
        'clase', 
        'precio', 
        'aerolinea_nombre', 
        'aerolinea_contacto', 
        'aerolinea_telefono', 
        'escala_origen', 
        'escala_destino', 
        'escala_fecha', 
        'reserva_fecha', 
        'pasajeros_nombre', 
        'pasajeros_tipo', 
        'pasajeros_documento', 
        'email_contacto', 
        'telefono_contacto', 
        'estado_reserva'
    ];
}
