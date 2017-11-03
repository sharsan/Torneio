<?php 
namespace App; 
use Illuminate\Database\Eloquent\Model;

class Arbitro extends Model
{
     protected $fillable =['id','nome','apelido','sexo','idade','telefone','email','descricao'];
} 