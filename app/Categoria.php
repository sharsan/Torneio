<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{ 

	protected $fillable=['nome', 'descricao'];
    protected $guarded = ['id', 'created_at', 'update_at'];

	protected $with = ['atletas'];

	public function atletas()
	{
		return $this->hasMany('App\Atleta', 'id');
	}
}
