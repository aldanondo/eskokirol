<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lapso extends Model
{
    protected $table = "lapsos"; //Nombre de la tabla
	protected $fillable = ['id','lapso'];
}
