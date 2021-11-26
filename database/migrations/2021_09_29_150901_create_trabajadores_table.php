<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrabajadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabajadores', function (Blueprint $table) {
            $table->id('idTrabajadores');
            $table->string('nombre',100);
            $table->string('apellidos',100);
            $table->foreignId('idRol')->references('idRol')->on('roles')
            ->onDelete('no action');
            $table->dateTime('fechaNacimiento');
            $table->string('Token de Ingreso',100);
            $table->string('Password',20);
            $table->string('UrlImagen');
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
        Schema::dropIfExists('trabajadores');
    }
}
