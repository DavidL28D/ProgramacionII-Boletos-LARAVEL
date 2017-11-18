<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class eventosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table("eventos")->insert([
            "Nombre" => "Evento A",
            "Fecha" => "17/12/28",
            "Altos" => "40",
            "Medios" => "30",
            "Vip" => "20",
            "Platino" => "10", 
        ]);

        DB::table("eventos")->insert([
            "Nombre" => "Evento B",
            "Fecha" => "17/12/28",
            "Altos" => "10",
            "Medios" => "10",
            "Vip" => "10",
            "Platino" => "10", 
        ]);

        DB::table("eventos")->insert([
            "Nombre" => "Evento C",
            "Fecha" => "17/12/28",
            "Altos" => "1",
            "Medios" => "1",
            "Vip" => "1",
            "Platino" => "1", 
        ]);
    }
}
