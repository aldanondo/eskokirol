@extends('template.main')

@section('title','Lista de Horarios')

@section('content')

<div class="container-fluid">

	<div class="row">
		<div align="right"> 
			<a href="{{ route('PlanEvaluacion.Horarios.create') }}" class="btn btn-primary">Registrar Horarios</a>
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
