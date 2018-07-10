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


		@if (count($consolas)===1)
		<p>Solo tienes una consola</p>
		@elseif(count($consolas)>1)
		<p>Tienes varias</p>
		@endif
	</ul>


</body>
</html>