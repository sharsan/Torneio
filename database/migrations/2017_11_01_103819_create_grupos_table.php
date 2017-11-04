<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGruposTable extends Migration
{ 
    public function up()
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 20);   
            $table->string('descricao', 150); 
            $table->timestamps()->nullable();
        });
    }
 
    public function down()
    {
        Schema::dropIfExists('grupos');
    }
}
