<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class clientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table("clientes")->insert([
            "Nombres" => "Administrador",
            "Apellidos" => "",
            "Cedula" => "0",
            "Direccion" => "",
            "Sexo" => "0",
            "Telefono" => "0",
            "Correo" => "",
            "Usuario" => "admin",
            "Contrasena" => "admin",
            //"Contrasena" => bcrypt("admin"), //Para encriptar la contraseña.
            "Rol" => "0",
        ]);

        DB::table("clientes")->insert([
            "Nombres" => "Nombres",
            "Apellidos" => "Apellidos",
            "Cedula" => "00000000",
            "Direccion" => "Direccion",
            "Sexo" => "0",
            "Telefono" => "00000000000",
            "Correo" => "Correo",
            "Usuario" => "user",
            "Contrasena" => "user",
            "Rol" => "1",
        ]);
    }
}
