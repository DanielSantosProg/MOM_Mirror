<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('usuario');
            $table->string('email');
            $table->string('senha');
            $table->string('sexo')->default('Não informado');
            $table->string('endereço')->default('Não informado');
            $table->string('foto')->default('Sem foto');
            $table->string('rub')->default('Não informado');
            $table->string('posição')->default('Não informado');
            $table->bigInteger('id_departamento')->unsigned()->nullable();
            $table->foreign('id_departamento')->references('id')->on('departamentos');
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
