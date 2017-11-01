<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
   protected $fillable=[ 'nome', 'descricao','created_at','updated_at'];
}
