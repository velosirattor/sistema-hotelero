@extends('layouts.admin')
@section('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col xs-12">
		<h3>Listado de Clientes <a href="cliente/create"><button create class="btn btn-success">Nuevo</button></a></h3>
			@include('hotel.cliente.search')
	</div>
<div>


<div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            
                        </div>
                        <div class="panel-body">
                            <div class="panel-group" id="accordion">
							
							<div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
											<button class="btn btn-default" type="button">
												Informacion cliente
                                                        <span class="badge"></span>
											</button>
											</a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse in" style="height: auto;">
                                        <div class="panel-body">
                                           <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Titulo</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Nacionalidad</th>
                                            <th>Documento</th>
                                            <th>Codigo_documento</th> 
                                            <th>Email</th>
                                            <th>Pais</th>
                                            <th>Telefono</th>
											<th>Tipo Habitacion</th>
											<th>Cama</th>
                                            <th>NRoom</th>
											<th>Comida</th>
											<th>Check in</th>
											<th>Check out</th>
											
											

                                    </thead>
                                     </tr>

                                        @foreach ($roombook as $cat)
             <tr>
                    <td>{{$cat->id}}</td>
                    <td>{{$cat->Title}}</td>
                    <td>{{$cat->FName}}</td>
                    <td>{{$cat->LName}}</td>
                    <td>{{$cat->National}}</td>
                    <td>{{$cat->Documento}}</td>
                    <td>{{$cat->codigo_documento}}</td>
                    <td>{{$cat->Email}}</td>
                    <td>{{$cat->Country}}</td>
                    <td>{{$cat->Phone}}</td>
                    <td>{{$cat->TRoom}}</td>
                    <td>{{$cat->Bed}}</td>
                    <td>{{$cat->NRoom}}</td>
                    <td>{{$cat->Meal}}</td>
                    <td>{{$cat->cin}}</td>
                    <td>{{$cat->cout}}</td>
                    <td>
                         
                        <a href="{{URL::action('ClienteController@edit',$cat->id)}}"><button class="btn btn-info">editar</button></a>
                        
                    </td>
                </tr>
                
                    @endforeach
                                    <tbody>
                                        
									
                                        
                                    </tbody>
                                </table>
								
                            </div>
                                {{$roombook->render()}}
                        </div>
                    </div>

                      <!-- End  Basic Table  --> 
                                        </div>
                                    </div>
                                </div>
							
                                   
                <!-- DEOMO-->
            <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed">
                                            <button class="btn btn-primary" type="button">
                                               Informacion de reserva
 <span class="badge"></span>
                                            </button>
                                            
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse" style="height: 0px;">
                                        <div class="panel-body">
                                        
                                           <div class="table-responsive">
                                                <table class="table">                  
                                                
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                        
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Tipo Habitacion</th>
                                            <th>Cama</th>
                                            <th>NRoom</th>
                                            <th>Comida</th>
                                            <th>Check in</th>
                                            <th>Check out</th>

                
                                        </tbody>
                                </table>
                                
                            </div>
                        </div>
                    </div>
                      <!-- End  Basic Table  --> 
                                        </div>
                                    </div>
                                </div>

                                
@endsection 