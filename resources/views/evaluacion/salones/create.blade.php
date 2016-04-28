@extends('template.main')

@section('title','Agregar Salones')

@section('content')
	

{!! Form::open(array('route' => 'PlanEvaluacion.Salones.store', 'method' => 'POST')) !!}
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h2><span class="glyphicon glyphicon-plus"></span> Agrega Salones</h2>
		</div>
	</div>	
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				{!! Form::label('nombre','Nombre del Salón') !!}
				{!! Form::text('nombre',null, ['class' => 'form-control', 'placeholder' => 'Ingrese Nombre del Salón', 'required'] ) !!}
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				{!! Form::label('capacidad','Capacidad') !!}
				{!! Form::text('capacidad',null, ['class' => 'form-control', 'placeholder' => 'Ingrese la capacidad del Salón', 'required'] ) !!}
			</div>
		</div>		
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				{!! Form::label('pasillo','Pasillo del Salón') !!}
				{!! Form::text('pasillo',null, ['class' => 'form-control', 'placeholder' => 'Ingrese el pasillo del Salón', 'required'] ) !!}
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				{!! Form::label('descripcion','Descripción del Salón') !!}
				{!! Form::textarea('descripcion',null, ['class' => 'form-control', 'placeholder' => 'Ingrese descripción del Salón', 'required'] ) !!}
			</div>
		</div>		
	</div>	
	<div class="row">
		<div class="col-md-12 text-right">
			<button class="btn btn-success btn-lg"><span class="glyphicon glyphicon-floppy-saved"></span> Guardar</button>
		</div>
	</div>

</div>
{!! Form::close() !!}

@endsection
