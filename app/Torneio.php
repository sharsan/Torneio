<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Torneio extends Model
{
    protected $fillable=[ 'id','nome', 'estado', 'datai', 'datat', 'inscritos_id', 'desclassificados','descricao','created_at','updated_at'];
}       