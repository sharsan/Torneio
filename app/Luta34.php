<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Luta34 extends Model
{
	protected $fillable=[ 'grupo','atleta3','atleta4','juri','vencedor','descricao']; 

	protected $guarded = ['id', 'created_at', 'update_at'];  

	protected $table = 'luta34s'; 
	
}
