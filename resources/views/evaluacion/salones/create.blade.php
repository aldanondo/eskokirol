@extends('template.main')

@section('title','Salones')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h2><span class="glyphicon glyphicon-plus"></span> Agrega Salones</h2>
		</div>
	</div>	
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label>Nombre Salones</label>
				<input type="text" class="form-control">
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label>Cantidad Salones</label>
				<input type="text" class="form-control">
			</div>
		</div>		
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label>Pasillo</label>
				<textarea class="form-control">Escribir</textarea>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label>Descripción</label>
				<textarea class="form-control">Escribir</textarea>
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
			<h2><span class="glyphicon glyphicon-list-alt"></span> Lista de Salones</h2>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<table class="table table-hover">
				<tr>
					<td><b>Nombre de Salones</b></td>
				
					<td><b>Capacidad</b></td>
				
					<td><b>Pasillo</b></td>
				
					<td><b>Descripción</b></td>
				
					<td><b>Operaciones</b></td>
				</tr>
				<tr>
					<td>Simón Bolivar</td>
				
					<td>20</td>
				
					<td>Canaima</td>
				
					<td>Este salon esta al lado de tal.</td>
				
					<td><button class="btn btn-danger btn-lg"> <span class="glyphicon glyphicon-remove"></span> </button> <button class="btn btn-info btn-lg"><span class="glyphicon glyphicon-refresh"></span></button></td>
				</tr>	
				<tr>
					<td>Simón Bolivar</td>
				
					<td>20</td>
				
					<td>Canaima</td>
				
					<td>Este salon esta al lado de tal.</td>
				
					<td><button class="btn btn-danger btn-lg"> <span class="glyphicon glyphicon-remove"></span> </button> <button class="btn btn-info btn-lg"><span class="glyphicon glyphicon-refresh"></span></button></td>
				</tr>								
			</table>
		</div>
	</div>

</div>

@endsection
