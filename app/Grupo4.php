<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo4 extends Model
{ 
   protected $fillable=['nome','escalao','A','B','C','D','juri','descricao'];
    protected $guarded = ['id', 'created_at', 'update_at'];


	public function atletas()
	{
		return $this->hasMany('App\Atleta', 'id', 'A');
	}
}
