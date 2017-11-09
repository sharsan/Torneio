<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVenclutasTable extends Migration
{ 
    public function up()
    {
        Schema::create('venclutas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('atleta', 45);
            $table->string('luta', 45); 
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('venclutas');
    }
}
