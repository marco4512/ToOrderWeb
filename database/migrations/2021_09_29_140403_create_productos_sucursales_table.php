<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosSucursalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos_sucursales', function (Blueprint $table) {
            $table->id('idProductoSucursal');
            $table->dateTime('fechaI');
            $table->dateTime('fechaF');
            $table->double('Precio',10,2);
            $table->foreignId('idProducto')->references('idProducto')->on('productos')
            ->onDelete('cascade');
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
        Schema::dropIfExists('productos_sucursales');
    }
}
