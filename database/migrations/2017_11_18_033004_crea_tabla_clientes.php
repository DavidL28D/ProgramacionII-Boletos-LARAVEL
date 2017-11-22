<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreaTablaClientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->String("Nombres");
            $table->String("Apellidos");
            $table->integer("Cedula")->unsigned();
            $table->String("Direccion");
            $table->integer("Sexo")->unsigned();
            $table->integer("Telefono")->unsigned();
            $table->String("Correo")->unique();
            $table->String("Usuario")->unique();
            $table->String("Contrasena");
            $table->integer("Rol")->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
