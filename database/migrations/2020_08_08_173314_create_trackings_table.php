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
            $table->foreign('numNominacion')->references('id')->on('nominaciones');
            $table->double('toneladasNominadas', 10, 5);
            $table->string('almacenDestino');
            $table->string('numContainer');
            $table->double('cantidad', 10, 5);

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
