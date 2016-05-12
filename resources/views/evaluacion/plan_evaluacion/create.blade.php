@extends('template.main')

@section('title','Plan de Evaluación')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h2><span class="glyphicon glyphicon-plus"></span> Agrega Plan de Evaluación</h2>
		</div>
	</div>	

	<div class="row">	
		<div class="col-md-2">
			<div class="form-group">
				<label>Grado</label>
				<select  class="form-control">
					<option>Seleccionar...</option>
				</select>
			</div>
		</div>	
		<div class="col-md-2">
			<div class="form-group">
				<label>Sección</label>
				<select  class="form-control">
					<option>Seleccionar...</option>
				</select>
			</div>
		</div>	
		<div class="col-md-2">
			<div class="form-group">
				<label>Mareria</label>
				<select  class="form-control">
					<option>Seleccionar...</option>
				</select>
			</div>
		</div>	
		<div class="col-md-3">
			<div class="form-group">
				<label>Docente</label>
				<select  class="form-control">
					<option>Seleccionar...</option>
				</select>
			</div>
		</div>										
	</div>

	<div class="row">
		<div class="col-md-8">
			<div class="form-group">
				<label>Tema o Topico</label>
				<input type="text" class="form-control">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>Porcentaje</label>
				<select  class="form-control">
					<option>Seleccionar...</option>
				</select>
			</div>
		</div>		
	</div>

	<div class="row">
		<div class="col-md-12 text-right">
			<button class="btn btn-success btn-lg"><span class="glyphicon glyphicon-floppy-saved"></span> Guardar</button>
		</div>
	</div>

</div>

@endsection
