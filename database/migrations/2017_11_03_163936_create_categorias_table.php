<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriasTable extends Migration
{ 
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 45);  
            $table->string('descricao', 150);
            $table->timestamps()->nullable();
        });
    } 
    public function down()
    {
        Schema::dropIfExists('categorias');
    }
}
