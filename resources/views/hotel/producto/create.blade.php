@extends('layouts.admin')
@section('contenido')
	<div class="row">
		<div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Producto</h3>
			@if (count($errors)>0)
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{$error}}</li>
						@endforeach


					</ul>
					
				</div>
			@endif
   		</div>
	</div>
		{!!Form::open(array('url'=>'hotel/producto','method'=>'POST','autocomplete'=>'off', 'files'=>'true')) !!}
		{{Form::token()}}
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="nombre_articulo">Nombre</label>
				<input type="text" name="nombre_producto" requerid value="{{old('nombre_producto')}}"class="form-control" placeholder="Nombre...">
			</div>
		</div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="descripcion">Descripcion</label>
				<input type="text" name="descripcion" requerid value="{{old('descripcion')}}"class="form-control" placeholder="Descripcion...">
			</div>
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="unidad_medida">Unidad de medida</label>
				<input type="text" name="unidad_medida" requerid value="{{old('unidad_medida')}}"class="form-control" placeholder="unidad_medida...">
			</div>
		</div>
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="precio_producto">Precio</label>
				<input type="text" name="precio_producto" requerid value="{{old('precio_producto')}}"class="form-control" placeholder="Precio...">
			</div>
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="stock">Stock</label>
				<input type="text" name="stock" requerid value="{{old('stock')}}"class="form-control" placeholder="Stock...">
			</div>
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="imagen">Imagen</label>
				<input type="file" name="imagen" class="form-control">
			</div>
		</div>
			
			<div class="form-group">
				<button class="btn btn-primary" type="submite">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
				
			</div>
		</div>
	</div>
		{!!Form::close()!!}
@endsection