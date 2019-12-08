<?php

namespace hotel\Http\Controllers;

use Illuminate\Http\Request;
use hotel\Http\Requests\PersonaFormRequest;
use hotel\Http\Requests;
use hotel\persona;
use Illuminate\Support\Facades\Redirect;

use DB;
class PersonaController extends Controller
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
            $persona=DB::table('Persona')->where('nombre','LIKE','%'.$query.'%')
            
            ->orderBy('idPersona','asc')
            ->paginate(5); 
            return view('hotel.persona.index',["persona"=>$persona,"searchText"=>$query]);
        }  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("hotel.persona.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonaFormRequest $request)
    {
        $persona=new persona;
        $persona->nombre=$request->get('nombre');
        $persona->apellido_paterno=$request->get('apellido_paterno');
        $persona->apellido_materno=$request->get('apellido_materno');
        $persona->tipo_documento=$request->get('tipo_documento');
        $persona->num_documento=$request->get('num_documento');
        $persona->direccion=$request->get('direccion');
        $persona->telefono=$request->get('telefono');
        $persona->email=$request->get('email');
        $persona->condicion='1';
        $persona->save();
        return Redirect::to('hotel/persona');
 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       return view("hotel.persona.show",["persona"=>persona::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      return view("hotel.persona.edit",["persona"=>persona::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PersonaFormRequest $request, $id)
    {
        $persona=Persona::findOrFail($id);
        $persona->nombre=$request->get('nombre');
        $persona->apellido_paterno=$request->get('apellido_paterno');
        $persona->apellido_materno=$request->get('apellido_materno');
        $persona->tipo_documento=$request->get('tipo_documento');
        $persona->num_documento=$request->get('num_documento');
        $persona->direccion=$request->get('direccion');
        $persona->telefono=$request->get('telefono');
        $persona->email=$request->get('email');
        $persona->update();
        return Redirect::to('hotel/persona');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $persona=Persona::find($id);

        $persona->delete();



      Session::flash('message','Persona eliminada correctamente');

        return redirect::to('admin/users');


    }
}
