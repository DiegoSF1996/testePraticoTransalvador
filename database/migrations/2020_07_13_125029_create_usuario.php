<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->bigIncrements('usu_codigo');
            $table->string('usu_nome', 200);
            $table->string('usu_login', 60);
            $table->string('usu_senha', 500);
            $table->string('usu_email', 100);
            $table->integer('usu_status');
            $table->string('usu_foto', 400)->nullable();
            $table->unsignedBigInteger('gru_codigo')->nullable();
            $table->unsignedBigInteger('set_codigo');
            $table->foreign('gru_codigo')->references('gru_codigo')->on('grupo');
            $table->foreign('set_codigo')->references('set_codigo')->on('setor');

            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
