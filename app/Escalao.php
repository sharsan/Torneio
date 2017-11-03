<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escalao extends Model
{    
	
	protected $fillable=['id', 'nome', 'descricao','created_at','updated_at']; 

	protected $with = ['atletas']; 

	public function atletas()
	{
		return $this->hasMany('App\Atleta', 'id');
	}
}
