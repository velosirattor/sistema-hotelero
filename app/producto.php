<?php

namespace hotel;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    protected $table='Producto';
    protected $primaryKey='idProducto';


    public $timestamps=false;

    protected $fillable =[
                'nombre_producto',
                'descripcion',
                'unidad_medida',
                'precio_producto',
                'stock',
                'imagen',
                'estado'
    ];
    protected $guarded =[
    ];
}
