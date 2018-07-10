<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.active{
			text-decoration: none;
			color: green;
		}

	</style>
	<title>Mi sitio</title>
</head>
<body>


<header>
	<h1>{{request()->is('/') ? 'Estas en el home':'No estas en el home' }}</h1>
		<nav>
			<a class=" {{request()->is('/')? 'active':''}} " href="{{ route('home') }}  ">Home</a>
			
			<a class="{{request()->is('saludos/gustavo')? 'active':''}}" href="{{route('saludos','Gustavo')}}">Saludos</a>
			<a class="{{request()->is('contactame')? 'active':''}}" href="{{route('contactos') }}">Contacto</a>
			

		</nav>


	</header>
	@yield('contenido')
	<footer>Copyright {{ date('Y') }}</footer>
</body>
</html>