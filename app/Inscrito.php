<?php 
namespace App; 
use Illuminate\Database\Eloquent\Model;

class Inscrito extends Model
{
       protected $fillable=[ 'id','atleta_id' ,'escalao_id','torneio_id','descricao','created_at','updated_at'];
	   protected $with = ['atleta_id','escalao_id','torneio_id']; 
	  protected $with = ['inscritos']; 

	public function atletas()
	{
		return $this->hasMany('App\Atleta', 'id');
	} 
  
} 