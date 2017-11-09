<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Luta extends Model
{
	protected $fillable=[ 'grupo','atleta1','atleta2','juri','descricao']; 

	protected $guarded = ['id', 'created_at', 'update_at'];  

	protected $table = 'lutas'; 

} 