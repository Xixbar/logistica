<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            
            $table->string('cedula')->unique()->nullable();
            $table->string('nit')->unique()->nullable();
            $table->string('nombre');
            $table->string('direccion');
            $table->string('ciudad');
            $table->string('correoIngreso')->unique()->nullable();
            $table->string('correoEmpresarial')->nullable();
            $table->string('email2')->unique()->nullable();
            $table->string('telefono');
            $table->string('seguridadSocial1')->nullable();
            $table->string('seguridadSocial2')->nullable();
            $table->string('seguridadSocial3')->nullable();
            $table->string('tipoSangre')->nullable();
            $table->string('pais')->nullable();
            //$table->string('nivelAutorizacion')->nullable();
            //$table->foreign('nivelAutorizacion')->references('auth_id')->on('roles');
            $table->string('password');

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
