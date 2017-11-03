<?php 
namespace App; 
use Illuminate\Database\Eloquent\Model;

class Atleta extends Model
{
	protected $fillable =['id','nome','apelido','cinturao','clube_id','categoria_id','escalao_id','peso','sexo','idade','telefone','email','treinador_id','descricao'];

	protected $with = ['clube_id','categoria_id','escalao_id','treinador_id'];  



	public function clube_id()
	{
		return $this->belongsTo('App\Clube', 'clube_id', 'clube_id');
	}
	
	public function categoria_id()
	{
		return $this->belongsTo('App\Categoria','categoria_id', 'categoria_id');
	}
	
	public function escalao_id()
	{
		return $this->belongsTo('App\Escalao','escalao_id', 'escalao_id');
	}

	public function treinador_id()
	{
		return $this->belongsTo('App\Treinador','treinador_id', 'treinador_id');
	}

}