<?php 
namespace App; 
use Illuminate\Database\Eloquent\Model;

class Atleta extends Model
{
	protected $fillable =['nome','apelido','cinturao','clube_id','categoria_id','escalao_id','peso','sexo','idade','telefone','email','treinador_id','descricao'];

    protected $guarded = ['id', 'created_at', 'update_at'];

	protected $with = ['clube_id','categoria_id','escalao_id','treinador_id'];  
 
	protected $table = 'atletas';

	public $timestamps = false; 

	public function clubes()
	{
		return $this->belongsTo('App\Clube', 'clube_id', 'clube_id');
	}
	
	public function categorias()
	{
		return $this->belongsTo('App\Categoria','categoria_id', 'categoria_id');
	}
	
	public function escaloes()
	{
		return $this->belongsTo('App\Escalao','escalao_id', 'escalao_id');
	}

	public function lutas()
	{
		return $this->morphToMany('App\Luta', 'clube_id', 'inscrito');
	}

	public function treinadores()
	{
		return $this->belongsTo('App\Treinador','treinador_id', 'treinador_id');
	}

}