<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treinador extends Model
{
     protected $fillable =['id','nome','apelido','clube','sexo','idade','telefone','email','descricao','created_at','updated_at'];
  
	protected $with = ['atletas']; 

	public function atletas()
	{
		return $this->hasMany('App\Atleta', 'id');
	}
}