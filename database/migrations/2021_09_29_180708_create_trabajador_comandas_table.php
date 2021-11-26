<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrabajadorComandasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabajador_comandas', function (Blueprint $table) {
            $table->id('idcomandaTrabajadores');
            $table->foreignId('idComanda')->references('idComanda')->on('comandas')
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
        Schema::dropIfExists('trabajador_comandas');
    }
}
