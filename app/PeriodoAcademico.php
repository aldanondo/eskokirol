<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeriodoAcademico extends Model
{
    protected $table = "periodo_academicos"; //Nombre de la tabla
    protected $fillable = ['id','ano_academico','inicio_periodo','fin_periodo'];
}
