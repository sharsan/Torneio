<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FaseGr extends Model
{
    protected $fillable=['A','B','C','D','juri', 'descricao'];
    protected $guarded = ['id', 'created_at', 'update_at'];
} 
