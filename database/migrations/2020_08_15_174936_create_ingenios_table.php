<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngeniosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingenios', function (Blueprint $table) {
            $table->id();

            $table->date('fecha');
            $table->time('hora');
            $table->string('evento');
            $table->unsignedBigInteger('numNominacion');
            $table->foreign('numNominacion')->references('id')->on('nominaciones');
            $table->string('ingenio');
            $table->string('bodega');
            $table->string('numContenedor');
            $table->string('placaVehiculo');
            $table->string('remolque');
            $table->string('ccConductor');
            $table->string('nombreConductor');
            $table->string('producto');
            $table->string('umb');
            $table->string('ccOperadorMC');
            $table->string('nombreOperador');
            $table->string('ccEstibadores');
            $table->string('nombreEstibador');
            $table->string('cantidadSacos');
            $table->string('numSello');
            $table->time('horaInicio');
            $table->time('horaFin');
            $table->date('fechaSalida');
            $table->time('horaSalida');
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
        Schema::dropIfExists('ingenios');
    }
}
