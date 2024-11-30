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
        
            'nombre' => 'Excaret',
            'pais' => 'Mexico',
            'estado' => 'Quintana Roo',
            'lugar' => 'Cancun',
            'precio' => 1000.00,
            'personas' => 2,
        ]);
    }
}
