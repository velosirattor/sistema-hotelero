{!! Form::open(array('url'=>'hotel/cliente','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
<div class="form-group">
	<div class="input-group">
		<input type="text" class="form-control" name="searchText" placeholder="Buscar..." value="{{$searchText}}">
		<span class="input-group-btn">
			<button type="submite" class="btn btn-primary">Buscar</button>
		</span>
	</div>
	
</div>

{{Form::close()}}
