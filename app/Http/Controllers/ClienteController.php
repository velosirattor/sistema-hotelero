<?php


namespace hotel\Http\Controllers;
use Illuminate\Http\Request;
use hotel\Http\Requests\ClienteFormRequest;
use hotel\Http\Requests;
use hotel\roombook;
use Illuminate\Support\Facades\Redirect;
use DB;

class ClienteController extends Controller
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
            $roombook=DB::table('roombook')->where('FName','LIKE','%'.$query.'%')
            
            ->orderBy('id','asc')
            ->paginate(5); 
            return view('hotel.cliente.index',["roombook"=>$roombook,"searchText"=>$query]);
        }  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view("hotel.cliente.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClienteFormRequest $request)
    {
        $roombook=new roombook;
        $roombook->Title=$request->get('Title');
        $roombook->FName=$request->get('FName');
        $roombook->LName=$request->get('LName');
        $roombook->National=$request->get('National');
        $roombook->Documento=$request->get('Documento');
        $roombook->codigo_documento=$request->get('codigo_documento');
        $roombook->Email=$request->get('Email');
        $roombook->Country=$request->get('Country');
        $roombook->NRoom=$request->get('NRoom');
        $roombook->Phone=$request->get('Phone');
        $roombook->TRoom=$request->get('TRoom');
        $roombook->Bed=$request->get('Bed');
        $roombook->Meal=$request->get('Meal');
        $roombook->cin=$request->get('cin');
        $roombook->cout=$request->get('cout');
        $roombook->save();
        return Redirect::to('hotel/cliente');
 
    } 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       return view("hotel.cliente.show",["cliente"=>cliente::findOrFail($id)]);
    }

    /**
     * Show the formclien for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $cliente =cliente::findOrFail($id);
            $persona=DB::table('Persona')->where('condicion','=','1')->get();
      return view("hotel.cliente.edit",["cliente"=>$cliente,'Persona'=>$persona]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClienteFormRequest $request, $id)
    { 
        $cliente=cliente::findOrFail($id);
        $cliente->idPersona=$request->get('idPersona');
        $cliente->Codigo_cliente=$request->get('Codigo_cliente');
        $cliente->nombre=$request->get('nombre');
        $cliente->apellido_paterno=$request->get('apellido_paterno');
        $cliente->apellido_materno=$request->get('apellido_materno');
        $cliente->tipo_documento=$request->get('tipo_documento');
        $cliente->num_documento=$request->get('num_documento');
        $cliente->direccion=$request->get('direccion');
        $cliente->telefono=$request->get('telefono');
        $cliente->email=$request->get('email');
        $cliente->condicion='1';
        $cliente->update();
        return Redirect::to('hotel/cliente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $cliente=cliente::findOrFail($id);
       $cliente->condicion='0';
       $cliente->update();
       return Redirect::to('hotel.cliente');
    }
}