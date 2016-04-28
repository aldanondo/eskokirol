<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeriodoAcademicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periodo_academicos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ano_academico');
            $table->date('inicio_periodo');
            $table->date('fin_periodo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('peridodo_academicos');
    }
}
