<<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscritosTable extends Migration
{ 
    public function up()
    {
        Schema::create('inscritos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('atleta_id')->unsigned()->index(); 
            $table->string('torneiro_id')->unsigned()->index(); 
            $table->string('escalao_id')->unsigned()->index();    
            $table->string('descricao', 150);
            $table->timestamps();


            $table->foreign('atleta_id')->references('id')->on('atletas');
            $table->foreign('torneiro_id')->references('id')->on('torneiros');
            $table->foreign('escalao_id')->references('id')->on('escalaos');
        });
    }
 
    public function down()
    {
        Schema::dropIfExists('inscritos');
    }
}
