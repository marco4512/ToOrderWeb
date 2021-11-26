<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSucursalTrabajadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sucursal_trabajadores', function (Blueprint $table) {
            $table->id('idSucursalTrabajador');
            $table->foreignId('idSucursal')->references('idSucursal')->on('sucursales')
            ->onDelete('no action');
            $table->foreignId('idTrabajadores')->references('idTrabajadores')->on('trabajadores')
            ->onDelete('no action');
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
        Schema::dropIfExists('sucursal_trabajadores');
    }
}
