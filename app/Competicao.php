<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competicao extends Model
{
       protected $fillable=[ 'nome','competidor','descricao','created_at','updated_at'];
}
