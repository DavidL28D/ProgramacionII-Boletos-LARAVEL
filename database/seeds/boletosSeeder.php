<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class boletosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table("boletos")->insert([
            "Serial" => "0",
            "Nombre" => "Evento A",
            "Fecha" => "17/12/28",
            "Ubicacion" => "1",
            "Usuario" => "user"
        ]);
    }
}
