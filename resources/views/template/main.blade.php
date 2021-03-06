<!DOCTYPE html>
<html lang="es">
<head>
	<title>@yield('title','Default') | Sistema de Escuelas</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }} ">
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/chosen/chosen.css') }} ">
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/datepicker/css/datepicker.css') }} ">
	@yield('css')

</head>
<body>
	@include('template.partials.nav')
	
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">@yield('title','Default')</h3>
	  </div>
	  <div class="panel-body" >
	   		@include('flash::message')
	   		@include('template.partials.errors')
			@yield('content')
		
	  </div>
	</div>

	<script src="{{ asset('plugins/jquery/js/jquery-2.2.1.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
	<script src="{{ asset('plugins/chosen/chosen.jquery.js') }}"></script>
	<script src="{{ asset('plugins/datepicker/js/bootstrap-datepicker.js') }}"></script>
	@yield('js')
	
</body>
</html>