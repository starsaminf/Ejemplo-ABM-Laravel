@extends("template.master")
@section("titulo") Crear @stop
@section("contenido")
	<fieldset>
		<form action="/mascota/" method="POST">
			<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token()}}" />
			
			<legend>Mascota -> Crear </legend>
			Nombre 	<input type="text" name="nombre">
			<br>
			Raza	<input type="text" name="raza">

		</fieldset>
		<button>Enviar</button>
	</form>
@stop

