<?php 
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtletasTable extends Migration
{ 
     public function up()
    {
        Schema::create('atletas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 45);
            $table->string('apelido', 15);
            $table->string('cinturao', 30);
            $table->integer('clube_id')->unsigned()->index();
            $table->integer('categoria_id')->unsigned()->index();
            $table->integer('escalao_id')->unsigned()->index();
            $table->double('peso', 4);
            $table->string('sexo', 2);
            $table->integer('idade');           
            $table->integer('telefone'); 
            $table->string('email', 40); 
            $table->integer('treinador_id')->unsigned()->index();  
            $table->string('descricao', 150);
            $table->timestamps()->nullable();

            
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->foreign('clube_id')->references('id')->on('clubes');
            $table->foreign('escalao_id')->references('id')->on('escalaos');
            $table->foreign('treinador_id')->references('id')->on('treinadors');
        });
    } 
    public function down()
    {
        Schema::dropIfExists('atletas');
    }
}