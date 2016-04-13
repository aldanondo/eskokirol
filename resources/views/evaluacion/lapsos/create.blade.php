@extends('template.main')

@section('title','Lapsos')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h2><span class="glyphicon glyphicon-plus"></span> Agregar Lapsos</h2>
		</div>
	</div>	

	<div class="row">
		<div class="col-md-4">
			<div class="form-group">
				<label>Periodo Academico</label>
				<input type="text" class="form-control">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>Fecha Inicio</label>
				<input type="date" class="form-control">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>Fecha Final</label>
				<input type="date" class="form-control">
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
			<h2><span class="glyphicon glyphicon-list-alt"></span> Lista de Lapsos</h2>
		</div>
	</div>


	<div class="row">
		<div class="col-md-12">
			<table class="table table-hover">
				<tr>
					<td><b>Periodo Academico</b></td>
				
					<td><b>Fecha Inicio</b></td>
				
					<td><b>Fecha Final</b></td>
				
					<td><b>Operaciones</b></td>
				</tr>
				<tr>
					<td>2014-2016</td>

					<td>29/00/0000</td>
				
					<td>29/00/0000</td>
				
					<td><button class="btn btn-danger btn-lg"> <span class="glyphicon glyphicon-remove"></span> </button> <button class="btn btn-info btn-lg"><span class="glyphicon glyphicon-refresh"></span></button></td>
				</tr>	
				<tr>
					<td>2014-2016</td>

					<td>29/00/0000</td>
				
					<td>29/00/0000</td>
				
					<td><button class="btn btn-danger btn-lg"> <span class="glyphicon glyphicon-remove"></span> </button> <button class="btn btn-info btn-lg"><span class="glyphicon glyphicon-refresh"></span></button></td>
				</tr>								
			</table>
		</div>
	</div>

</div>

@endsection
