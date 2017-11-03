<?php 
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTorneiosTable extends Migration
{ 
    public function up()
    {
        Schema::create('torneios', function (Blueprint $table) 
        {
            $table->increments('id');   
            $table->string('nome', 100);   
            $table->string('estado', 100);      
            $table->date('datai');      
            $table->date('datat');
            $table->integer('inscritos_id')->unsigned()->index();  
            $table->integer('desclassificados');   
            $table->string('descricao', 150);  
            $table->timestamps();


            $table->foreign('inscritos_id')->references('id')->on('inscritos');

        });
    }
 
    public function down()
    {
        Schema::dropIfExists('torneios');
    }
} 