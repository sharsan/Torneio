<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vencedor extends Model
{
    protected $fillable=['nome','escalao','primeiro','segundo','terceiro','terceiro2','juri','descricao'];
    protected $guarded = ['id', 'created_at', 'update_at'];
}
