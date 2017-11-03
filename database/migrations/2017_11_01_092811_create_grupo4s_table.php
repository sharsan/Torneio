<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrupo4sTable extends Migration
{ 
    public function up()
    {
        Schema::create('grupo4s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 20);    
            $table->string('descricao', 150);
            $table->timestamps();
        });
    }
 
    public function down()
    {
        Schema::dropIfExists('grupo4s');
    }
}
