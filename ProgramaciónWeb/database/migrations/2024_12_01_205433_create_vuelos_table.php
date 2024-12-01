<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vuelos', function (Blueprint $table) {
            $table->id(); // ID de la reserva de vuelo
    
            // Datos del vuelo
            $table->string('origen');
            $table->string('destino');
            $table->date('fecha_salida');
            $table->date('fecha_regreso');
            $table->integer('num_pasajeros');
            $table->string('clase');
            $table->decimal('precio', 10, 2);
    
            // Información de la aerolínea
            $table->string('aerolinea_nombre');
            $table->string('aerolinea_contacto')->nullable();
            $table->string('aerolinea_telefono')->nullable();
    
            // Información sobre escalas
            $table->string('escala_origen')->nullable();
            $table->string('escala_destino')->nullable();
            $table->date('escala_fecha')->nullable();
    
            // Datos de reserva
            $table->timestamp('reserva_fecha')->useCurrent();
    
            // Datos de los pasajeros
            $table->string('pasajeros_nombre');
            $table->string('pasajeros_tipo'); // Ejemplo: Adulto, Niño, Mayor
            $table->string('pasajeros_documento')->nullable(); // Ejemplo: pasaporte, documento de identidad
    
            // Datos de contacto para la reserva
            $table->string('email_contacto');
            $table->string('telefono_contacto');
    
            // Estado de la reserva
            $table->enum('estado_reserva', ['pendiente', 'confirmada', 'cancelada'])->default('pendiente');
    
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vuelos');
    }
};
