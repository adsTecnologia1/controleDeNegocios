<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('nomeEmpresa', 50);
            $table->string('cpfProprietario', 200)->unique();
            $table->string('nomeProprietario', 100);
            $table->string('telefone', 20);
            $table->string('email', 200);
            $table->string('endereco', 200);
            $table->string('ramo', 50);
            $table->string('status', 10);
            $table->string('senha', 200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresas');
    }
}
