@extends('template.main')

@section('title','Agregar Proyectos')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h2><span class="glyphicon glyphicon-plus"></span> Agrega Proyectos</h2>
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
		<div class="col-md-3">
			<div class="form-group">
				<label>Agregar Archivo Adjunto</label>
				<input type="file" class="form-control">
			</div>
		</div>											
	</div>

	<div class="row">
		<div class="col-md-8">
			<div class="form-group">
				<label>Nombre Proyecto</label>
				<input type="text" class="form-control">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>Periodo Academico</label>
				<select  class="form-control">
					<option>Seleccionar...</option>
				</select>
			</div>
		</div>		
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label>Descripción del Proyecto</label>
				<textarea class="form-control">Escribir la descripcion la descripción del proyecto</textarea>
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
