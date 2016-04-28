@extends('template.main')

@section('title','Editar Lapso Academico: '.$Lapsos->lapso)

@section('content')



{!! Form::open(array('route' => ['PlanEvaluacion.Lapsos.update',$Lapsos->id], 'method' => 'PUT')) !!}
    
	<div class="row">
		<div class="col-md-12">
		    <div class="form-group">
				
				{!! Form::label('lapso','Periodo Academico') !!}
				
				{!! Form::text('lapso',$Lapsos->lapso, ['class' => 'form-control', 'placeholder' => 'Periodo Academico', 'required'] ) !!}

			</div>
		</div>
	</div>	    
	<div class="row">
		<div class="col-md-11">
		    <div class="form-group text-right">

				{!! Form::submit('Editar', array('class' => 'btn btn-primary')) !!}
			
			</div>
		</div>
	</div>

{!! Form::close() !!}	

	
@endsection