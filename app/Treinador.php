<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treinador extends Model
{
     protected $fillable =['nome','apelido','clube','sexo','idade','telefone','email','descricao'];
     protected $guarded = ['id', 'created_at', 'update_at'];
  
	protected $with = ['atletas']; 

	public function atletas()
	{
		return $this->hasMany('App\Atleta', 'id');
	}
}