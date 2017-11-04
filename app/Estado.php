<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $fillable=['nome', 'descricao'];
    protected $guarded = ['id', 'created_at', 'update_at'];

	public function torneios()
	{
		return $this->hasMany('App\Torneio', 'id');
	}
}
