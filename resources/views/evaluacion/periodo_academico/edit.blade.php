@extends('template.main')

@section('title','Editar Periodo Academico: '.$PeriodoAcademico->ano_academico)

@section('content')

  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  
  <script>

	  $(function() {
	    $( ".datepicker" ).datepicker();
	  });


  </script>


{!! Form::open(array('route' => ['PlanEvaluacion.Periodo_Academico.update',$PeriodoAcademico->id], 'method' => 'PUT')) !!}
    
	<div class="row">
		<div class="col-md-4">
		    <div class="form-group">
				
				{!! Form::label('ano_academico','Periodo Academico') !!}
				
				{!! Form::text('ano_academico',$PeriodoAcademico->ano_academico, ['class' => 'form-control', 'placeholder' => 'Periodo Academico', 'required'] ) !!}

			</div>
		</div>
		<div class="col-md-4">
		    <div class="form-group">
				
				{!! Form::label('inicio_periodo','Periodo Academico') !!}
				
				{!! Form::text('inicio_periodo',$PeriodoAcademico->inicio_periodo, ['class' => 'form-control datepicker', 'placeholder' => 'Periodo Academico', 'required'] ) !!}

			</div>		
		</div>
		<div class="col-md-4">
		    <div class="form-group">
				
				{!! Form::label('fin_periodo','Periodo Academico') !!}
				
				{!! Form::text('fin_periodo',$PeriodoAcademico->fin_periodo, ['class' => 'form-control datepicker', 'placeholder' => 'Periodo Academico', 'required'] ) !!}

			</div>		
		</div>
	</div>	    
	<div class="row">
		<div class="col-md-11">
		    <div class="form-group text-right">

				{!! Form::submit('Editar', array('class' => 'btn btn-primary')) !!}
			
			</div>
		</div>
	</div>

{!! Form::close() !!}	

	
@endsection