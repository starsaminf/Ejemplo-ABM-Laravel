@extends("template.master")
@section("titulo") Listado___ @stop
@section("contenido")
<table  id="mitabla" class="display" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Raza</th>
			<th>Editar</th>
			<th>Eliminar</th>
		</tr>
	</thead>
	@foreach($m as $l)
	<tr>
		<td>{{$l->id}}</td>
		<td>{{$l->nombre}}</td>
		<td>{{$l->raza}}</td>
		<td>
			<form action="/mascota/{{$l->id}}/edit">
				<button>Enviar</button>
			</form>
		</td>
		<td>
			<form action="/mascota/{{$l->id}}" method="post">
				<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token()}}" />
				<input type="hidden" name="_method" value="DELETE" /> 
				<button>Enviar</button>
			</form>

		</td>
	</tr>
	@endforeach
</table>
@stop

@section("scripts")

<script type="text/javascript">
//swal("Hola!");
</script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#mitabla').DataTable();
	} );
</script>
</html>


@stop