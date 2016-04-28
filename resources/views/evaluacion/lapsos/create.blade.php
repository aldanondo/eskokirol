@extends('template.main')

@section('title','Lapsos')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h2><span class="glyphicon glyphicon-plus"></span> Agregar Lapsos</h2>
		</div>
	</div>	


{!! Form::open(array('route' => 'PlanEvaluacion.Lapsos.store', 'method' => 'POST')) !!}

<div class="row">
	<div class="col-md-8">
	    <div class="form-group">
			{!! Form::label('lapso','Lapso Academico') !!}
			{!! Form::text('lapso',null, ['class' => 'form-control', 'placeholder' => 'Ingrese Lapso Academico', 'required'] ) !!}
		</div>
	</div>		
</div>
    <div class="form-group">
		{!! Form::submit('Guardar', array('class' => 'btn btn-primary')) !!}
	</div>

{!! Form::close() !!}	

</div>

@endsection
