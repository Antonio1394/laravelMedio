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
			@include('includes.header_usuario')	
		@endif

		@yield('content')

		@include('includes.footer')
	</div>

	@include('includes.script')
</body>
</html>