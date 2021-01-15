<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssociacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('associacaos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('cnpj')->unique();
            $table->string('nome_entidade');
            $table->unsignedBigInteger('endereco_id');
            $table->foreign('endereco_id')->references('id')->on('enderecos');
            $table->string('telefone');
            $table->string('celular')->nullable();
            $table->string('fax')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('password');
            $table->string('unidade_federacao');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('associacaos');
    }
}