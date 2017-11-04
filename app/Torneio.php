<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Torneio extends Model
{
    protected $fillable=[ 'nome', 'estado', 'datai', 'datat', 'inscritos_id', 'desclassificados','descricao'];
    protected $guarded = ['id', 'created_at', 'update_at'];

	 public function arbitros()
	{
		return $this->belongsToMany('App\Arbitro');
		// return $this->belongsToMany('App\Arbitro', 'id');
	}
}       