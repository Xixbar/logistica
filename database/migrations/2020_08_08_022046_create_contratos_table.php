<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->id();

            $table->string('nitCliente');
            $table->foreign('nitCliente')->references('nit')->on('users');
            $table->string('nombreCliente');
            $table->string('nitVendedor');
            $table->foreign('nitVendedor')->references('nit')->on('users');
            $table->string('empresaVendedora');
            $table->dateTime('mesEntrega');
            $table->double('toneladas');
            $table->double('tasaCambio');
            $table->double('precio');
            $table->double('prima');
            $table->string('tipoProducto');
            $table->string('producto');
            $table->string('paisDestino');
            $table->string('terminoIncoterm');
            
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
        Schema::dropIfExists('contratos');
    }
}
