<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
 protected $fillable=[ 'id','nome', 'descricao','created_at','updated_at'];
}
