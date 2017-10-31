<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Torneio extends Model
{
    protected $fillable=[ 'nome', 'estado', 'datai', 'datat', 'participantes', 'rapazes', 'raparigas','desclassificados','descricao','created_at','updated_at'];
}       