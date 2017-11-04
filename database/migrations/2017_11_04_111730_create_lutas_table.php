<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLutasTable extends Migration
{ 
    public function up()
    {
        Schema::create('lutas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('atleta_id')->unsigned();
            $table->foreign('atleta_id')-> references('id')->on('atletas')->onDelete('cascade'); 
            $table->integer('atleta2_id')->unsigned();
            $table->foreign('atleta2_id')-> references('id')->on('atletas')->onDelete('cascade'); 
            $table->integer('juri_id')->unsigned();
            $table->foreign('juri_id')-> references('id')->on('arbitros')->onDelete('cascade');
            $table->timestamps()->nullable();
        });
    } 
    public function down()
    {
        Schema::dropIfExists('lutas');
    }
}
