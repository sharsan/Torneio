<?php 
namespace App; 
use Illuminate\Database\Eloquent\Model;

class EstadoTorneio extends Model
{
	
	protected $fillable=[ 'torneio','estado'];

	protected $guarded = ['id', 'created_at', 'update_at'];  
	
	protected $table = 'estadotorneios';
} 