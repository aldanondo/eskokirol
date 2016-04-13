@extends('template.main')

@section('title','Crear Periodo Academico')

@section('content')

{!! Form::open(array('route' => 'config.actividades.store', 'method' => 'POST')) !!}

<div class="row">
	<div class="col-md-6">
	    <div class="form-group">
			{!! Form::label('actividad','Periodo Academico') !!}
			{!! Form::text('actividad',null, ['class' => 'form-control', 'placeholder' => 'Ingrese Periodo Academico', 'required'] ) !!}
		</div>
	</div>
	<div class="col-md-3">
	    <div class="form-group">
			{!! Form::label('actividad','Periodo Academico') !!}
			{!! Form::text('actividad',null, ['class' => 'form-control', 'placeholder' => 'Ingrese Periodo Academico', 'required'] ) !!}
		</div>
	</div>
	<div class="col-md-3">
	    <div class="form-group">
			{!! Form::label('actividad','Periodo Academico') !!}
			{!! Form::text('actividad',null, ['class' => 'form-control', 'placeholder' => 'Ingrese Periodo Academico', 'required'] ) !!}
		</div>		
	</div>		
</div>
    <div class="form-group">
		{!! Form::submit('Guardar', array('class' => 'btn btn-primary')) !!}
	</div>



    

{!! Form::close() !!}	

@endsection

  