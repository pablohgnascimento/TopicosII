<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtaOrientacaoEstagioDadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ata_orientacao_estagio', function (Blueprint $table) {
            $table->increments('id');
            $table->date('data');
            $table->string('atividadedesenvolvida', 255);
            $table->string('proximaatividade', 255);
            $table->boolean('avaliacao');
            $table->string('usuario', 50);
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
        Schema::drop('ata_orientacao_estagio_dados');
    }
}
