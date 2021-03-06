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

            $table->string('numContrato')->unique();
            $table->string('nitCliente');
            $table->foreign('nitCliente')->references('nit')->on('users');
            $table->string('nombreCliente');
            $table->foreign('nombreCliente')->references('nombre')->on('users');
            $table->string('nitVendedor');
            $table->foreign('nitVendedor')->references('nit')->on('users');
            $table->string('empresaVendedora');
            $table->foreign('empresaVendedora')->references('nombre')->on('users');
            $table->date('mesEntrega');
            $table->string('toneladas');
            $table->string('tasaCambio');
            $table->string('precio');
            $table->string('prima');
            $table->string('tipoProducto');
            $table->string('producto');
            $table->string('paisDestino');
            $table->string('terminoIncoterm');
            $table->text('observacion')->nullable();
            
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
