@extends('template.main')

@section('title','Lista de Proyectos')

@section('content')

<div class="container-fluid">


	<div class="row">
		<div align="right"> 
			<a href="{{ route('PlanEvaluacion.Proyectos.create') }}" class="btn btn-primary">Registrar Proyectos</a>
		</div>	
	</div>

	<div class="row">
		<div class="col-md-12">
			<table class="table table-hover">
				<tr>
					<td><b>Nombre de Proyecto</b></td>
				
					<td><b>Descripción</b></td>
				
					<td><b>Periodo Academico</b></td>
				
					<td><b>Archivo Adjunto</b></td>
				
					<td><b>Operaciones</b></td>
				</tr>
				<tr>
					<td>asdasdasd</td>
				
					<td>akhkasjdnkajsd ljkhaskdj</td>
				
					<td>2014-2016</td>
				
					<td>Archivo</td>
				
					<td><button class="btn btn-danger btn-lg"> <span class="glyphicon glyphicon-remove"></span> </button> <button class="btn btn-info btn-lg"><span class="glyphicon glyphicon-refresh"></span></button></td>
				</tr>	
				<tr>
					<td>asdasdasd</td>
				
					<td>akhkasjdnkajsd ljkhaskdj</td>
				
					<td>2014-2016</td>
				
					<td>Archivo</td>
				
					<td><button class="btn btn-danger btn-lg"> <span class="glyphicon glyphicon-remove"></span> </button> <button class="btn btn-info btn-lg"><span class="glyphicon glyphicon-refresh"></span></button></td>
				</tr>								
			</table>
		</div>
	</div>

</div>

@endsection
