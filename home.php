<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>

	<h1>Home</h1>

	<header>
		<nav>
			<a href="<?php echo route('home') ?>">Home</a>
			<!-- por el link se pasa la variable en este caso Gustavo  -->
			<a href="<?php echo route('saludos','Gustavo') ?>">Saludos</a>
			<a href="<?php echo route('contactos') ?>">Contacto</a>
			

		</nav>

	</header>


</body>
</html>