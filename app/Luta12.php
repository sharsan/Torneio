<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Luta12 extends Model
{
	protected $fillable=[ 'grupo','atleta1','atleta2','juri','vencedor','descricao']; 

	protected $guarded = ['id', 'created_at', 'update_at'];  

	protected $table = 'luta12s'; 

}
