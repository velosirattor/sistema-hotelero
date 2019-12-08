@extends('layouts.admin')
@section('contenido')
<div class="row">
		<div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Producto: {{$producto->nombre_producto}} </h3>
			@if (count($errors)>0)
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{$error}}</li>
						@endforeach
					</ul>
					
				</div>
			
			@endif
		{!!Form::model($producto,['method'=>'PATCH','route'=>['producto.update', $producto->idProducto]]) !!}
		{{Form::token()}}
			<div class="form-group">
				<label for="nombre_producto">Nombre Producto</label>
				<input type="text" name="nombre_producto" class="form-control" value="{{$producto->nombre_producto}}" placeholder="Nombre Producto...">
			</div>
			<div class="form-group">
				<label for="descripcion">Descripcion</label>
				<input type="text" name="descripcion" class="form-control" value="{{$producto->descripcion}}" placeholder="descripcion...">
			</div>
			<div class="form-group">
				<label for="unidad_medida">unidad_medida</label>
				<input type="text" name="unidad_medida" class="form-control" value="{{$producto->unidad_medida}}" placeholder="unidad medida...">
			</div>
			<div class="form-group">
				<label for="precio_producto">Precio</label>
				<input type="text" name="precio_producto" class="form-control"  value="{{$producto->precio_producto}}"placeholder="Precio Producto...">
			</div>
			<div class="form-group">
				<label for="stock">Stock</label>
				<input type="text" name="stock" class="form-control" value="{{$producto->stock}}" placeholder="stock...">
			</div>
			<div class="form-group"> 
				<label for="imagen">imagen</label>
				<input type="file" name="imagen " class="form-control" >
				@if (($producto->imagen)!="")

					<img src="{{asset('imagenes/productos/.$producto->imagen')}}">
					@endif
			</div>
			
			
			
			<div class="form-group">
				<button class="btn btn-primary" type="submite">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
				
			</div>

		{!!Form::close()!!}
		</div>
		
	</div>
@endsection