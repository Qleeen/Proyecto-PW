<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VueloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vuelos')->insert([
            [
                'origen' => 'Ciudad de México',
                'destino' => 'Madrid',
                'fecha_salida' => '2024-12-05 16:30:00',
                'fecha_regreso' => '2024-12-20 12:00:00',
                'num_pasajeros' => 150,
                'clase' => 'economica',
                'precio' => 800.50,
                'aerolinea_nombre' => 'Aeromexico',
                'aerolinea_contacto' => 'contacto@aeromexico.com',
                'aerolinea_telefono' => '+52 55 1234 5678',
                'escala_origen' => 'Guadalajara',
                'escala_destino' => 'Barcelona',
                'escala_fecha' => '2024-12-05 18:30:00',
                'reserva_fecha' => '2024-11-15 09:30:00',
                'pasajeros_nombre' => 'Juan Pérez',
                'pasajeros_tipo' => 'adulto',
                'pasajeros_documento' => 'A12345678',
                'email_contacto' => 'juan.perez@mail.com',
                'telefono_contacto' => '+52 55 9876 5432',
                'estado_reserva' => 'confirmada',
            ],
            [
                'origen' => 'Nueva York',
                'destino' => 'Londres',
                'fecha_salida' => '2024-12-06 09:00:00',
                'fecha_regreso' => '2024-12-20 15:00:00',
                'num_pasajeros' => 120,
                'clase' => 'primera_clase',
                'precio' => 2500.75,
                'aerolinea_nombre' => 'British Airways',
                'aerolinea_contacto' => 'help@britishairways.com',
                'aerolinea_telefono' => '+44 20 7735 6789',
                'escala_origen' => 'Boston',
                'escala_destino' => 'Dublín',
                'escala_fecha' => '2024-12-06 11:30:00',
                'reserva_fecha' => '2024-11-10 14:00:00',
                'pasajeros_nombre' => 'Mary Johnson',
                'pasajeros_tipo' => 'adulto',
                'pasajeros_documento' => 'B98765432',
                'email_contacto' => 'mary.johnson@mail.com',
                'telefono_contacto' => '+1 212 555 9876',
                'estado_reserva' => 'pendiente',
            ],
            [
                'origen' => 'Los Ángeles',
                'destino' => 'Tokio',
                'fecha_salida' => '2024-12-10 18:00:00',
                'fecha_regreso' => '2024-12-18 14:00:00',
                'num_pasajeros' => 100,
                'clase' => 'economica',
                'precio' => 1200.30,
                'aerolinea_nombre' => 'Japan Airlines',
                'aerolinea_contacto' => 'info@jal.com',
                'aerolinea_telefono' => '+81 3 5757 0421',
                'escala_origen' => 'San Francisco',
                'escala_destino' => 'Seúl',
                'escala_fecha' => '2024-12-10 21:30:00',
                'reserva_fecha' => '2024-11-20 16:15:00',
                'pasajeros_nombre' => 'Carlos Gómez',
                'pasajeros_tipo' => 'adulto',
                'pasajeros_documento' => 'C34567890',
                'email_contacto' => 'carlos.gomez@mail.com',
                'telefono_contacto' => '+1 310 555 1234',
                'estado_reserva' => 'cancelada',
            ],
            [
                'origen' => 'Buenos Aires',
                'destino' => 'Barcelona',
                'fecha_salida' => '2024-12-15 20:00:00',
                'fecha_regreso' => '2024-12-25 10:00:00',
                'num_pasajeros' => 80,
                'clase' => 'economica',
                'precio' => 950.40,
                'aerolinea_nombre' => 'Iberia',
                'aerolinea_contacto' => 'atencioncliente@iberia.com',
                'aerolinea_telefono' => '+34 900 111 500',
                'escala_origen' => 'Montevideo',
                'escala_destino' => 'Lisboa',
                'escala_fecha' => '2024-12-15 23:00:00',
                'reserva_fecha' => '2024-11-30 10:45:00',
                'pasajeros_nombre' => 'Lucía Martínez',
                'pasajeros_tipo' => 'adulto',
                'pasajeros_documento' => 'L12345678',
                'email_contacto' => 'lucia.martinez@mail.com',
                'telefono_contacto' => '+598 2 900 5678',
                'estado_reserva' => 'confirmada',
            ],
            // Agrega más vuelos aquí...
        ]);
    }
}
