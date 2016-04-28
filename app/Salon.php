<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salon extends Model
{
    protected $table = "salones"; //Nombre de la tabla
	protected $fillable = ['id','nombre','capacidad','pasillo','descripcion'];
}
