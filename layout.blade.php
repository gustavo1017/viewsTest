<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.active{
			text-decoration: none;
			color: green;
		}
		.error{
			color: red;
			font-size: 12px;
		}

	</style>
	<title>Mi sitio</title>
</head>
<body>


<header>
	<!--Solo por el ejemplo esta funcion no va aca -->
	<?php function activeMenu($url){
		return request()->is($url) ? 'active':'';
	}
	?>
		<nav>
			<a class=" {{activeMenu('/')}} " href="{{ route('home') }}  ">Home</a>
			<!-- * se puede escribir cualquier cosa en lugar del asterisco -->
			<a class="{{activeMenu('saludos/*')}}" href="{{route('saludos','Gustavo')}}">Saludos</a>
			<a class="{{activeMenu('contactame')}}" href="{{route('contactos') }}">Contacto</a>
			

		</nav>


	</header>
	@yield('contenido')
	<footer>Copyright {{ date('Y') }}</footer>
</body>
</html>