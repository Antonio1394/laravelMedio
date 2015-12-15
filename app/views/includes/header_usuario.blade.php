<nav class="navbar navbar-default navbar-inverse" role="navigation">
	<div class="container-fluid">
		
		<div class="navbar-header">
			<button type="button" class="navbar-toogle" data-toogle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="#" class="navbar-brend">Tienda</a>
		</div>

		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li><a href="{{URL::to('/')}}" class="navbar-brand"></a>Inicio</li>
				<li><a href="{{URL::to('carros')}}" class="navbar-brand"></a>Tu carrito</li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle navbar-brand" data-toggle="dropdown">Login</a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="{{URL::to('usuario/ordenes')}}"></a>Mis Ordenes</li>
						<li><a href="{{URL::to('usuario/logout')}}"></a>Cerrar Sesion</li>

					</ul>
				</li>	
			</ul>
		</div> 
	</div>	

</nav>
