<?php 
namespace App; 
use Illuminate\Database\Eloquent\Model;

class Arbitro extends Model
{
     protected $fillable =['nome','apelido','sexo','idade','telefone','email','descricao'];
     protected $guarded = ['id', 'created_at', 'update_at'];


	 public function torneios()
	{
		 return $this->belongsToMany('App\Torneio', 'id');
		//return $this->belongsToMany('App\Torneio');
	}
} 