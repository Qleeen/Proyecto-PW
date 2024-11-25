<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([

            [
                'nombre'=>'Baruch',
                'correo'=>'baruchsaur125@gmail.com',
                'password'=>'123456',
                'telefono'=>'4424646329',
                'password_confirmation'=>'123456',

            ]]
        );
    }
}
