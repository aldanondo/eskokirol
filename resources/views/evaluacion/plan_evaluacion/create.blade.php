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

	<div class="row">
		<div class="col-md-12">
			<h2><span class="glyphicon glyphicon-list-alt"></span> Lista de Planes de Evaluación</h2>
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
		<div class="col-md-3">
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
		<div class="col-md-12">
			<table class="table table-hover">
				<tr>
					<td><b>Tema o Topico</b></td>
				
					<td><b>Porcentaje</b></td>
				
					<td><b>Operaciones</b></td>
				</tr>
				<tr>
					<td>asdasdasd</td>
				
					<td>akhkasjdnkajsd ljkhaskdj</td>
				
					<td><button class="btn btn-danger btn-lg"> <span class="glyphicon glyphicon-remove"></span> </button> <button class="btn btn-info btn-lg"><span class="glyphicon glyphicon-refresh"></span></button></td>
				</tr>		

			</table>
		</div>
	</div>

</div>

@endsection
