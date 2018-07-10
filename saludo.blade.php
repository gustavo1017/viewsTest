<!DOCTYPE html>
<html>
<head>
	<title>Saludo</title>
</head>
<body>
                       <!--para pasar la variable nombre al navegador -->

	<h1>Saludos para {{ $nombre }}</h1>
	
	<ul>
		@forelse($consolas as $consola)
		<li>{{ $consola }}</li>
		@empty
		 	<p>No hay consolas :(</p>

		@endforelse
	</ul>


</body>
</html>