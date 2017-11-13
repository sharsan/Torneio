<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	use Notifiable; 
	protected $fillable = [
		'name', 'email', 'password',
	];
	
	protected $hidden = [
		'password', 'remember_token',
	];
}
