<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadoTorneiosTable extends Migration
{ 
    public function up()
    {
        Schema::create('estado_torneios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('estado', 45); 
            $table->string('torneiro', 45); 
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('estado_torneios');
    }
}
