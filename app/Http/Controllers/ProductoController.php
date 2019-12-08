<?php

namespace hotel\Http\Controllers;

use Illuminate\Http\Request;
use hotel\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use hotel\Http\Requests\ProductoFormRequest;
use hotel\producto;
use DB;
class ProductoController extends Controller
{
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
   public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $producto=DB::table('Producto')->where('nombre_producto','LIKE','%'.$query.'%')
            
            ->orderBy('idProducto','asc')
            ->paginate(10); 
            return view('hotel.producto.index',["producto"=>$producto,"searchText"=>$query]);
        }  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("hotel.producto.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductoFormRequest $request)
    {
        $producto=new producto;
        $producto->nombre_producto=$request->get('nombre_producto');
        $producto->descripcion=$request->get('descripcion');
        $producto->unidad_medida=$request->get('unidad_medida');
        $producto->precio_producto=$request->get('precio_producto');
        $producto->stock=$request->get('stock');
        if (Input::hasFile('imagen')){
        	$file=Input::file('imagen');
        	$file->move(public_path().'/imagenes/productos/',$file->getClientOriginalName());
        	$producto->imagen=$file->getClientOriginalName();
        }
      
        $producto->estado=$request='Activo';
        $producto->save();
        return Redirect::to('hotel/producto');
 
    }   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       return view("hotel.producto.show",["producto"=>producto::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){  


   return view("hotel.producto.edit",["producto"=>producto::findOrFail($id)]);
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductoFormRequest $request, $id)
    {
        $producto=producto::findOrFail($id);
        $producto->nombre_producto=$request->get('nombre_producto');
        $producto->descripcion=$request->get('descripcion');
        $producto->unidad_medida=$request->get('unidad_medida');
        $producto->precio_producto=$request->get('precio_producto');
        $producto->stock=$request->get('stock');
        if (Input::hasFile('imagen')){
        	$file=Input::file('imagen');
        	$file->move(public_path().'/imagenes/productos/',$file->getClientOriginalName());
        	$producto->imagen=$file->getClientOriginalName();
        $producto->update();
        return Redirect::to('hotel/producto');
    }

 }
    public function destroy($id)
    {
    
    }
}
