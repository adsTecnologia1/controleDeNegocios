<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstoquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estoques', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->bigInteger('codigo')->unique();
            $table->string('tipo', 50);
            $table->integer('qtd');
            $table->string('tamanho', 50);
            $table->string('cor', 50);
            $table->string('cpfEmpresa', 200);
            $table->string('nomeEmpresa', 200);
            $table->date('dataEntrada');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estoques');
    }
}
