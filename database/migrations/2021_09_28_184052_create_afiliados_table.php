<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAfiliadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('afiliados', function (Blueprint $table) {
            $table->id('idAfiliado');
            $table->string('nombre',50);
            $table->string('Apellidos',100);
            $table->string('email')->unique();
            $table->string('password',20);
            $table->string('Telefono',10);
            $table->string('UrlImagen');
            $table->string('NombreDelNegocio');
            $table->string('UrlLogoNegocio');
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
        Schema::dropIfExists('afiliados');
    }
}
