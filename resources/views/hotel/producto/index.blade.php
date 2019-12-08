@extends('layouts.admin')
@section('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col xs-12">
		<h3>Listado de Productos <a href="producto/create"><button create class="btn btn-success">Nuevo</button></a></h3>
			@include('hotel.producto.search')
	</div>
<div>


<div class="row">
	<div class="col-lg-12 col-md-12 col-xs-12">
		<div class="table-reponsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Id</th>
					<th>Nombre</th>
					<th>Descripcion</th>
					<th>Unidad_medida</th>
					<th>Precio</th>
					<th>stock</th>
					<th>imagen</th>
					<th>estado</th>
					<th>opciones</th>
				</thead>
				@foreach ($producto as $art)
				<tr>
					<td>{{$art->idProducto}}</td>
					<td>{{$art->nombre_producto}}</td>
					<td>{{$art->descripcion}}</td>
					<td>{{$art->unidad_medida}}</td>
					<td>{{$art->precio_producto}}</td>
					<td>{{$art->stock}}</td>
					<td>

						<img src="{{asset('imagenes/productos/'.$art->imagen)}}" alt="{{$art->nombre_producto}}" height="100px" width="100px" class="thumbnail">
						
					</td>

					<td>{{$art->estado}}</td>
					<td>
						 
						<a href="{{URL::action('ProductoController@edit',$art->idProducto)}}"><button class="btn btn-info">editar</button></a>
						
						
					</td>
				</tr>
					
					@endforeach
			</table>
		</div>
		{{$producto->render()}}
		
	</div>

</div>
@endsection