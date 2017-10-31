<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVencedorsTable extends Migration
{ 
    public function up()
    {
        Schema::create('vencedors', function (Blueprint $table) {
            $table->increments('id');  
            $table->string('nome', 100);       
            $table->string('escalao', 3);
            $table->string('primeiro', 40);
            $table->string('segundo', 40);
            $table->string('terceiro', 40);
            $table->string('terceiro2', 40);           
            $table->string('juri', 40);      
            $table->string('descricao', 150);  
            $table->timestamps(); 
        });
    }
 
    public function down()
    {
        Schema::dropIfExists('vencedors');
    }
}
