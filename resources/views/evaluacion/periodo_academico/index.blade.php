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
			@foreach ($periodo_academicos as $periodo_academico)
				<tr> 
					<td>{{ $periodo_academico->ano_academico }}</td>
					<td>{{ $periodo_academico->inicio_periodo }}</td>
					<td>{{ $periodo_academico->fin_periodo }}</td>
				    <td>

				    	<a href="{{ route('PlanEvaluacion.Periodo_Academico.edit', $periodo_academico->id ) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden= "true"></span></a>

                    	 <a href="{{ route('PlanEvaluacion.Periodo_Academico.destroy', $periodo_academico->id ) }}" class="btn btn-danger" onclick="return confirm('Seguro que desea eliminar la institucion?')"><span class="glyphicon glyphicon-remove-circle" aria-hidden= "true"></span> </a>

			        </td>
				</tr>
			@endforeach

		</tbody>
	</table>

@endsection