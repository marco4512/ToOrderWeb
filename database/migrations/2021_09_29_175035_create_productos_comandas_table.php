<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosComandasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos_comandas', function (Blueprint $table) {
            $table->id('idProductosComanda');
            $table->foreignId('idProducto')->references('idProducto')->on('productos')
            ->onDelete('no action');
            $table->foreignId('idComanda')->references('idComanda')->on('comandas')
            ->onDelete('no action');
            $table->integer('cantidad');
            $table->double('precio',10,2);
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
        Schema::dropIfExists('productos_comandas');
    }
}
