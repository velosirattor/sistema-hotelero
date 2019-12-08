<?php

namespace hotel;

use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    protected $table='Persona';
    protected $primaryKey='idPersona';


    public $timestamps=false;

    protected $fillable =[
    			'nombre',
    			'apellido_paterno',
    			'apellido_materno',
    			'tipo_documento',
    			'num_documento',
    			'direccion',
    			'telefono',
    			'email',
                'condicion'

    ];
    protected $guarded =[
    ];
}
