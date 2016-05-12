@extends('template.main')

@section('title','Agregar Lapso Academico')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h2><span class="glyphicon glyphicon-plus"></span> Agregar Lapsos</h2>
		</div>
	</div>	

	<div class="row">
		<div class="col-md-12">
			<div align="right"> 
				<a href="{{ route('PlanEvaluacion.Lapsos.create') }}" class="btn btn-primary"> <span class="glyphicon glyphicon-plus"></span> Registrar Periodo Academico</a>
			</div>
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
					<td><b>Lapsos Academico</b></td>
					<td><b>Operaciones</b></td>
				</tr>
				<tbody>
					@foreach ($lapsos as $lapso)
						<tr> 
							<td>{{ $lapso->lapso }}</td>
	
						    <td>
						    
						    	<a href="{{ route('PlanEvaluacion.Lapsos.edit', $lapso->id ) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden= "true"></span></a>

		                    	 <a href="{{ route('PlanEvaluacion.Lapsos.destroy', $lapso->id ) }}" class="btn btn-danger" onclick="return confirm('Seguro que desea eliminar la institucion?')"><span class="glyphicon glyphicon-remove-circle" aria-hidden= "true"></span> </a>
							
					        </td>
						</tr>
					@endforeach
				</tbody>										
			</table>
			<div align="center">
				{{ $lapsos->render() }}
			</div>			
		</div>
	</div>

</div>

@endsection
