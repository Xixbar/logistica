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
            $table->string('cedula')->unique();
            $table->string('nit')->unique();
            $table->string('nombre');
            $table->string('direccion');
            $table->string('ciudad');
            $table->string('correoPersonal')->unique();
            $table->string('correoEmpresarial');
            $table->string('email1')->unique();
            $table->string('email2')->unique();
            //$table->timestamp('email_verified_at')->nullable();
            $table->string('telefono');
            $table->string('seguridadSocial1');
            $table->string('seguridadSocial2');
            $table->string('seguridadSocial3');
            $table->string('tipoSangre');
            $table->string('pais');
            $table->string('nivelAutorizacion');
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
