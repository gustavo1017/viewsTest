<!DOCTYPE html>
<html>
<head>
	<title>Saludo</title>
</head>
<body>
                       <!--para pasar la variable nombre al navegador -->

	<h1>Saludos para {{ $nombre }}</h1>
	
	<ul>
		@foreach($consolas as $consola)
		<li>{{ $consola }}</li>
		@endforeach
	</ul>


</body>
</html>