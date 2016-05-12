@extends('template.main')

@section('title','Crear Horarios')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h2><span class="glyphicon glyphicon-plus"></span> Agregar Horarios</h2>
		</div>
	</div>	

	<div class="row">
		<div class="col-md-4">
			<div class="form-group">
				<label>Grado</label>
				<select class="form-control">
					<option>Selecione...</option>
				</select>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>Seccion</label>
				<select class="form-control">
					<option>Selecione...</option>
				</select>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>Materia</label>
				<select class="form-control">
					<option>Selecione...</option>
				</select>
			</div>
		</div>				
	</div>

	<div class="row">
		<div class="col-md-3">
			<div class="form-group">
				<label>Hora Inicio</label>
				<select class="form-control">
					<option>Selecione...</option>
				</select>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label>Hora Fin</label>
				<select class="form-control">
					<option>Selecione...</option>
				</select>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label>Docente</label>
				<select class="form-control">
					<option>Selecione...</option>
				</select>
			</div>
		</div>	
		<div class="col-md-3">
			<div class="form-group">
				<label>Salón</label>
				<select class="form-control">
					<option>Selecione...</option>
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
