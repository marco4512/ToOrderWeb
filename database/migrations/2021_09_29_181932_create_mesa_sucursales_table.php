<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMesaSucursalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mesa_sucursales', function (Blueprint $table) {
            $table->id('idMesaSucursal');
            $table->foreignId('idMesa')->references('idMesa')->on('mesas')
            ->onDelete('no action');
            $table->foreignId('idSucursal')->references('idSucursal')->on('sucursales')
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
        Schema::dropIfExists('mesa_sucursales');
    }
}
