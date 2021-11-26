<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAfiliadosSucursalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('afiliados_sucursales', function (Blueprint $table) {
            $table->id('idafiliadosSucursales');
            $table->foreignId('idSucursal')->references('idSucursal')->on('sucursales')
            ->onDelete('no action');
            $table->foreignId('idAfiliado')->references('idAfiliado')->on('afiliados')
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
        Schema::dropIfExists('afiliados_sucursales');
    }
}
