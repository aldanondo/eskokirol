<!DOCTYPE html>
<html lang="es">
<head>
	<title>@yield('title','Default') | Sistema de Escuelas</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }} ">
</head>
<body>
	@include('template.partials.nav')

	<section>
			@yield('content')
	</section>
	

	<script src="{{ asset('plugins/jquery/js/jquery-2.2.1.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
	
</body>
</html>