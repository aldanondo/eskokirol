@extends('template.main')

@section('title','Horarios')

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

	<div class="row">
		<div class="col-md-12">
			<h2><span class="glyphicon glyphicon-list-alt"></span> Lista de Horarios</h2>
		</div>
	</div>


	<div class="row">
		<div class="col-md-12">
			<table class="table table-hover">
				<tr>
					<td><b>Materia</b></td>
				
					<td><b>Seccion</b></td>
				
					<td><b>Grado</b></td>
				
					<td><b>Horario</b></td>

					<td><b>Profesor</b></td>

					<td><b>Salón</b></td>

					<td><b>Operación</b></td>
				</tr>
				<tr>
					<td>2014-2016</td>

					<td>29/00/0000</td>
				
					<td>29/00/0000</td>

					<td>2014-2016</td>

					<td>29/00/0000</td>
				
					<td>29/00/0000</td>					
				
					<td><button class="btn btn-danger"> <span class="glyphicon glyphicon-remove"></span> </button> <button class="btn btn-info"><span class="glyphicon glyphicon-refresh"></span></button></td>
				</tr>	
				<tr>
					<td>2014-2016</td>

					<td>29/00/0000</td>
				
					<td>29/00/0000</td>

					<td>2014-2016</td>

					<td>29/00/0000</td>
				
					<td>29/00/0000</td>					
				
					<td><button class="btn btn-danger"> <span class="glyphicon glyphicon-remove"></span> </button> <button class="btn btn-info"><span class="glyphicon glyphicon-refresh"></span></button></td>
				</tr>								
			</table>
		</div>
	</div>

</div>

@endsection
