<?php 
namespace App; 
use Illuminate\Database\Eloquent\Model;

class Inscrito extends Model
{
       protected $fillable=[ 'id','atleta_id' ,'escalao_id','torneio_id','descricao','created_at','updated_at'];
	   protected $with = ['atleta_id','escalao_id','torneio_id']; 
	  protected $with = ['atletas']; 

	public function atletas()
	{
		return $this->hasMany('App\Atleta', 'id');
	}


	public function atleta_id()
	{
		return $this->belongsTo('App\Atleta', 'id', 'atletaid');
	}

	
	protected $fillable=['id','nome', 'descricao','created_at','updated_at'];

	protected $with = ['atletas']; 

	public function atletas()
	{
		return $this->hasMany('App\Atleta', 'id');
	}



	protected $fillable=['id','nome', 'descricao','created_at','updated_at'];

	protected $with = ['atletas']; 

	public function atletas()
	{
		return $this->hasMany('App\Atleta', 'id');
	}

} 