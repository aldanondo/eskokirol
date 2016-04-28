<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\PeriodoAcademico;

use Carbon\Carbon;

class PeriodoAcademicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $periodo_academicos = PeriodoAcademico::orderBy('id', 'ASC')->paginate(5);
        return view('evaluacion.periodo_academico.index')->with('periodo_academicos', $periodo_academicos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('evaluacion.periodo_academico.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */ 
    public function store(Request $request)
    { 

        //TOMAMOS TDOS LOS VALORES Y LOS PASAMOS A UNA VARIABLE
        $PeriodoAcademico=new PeriodoAcademico($request->all());

        //CAMBIAMOS LAS FECHAS AL ORDEN QUE LO NECESITA LA BD
        $FechaIniciForm = Carbon::createFromFormat('d/m/Y', $PeriodoAcademico->inicio_periodo)->format('Y-m-d');
        $PeriodoAcademico->inicio_periodo= $FechaIniciForm;

        $FechaFinalForm = Carbon::createFromFormat('d/m/Y', $PeriodoAcademico->fin_periodo)->format('Y-m-d');
        $PeriodoAcademico->fin_periodo= $FechaFinalForm;        
        
        //GUARDAMOS
        $PeriodoAcademico->save();    

        #Flash::success("Se ha registrado la Periodo Academico  ".$PeriodoAcademico->ano_academico );
       
        #return redirect()->route('evaluacion.periodo_academico.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $PeriodoAcademico = PeriodoAcademico::find($id);
        return view('evaluacion.periodo_academico.edit')->with('PeriodoAcademico',$PeriodoAcademico);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $pa = PeriodoAcademico::find($id);
        $pa->fill($request->all());
        
        //CAMBIAMOS LAS FECHAS AL ORDEN QUE LO NECESITA LA BD
        $FIForm = Carbon::createFromFormat('d/m/Y', $pa->inicio_periodo)->format('Y-m-d');
        $pa->inicio_periodo= $FIForm;

        $FechaFinalForm = Carbon::createFromFormat('d/m/Y', $pa->fin_periodo)->format('Y-m-d');
        $pa->fin_periodo= $FechaFinalForm;  

        $pa->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd('hola');
        #$PeridoA = PeriodoAcademico::find($id);
        #$PeridoA->delete();
    }
}
