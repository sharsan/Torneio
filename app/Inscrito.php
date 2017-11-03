<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscrito extends Model
{
       protected $fillable=[ 'id','nome','competidor','escalao','descricao','created_at','updated_at'];
}
 