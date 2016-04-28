@extends('template.main')

@section('title','Editar Salones: '.$salones->nombre)

@section('content')

{!! Form::open(array('route' => ['PlanEvaluacion.Salones.update',$salones->id], 'method' => 'PUT')) !!}
    
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				{!! Form::label('nombre','Nombre del Salón') !!}
				{!! Form::text('nombre',$salones->nombre, ['class' => 'form-control', 'placeholder' => 'Ingrese Nombre del Salón', 'required'] ) !!}
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				{!! Form::label('capacidad','Capacidad') !!}
				{!! Form::text('capacidad',$salones->capacidad, ['class' => 'form-control', 'placeholder' => 'Ingrese la capacidad del Salón', 'required'] ) !!}
			</div>
		</div>		
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				{!! Form::label('pasillo','Pasillo del Salón') !!}
				{!! Form::text('pasillo',$salones->pasillo, ['class' => 'form-control', 'placeholder' => 'Ingrese el pasillo del Salón', 'required'] ) !!}
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				{!! Form::label('descripcion','Descripción del Salón') !!}
				{!! Form::textarea('descripcion',$salones->descripcion, ['class' => 'form-control', 'placeholder' => 'Ingrese descripción del Salón', 'required'] ) !!}
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