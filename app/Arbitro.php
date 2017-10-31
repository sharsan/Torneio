<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arbitro extends Model
{
     protected $fillable =['nome','apelido','sexo','idade','telefone','email','descricao'];
} 