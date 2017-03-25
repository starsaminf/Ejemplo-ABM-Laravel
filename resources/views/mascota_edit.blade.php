@extends("template.master")
@section("titulo") Editar {{$m->nombre}} @stop
@section("contenido")
<fieldset>
	<form action="/mascota/{{$m->id}}" method="post">
		<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token()}}" />
		<input type="hidden" name="_method" value="PUT" /> 

		<legend>Mascota -> Editar -> <b>{{$m->nombre}}</b></legend>
		Nombre 	<input type="text" name="nombre" value="{{$m->nombre}}">
		<br>
		Raza	<input type="text" name="raza" value="{{$m->raza}}">

	</fieldset>
	<button>Enviar</button>
</form>
@stop

