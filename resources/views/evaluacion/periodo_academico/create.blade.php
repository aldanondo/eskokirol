@extends('template.main')

@section('title','Crear Periodo Academico')

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


{!! Form::open(array('route' => 'PlanEvaluacion.Periodo_Academico.store', 'method' => 'POST')) !!}

<div class="row">
	<div class="col-md-6">
	    <div class="form-group">
			{!! Form::label('ano_academico','Periodo Academico') !!}
			{!! Form::text('ano_academico',null, ['class' => 'form-control', 'placeholder' => 'Ingrese Periodo Academico', 'required'] ) !!}
		</div>
	</div>
	<div class="col-md-3">
	    <div class="form-group">
			{!! Form::label('inicio_periodo','Fecha Inicio') !!}
			{!! Form::text('inicio_periodo',null, ['class' => 'form-control datepicker', 'placeholder' => 'Fecha Inicio', 'required'] ) !!}
		</div>
	</div>
	<div class="col-md-3">
	    <div class="form-group">
			{!! Form::label('fin_periodo','Fecha Final') !!}
			{!! Form::text('fin_periodo',null, ['class' => 'form-control datepicker', 'placeholder' => 'Fecha Final', 'required'] ) !!}
		</div>		
	</div>		
</div>
    <div class="form-group">
		{!! Form::submit('Guardar', array('class' => 'btn btn-primary')) !!}
	</div>

{!! Form::close() !!}	

@endsection

  