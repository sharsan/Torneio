<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vencluta extends Model
{
	protected $fillable=['luta','atleta'];

	protected $guarded = ['id', 'created_at', 'update_at'];

	protected $table = 'venclutas';
}
