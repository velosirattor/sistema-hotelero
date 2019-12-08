@extends('layouts.admin')
@section('contenido')

	<div class="row">
		<div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Persona: {{$persona->nombre}} </h3>
			@if (count($errors)>0)
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{$error}}</li>
						@endforeach
					</ul>
					
				</div>
			
			@endif
		{!!Form::model($persona,['method'=>'PATCH','route'=>['persona.update', $persona->idPersona]]) !!}
		{{Form::token()}}
			<div class="form-group">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" class="form-control" value="{{$persona->nombre}}" placeholder="Nombre...">
			</div>
			<div class="form-group">
				<label for="apellido_paterno">Apellido Paterno</label>
				<input type="text" name="apellido_paterno" class="form-control" value="{{$persona->apellido_paterno}}" placeholder="apellido_paterno...">
			</div>
			<div class="form-group">
				<label for="apellido_materno">apellido_materno</label>
				<input type="text" name="apellido_materno" class="form-control" value="{{$persona->apellido_materno}}" placeholder="apellido_materno...">
			</div>
			<div class="form-group">
				<label for="tipo_documento">Tipo de documento</label>
				<input type="text" name="tipo_documento" class="form-control"  value="{{$persona->tipo_documento}}"placeholder="tipo_documento...">
			</div>
			<div class="form-group">
				<label for="num_documento">Numero de documento</label>
				<input type="text" name="num_documento" class="form-control" value="{{$persona->num_documento}}" placeholder="num_documento...">
			</div>
			<div class="form-group">
				<label for="direccion">Direccion</label>
				<input type="text" name="direccion" class="form-control" value="{{$persona->direccion}}" placeholder="direccion...">
			</div>
			<div class="form-group">
				<label for="telefono">Telefono</label>
				<input type="text" name="telefono" class="form-control" value="{{$persona->telefono}}" placeholder="telefono...">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="text" name="email" class="form-control" value="{{$persona->email}}" placeholder="email...">
			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submite">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
				
			</div>

		{!!Form::close()!!}
		</div>
		
	</div>
@endsection