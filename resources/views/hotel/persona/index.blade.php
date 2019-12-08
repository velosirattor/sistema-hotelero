@extends('layouts.admin')
@section('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col xs-12">
		<h3>Listado de Personas <a href="persona/create"><button create class="btn btn-success">Nuevo</button></a></h3>
			@include('hotel.persona.search')
	</div>
<div>


<div class="row">
	<div class="col-lg-12 col-md-12 col-xs-12">
		<div class="table-reponsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Id</th>
					<th>Nombre</th>
					<th>apellido_paterno</th>
					<th>apellido_materno</th>
					<th>tipo_documento</th>
					<th>num_documento</th>
					<th>direccion</th>
					<th>telefono</th>
					<th>email</th>
					<th>opciones</th>
				</thead>
				@foreach ($persona as $cat)
				<tr>
					<td>{{$cat->idPersona}}</td>
					<td>{{$cat->nombre}}</td>
					<td>{{$cat->apellido_paterno}}</td>
					<td>{{$cat->apellido_materno}}</td>
					<td>{{$cat->tipo_documento}}</td>
					<td>{{$cat->num_documento}}</td>
					<td>{{$cat->direccion}}</td>
					<td>{{$cat->telefono}}</td>
					<td>{{$cat->email}}</td>
					<td>
						 
						<a href="{{URL::action('PersonaController@edit',$cat->idPersona)}}"><button class="btn btn-info">editar</button></a>
						
					</td>
				</tr>
				
					@endforeach
			</table>
		</div>
		{{$persona->render()}}
		
	</div>

</div>
@endsection