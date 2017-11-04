<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Luta extends Model
{ 
	
	protected $fillable=['atleta1_id','atleta2_id', 'juri_id', 'descricao'];
    protected $guarded = ['id', 'created_at', 'update_at'];

	protected $with = ['atleta1_id','atleta2_id', 'juri_id',]; 

	public function atletas()
	{
		return $this->hasMany('App\Atleta', 'atleta1_id', 'atleta2_id');
	}
 
	public function arbitros()
	{
		return $this->hasMany('App\Arbitro', 'juri_id');
	}
 
}
