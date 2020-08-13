<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trackings', function (Blueprint $table) {
            $table->id();

            $table->string('evento');
            $table->unsignedBigInteger('numNominacion');
            //$table->foreign('numNominacion')->references('id')->on('nominaciones');
            $table->string('toneladasNominadas');
            $table->string('placaCabezote');
            $table->string('almacenDestino');
            $table->string('numContainer');
            $table->string('cantidad');

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
        Schema::dropIfExists('trackings');
    }
}
