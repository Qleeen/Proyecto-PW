<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hotel')->insert([
        
            [
            'nombre' => 'Excaret',
            'pais' => 'Mexico',
            'estado' => 'Quintana Roo',
            'lugar' => 'Cancun',
            'precio' => 1000.00,
            'personas' => 2,
            ],
            [
            'nombre' => 'Rio',
            'pais' => 'Mexico',
            'estado' => 'Quintana Roo',
            'lugar' => 'Cancun',
            'precio' => 2000.00,
            'personas' => 4,
            ],
            [
            'nombre' => 'Marriot',
            'pais' => 'Peru',
            'estado' => 'Lima',
            'lugar' => 'Playa Makaha',
            'precio' => 3000.00,
            'personas' => 6,
            ],
            [
            'nombre'=> 'Riu',
            'pais' => 'Estados Unidos',
            'estado' => 'California',
            'lugar' => 'Los Angeles',
            'precio' => 20000.00,
            'personas' => 8,
            ],
            [
            'nombre' => 'Hilton',
            'pais' => 'Estados Unidos',
            'estado' => 'California',
            'lugar' => 'Los Angeles',
            'precio' => 30000.00,
            'personas' => 10,
            ],
            

        ]);
    }
}
