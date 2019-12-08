<div class="modal fade modal-slide-in-right" aria-hidden="true" 
role="dialog" tabindex="-1" id="modal-delete-{{$cat->idPersona}}">
		{{Form::Open(array('action'=>array('PersonaController@destroy', $cat->idPersona), 'method'=>'DELETE'))}}
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dimiss="modal" aria-Label="Close">
							<span aria-hidden="true">x</span>
						</button>
						<h4 class="modal-title">Eliminar Persona</h4>
					</div>
					<div class="modal-body">
						<p>De verdad desea eliminar los datos de esta persona?</p>
						
					</div>
					<div class="modal-footer"></div>
					<button type="button" class="btn btn-default" data-demiss="modal">Cerrar</button>
					<button type="submite" class="btn btn-primary">Confirmar</button>
				</div>
			</div>
		
</div>
{{Form::Close()}}