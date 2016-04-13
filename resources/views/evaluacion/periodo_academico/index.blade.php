@extends('template.main')

@section('title','Listar Periodo Academico')

@section('content')
	
	<div align="right"> 
		<a href="{{ route('PlanEvaluacion.Periodo_Academico.create') }}" class="btn btn-primary"> <span class="glyphicon glyphicon-plus"></span> Registrar Periodo Academico</a>
	</div>

	<table class="table table-striped">
		<thead>
			<th>Periodo Academico</th>
			<th>Fecha Inicio</th>
			<th>Fecha Fin</th>
			<th>Operación</th>
		</thead>
		<tbody>


		</tbody>
	</table>


@endsection