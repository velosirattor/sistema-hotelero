@extends('layouts.admin')
@section('contenido')
	<div class="row">
		<div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
			<h3>Nueva Persona</h3>
			@if (count($errors)>0)
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{$error}}</li>
						@endforeach
					</ul>
					
				</div>
			@endif
		{!!Form::open(array('url'=>'hotel/cliente','method'=>'POST','autocomplete'=>'off')) !!}
		{{Form::token()}}

		
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            RESERVACION <small></small>
                        </h1>
                    </div>
                </div> 
                 
                                 
            <div class="row">
                
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
INFORMACION PERSONAL
                        </div>
                        <div class="panel-body">
						<form name="form" method="post">
                            <div class="form-group">
                                            <label>Titulo*</label>
                                            <select name="Title" class="form-control" required >
												<option value selected ></option>
                                                <option value="Dr.">Dr.</option>
                                                <option value="Miss.">Miss.</option>
                                                <option value="Mr.">Mr.</option>
                                                <option value="Mrs.">Mrs.</option>
												<option value="Lic.">Lic.</option>
												<option value="Ing.">Ing .</option>
												<option value="Fun.">Fun.</option>
                                            </select>
                              </div>
			<div class="form-group">
				<label for="FName">Nombre completo</label>
				<input type="text" name="FName" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="LName">Apellidos</label>
				<input type="text" name="LName" class="form-control" required>
			</div>
			<div class="form-group">
                                            <label>Nacionalidad*</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="National"  value="Local" checked="">Local
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="National"  value="Extranjero">Extranjero
                                            </label>
                         
                                </div>

			<div class="form-group">
				<label for="Documento">Documento</label>
				<input type="text" name="Documento" class="form-control" required>
			</div>

			<div class="form-group">
				<label for="codigo_documento">Codigo documento</label>
				<input type="text" name="codigo_documento" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="Email">Email</label>
				<input type="Email" name="Email" class="form-control" required>
			</div>
			<?php

								$Country = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");

								?>
											<label>Pais*</label>
                                            <select name="Country" class="form-control" required>
												<option value selected ></option>
                                                <?php
												foreach($Country as $key => $value):
												echo '<option value="'.$value.'">'.$value.'</option>'; //close your tags!!
												endforeach;
												?>
                                            </select>
                                           
			<div class="form-group">
				<label for="Phone">Telefono</label>
				<input type="text" name="Phone" class="form-control" required>
			</div>
			 <div class="form-group">
			 	     </div>
							   
                        </div>
                        
                    </div>
                </div>
                 <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                     INFORMACIÓN DE RESERVA

                        </div>
                        <div class="panel-body">
								<div class="form-group">
                                            <label>Tipo de habitación*</label>
                                            <select name="TRoom"  class="form-control" required>
												<option value selected ></option>
                                                <option value="Estandar">Estandar</option>
                                                <option value="Lujo">HABITACIÓN DE LUJO</option>
												<option value="Apartamento">Apartamento</option>
												</option>
                                            </select>
                              </div>
			 <div class="form-group">
                                            <label>Tipo de cama
											</label>
                                            <select name="Bed" class="form-control" required>
												<option value selected ></option>
                                                <option value="Simple">Simple</option>
                                                <option value="Doble">Doble</option>
												<option value="Matrimonial">Matrimonial</option>
												<option value="Ninguna">Ninguna</option>
                                                
                                             
                                            </select>
                              </div>
                               <div class="form-group">
                                            <label>No. de habitación *</label>
                                            <select name="NRoom" class="form-control" required>
												<option value selected ></option>
                                                <option value="1">1</option>
                                            <option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option> 
                                            </select>
                              </div>
                              <div class="form-group">
                                            <label>comidas</label>
                                            <select name="Meal" class="form-control"required>
												<option value selected ></option>
                                                <option value="solo">Sencillo
</option>
                                                <option value="Desayuno">Desayuno</option>
												<option value="Almuerzo">Almuerzo</option>
												<option value="Completo">Completo</option>
												
                                                
                                             
                                            </select>
                              </div>
                              <div class="form-group">
                                            <label>Entrada</label>
                                            <input name="cin" type ="date" class="form-control" required>
                                            
                               </div>
							   <div class="form-group">
                                            <label>Salida</label>
                                            <input name="cout" type ="date" class="form-control" required>
                                            	</form>
							
                    </div>
                </div>
            </div>
           
                
                                            
                               </div>
                       </div>
                        
                    </div>
                </div>
				
			<div class="form-group">
				<button class="btn btn-primary" type="submite">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
				
			</div>

		{!!Form::close()!!}
		</div>
		
	</div>
@endsection