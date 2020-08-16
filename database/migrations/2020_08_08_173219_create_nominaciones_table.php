<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNominacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nominaciones', function (Blueprint $table) {
            $table->id();

            $table->string('clienteVendedor');
            $table->string('clienteComprador');
            $table->unsignedBigInteger('numContrato');
            $table->foreign('numContrato')->references('id')->on('contratos');
            $table->string('producto');
            $table->date('eta');
            $table->dateTime('cutOff');
            $table->string('naviera');
            $table->string('motonave');
            $table->string('viaje');
            $table->string('booking');
            $table->string('puerto');
            $table->string('numContainer');
            $table->string('tmContainer');
            $table->string('unidadesContainer');
            $table->string('toneladas');
            $table->string('supervision');
            $table->string('tipoContainer');
            $table->string('instrucciones1')->nullable();
            $table->string('instrucciones2')->nullable();
            $table->string('instrucciones3')->nullable();
            $table->string('observacion')->nullable();

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
        Schema::dropIfExists('nominaciones');
    }
}
