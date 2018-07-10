@extends('layout')
@section('contenido')
<h1>Contactos</h1>

<h2>Escribeme</h2>
<form method="POST" action="contacto">

	<label for="nombre">
		Nombre
		<input type="text" name="nombre" value="{{old('nombre')}}">
		{!!$errors->first('nombre','<span class="error">:message</span>')!!}

	</label>
	<label for="email">
		Email
		<input type="text" name="email" value="{{old('email')}}">
        {!!$errors->first('email','<span class="error">:message</span>')!!}
	</label>
	<label for="mensaje">
		Mensaje
		<textarea name="mensaje"  >{{old('mensaje')}}</textarea>
		{!!$errors->first('mensaje','<span class="error">:message</span>')!!}	

	</label>

	<input type="submit" value="Enviar">
	
</form>


@stop