<!DOCTYPE html>
<html>
<head>
	<title></title>
	@include('includes.head')
</head>
<body>
	<div class="container">
		<h1>Tienda de libros</h1>
		@if(Auth::check())
			@include('includes.header_invitado')
		@else
			@include('includes.header_admin')	
		@endif

		@yield('contenido_admin')

		@include('includes.footer')
	</div>
</body>
</html>