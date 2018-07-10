<!DOCTYPE html>
<html>
<head>
	<title>Mi sitio</title>
</head>
<body>


<header>
		<nav>
			<a href="<?php echo route('home') ?>">Home</a>
			<!-- por el link se pasa la variable en este caso Gustavo  -->
			<a href="<?php echo route('saludos','Gustavo') ?>">Saludos</a>
			<a href="<?php echo route('contactos') ?>">Contacto</a>
			

		</nav>


	</header>
	@yield('contenido')
	<footer>Copyright {{ date('Y') }}</footer>
</body>
</html>