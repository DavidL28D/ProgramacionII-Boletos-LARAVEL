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
            $table->String("Nombres", 50);
            $table->String("Apellidos", 50);
            $table->integer("Cedula")->unsigned();
            $table->String("Direccion", 100);
            $table->integer("Sexo")->unsigned();
            $table->integer("Telefono")->unsigned();
            $table->String("Correo", 50)->unique();
            $table->String("Usuario", 50)->unique();
            $table->String("Contrasena", 50);
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
