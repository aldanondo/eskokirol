@extends('template.main')

@section('title','Salones')

@section('content')

<div class="container-fluid">

	<div class="row">
		<div align="right"> 
			<a href="{{ route('PlanEvaluacion.Salones.create') }}" class="btn btn-primary">Registrar Actividades</a>
		</div>	
	</div>

	<div class="row">
		<div class="col-md-12"> 
			<h2>Registrar Salones</h2>
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

				@foreach($salones as $salon)
					<tr>
						<td>{{ $salon->nombre }}</td>
					
						<td>{{ $salon->capacidad }}</td>
					
						<td>{{ $salon->pasillo }}</td>
					
						<td>{{ $salon->descripcion }}</td>
					
						<td>
							<a href="{{ route('PlanEvaluacion.Salones.edit', $salon->id ) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden= "true"></span></a>
                    		<a href="{{ route('PlanEvaluacion.Salones.destroy', $salon->id ) }}" class="btn btn-danger" onclick="return confirm('Seguro que desea eliminar la institucion?')"><span class="glyphicon glyphicon-remove-circle" aria-hidden= "true"></span> </a>

						</td>
					</tr>	
				@endforeach	

			</table>
		</div>
	</div>

</div>

@endsection
