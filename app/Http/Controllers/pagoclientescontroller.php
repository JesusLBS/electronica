<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pagoclientes;
use App\Models\estados;
use App\Models\formapagos; 
use Session;

 
class pagoclientescontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function desactivarpcliente($id_pcliente)
    {
        // Desactivar 
        $pagocliente = pagoclientes::find($id_pcliente);
        $pagocliente->delete();
        
        Session::flash('mensajed',"Cliente Desactivado correctamente");

        return redirect()->to('electronica_cliente');
    }

    public function activarpcliente($id_pcliente)
    {
        // Activacion
        pagoclientes::withTrashed()->where('id_pcliente',$id_pcliente)->restore();
        
        Session::flash('mensaje',"Cliente Activado correctamente");

        return redirect()->to('electronica_cliente');
    }
    public function borrarpcliente($id_pcliente)
    {
        // Eliminacion
        $pagoclientes = pagoclientes::withTrashed()->find($id_pcliente)->forceDelete();

        Session::flash('mensajedelete',"Informacion del cliente Eliminada correctamente");

        return redirect()->to('electronica_cliente');
    }
    /*-----------------------------------------------------------Start Cliente----------------------------------------------*/
    public function index()
    {
        
        $consulta2 = pagoclientes::withTrashed()->join('estados','pagoclientes.id_estado','=','estados.id_estado')
                ->select('pagoclientes.id_pcliente','pagoclientes.nombre_cliente','pagoclientes.apellido_pcliente','pagoclientes.apellido_mcliente',
                        'pagoclientes.email_cliente','estados.nombre_estado','pagoclientes.celular_cliente','pagoclientes.deleted_at')
                ->get();

        

        //return $id_sigue;
 
        return view ('electronica/cliente')
            
            ->with('consulta2',$consulta2);
            
         
    }


    public function pago()
    {
        $consulta = pagoclientes::orderBy('id_pcliente','DESC')
                   ->take(1)->get();
        $cuantos =count($consulta);

        if ($cuantos == 0) {
            $id_sigue = 1;
        }
        else{
            $id_sigue = $consulta[0]->id_pcliente + 1;
        }

        //return $id_sigue;

        $estados = estados::orderBy('nombre_estado')->get();
        $formapagos = formapagos::orderBy('forma_pago')->get();

        return view ('electronica/pagocliente')
            ->with('id_sigue',$id_sigue)
            ->with('estados',$estados)
            ->with('formapagos',$formapagos);
       
    }

    public function guardarcliente(Request $request)
    {     
        
        $this->validate($request,[
            'nombre_cliente'       => 'required|regex:/^[A-Z][A-Z,a-z, ,ü, é, á, í, ó, ú, ñ]+$/',
            'apellido_pcliente'    => 'required|regex:/^[A-Z][A-Z,a-z, ,ü, é, á, í, ó, ú, ñ]+$/',
            'apellido_mcliente'    => 'required|regex:/^[A-Z][A-Z,a-z, ,ü, é, á, í, ó, ú, ñ]+$/',
            'direccion_cliente'    => 'required|regex:/^[A-Z][A-Z,a-z, ,ü, é, á, í, ó, ú, ñ]+$/',
            
            'colonia_cliente'      => 'required|regex:/^[A-Z][A-Z,a-z, ,ü, é, á, í, ó, ú, ñ]+$/',
            'ciudad_cliente'       => 'required|regex:/^[A-Z][A-Z,a-z, ,ü, é, á, í, ó, ú, ñ]+$/',
            
            'codigo_postalcliente' => 'required|regex:/^[0-9]{5}$/',
            'email_cliente'        => 'required|email',
            'celular_cliente'      => 'required|regex:/^[0-9]{10}$/',
           
            
        ]);




        $cliente = new pagoclientes;

        $cliente->id_pcliente              = $request->input('id_pcliente');
        $cliente->nombre_cliente           = $request->input('nombre_cliente');
        $cliente->apellido_pcliente        = $request->input('apellido_pcliente');
        $cliente->apellido_mcliente        = $request->input('apellido_mcliente');
        $cliente->direccion_cliente        = $request->input('direccion_cliente');
        $cliente->departamento_cliente     = $request->input('departamento_cliente');
        $cliente->colonia_cliente          = $request->input('colonia_cliente'); 
        $cliente->ciudad_cliente           = $request->input('ciudad_cliente'); 
        $cliente->id_estado                = $request->input('id_estado'); 
        $cliente->codigo_postalcliente     = $request->input('codigo_postalcliente'); 
        $cliente->email_cliente            = $request->input('email_cliente'); 
        $cliente->celular_cliente          = $request->input('celular_cliente'); 
        $cliente->id_forma_pago            = $request->input('id_forma_pago'); 
    
        $cliente->save();

        Session::flash('mensaje',"Datos de $request->nombre_cliente $request->apellido_pcliente $request->apellido_mcliente se agregron correctamente");
        return redirect()->to('electronica_cliente');
        


            //return $request->input();



       
    }
     public function editar_pcliente($id_pcliente)
    {
        //$data = pagoclientes::withTrashed()->find($id_pcliente);


        $data = pagoclientes::withTrashed()->join('estados','pagoclientes.id_estado','=','estados.id_estado')
                                           ->join('formapagos','pagoclientes.id_forma_pago','=','formapagos.id_forma_pago',)
                ->select('pagoclientes.id_pcliente','pagoclientes.nombre_cliente','pagoclientes.apellido_pcliente','pagoclientes.apellido_mcliente',
                         'pagoclientes.direccion_cliente','pagoclientes.colonia_cliente','pagoclientes.ciudad_cliente',
                         'estados.nombre_estado as est','pagoclientes.codigo_postalcliente','pagoclientes.email_cliente',
                         'pagoclientes.celular_cliente','estados.id_estado','formapagos.forma_pago as fpago','formapagos.id_forma_pago')
                ->where('id_pcliente',$id_pcliente)
                ->get();

        $estados    = estados::all();
        $formapagos = formapagos::all();



       

        return view ('electronica.editpcliente')
               ->with('data',$data[0])
               ->with('estados',$estados) 
               ->with('formapagos',$formapagos); 

        
    }

    public function updatepcliente(Request $request)
    {

    //return $request->input();

        $this->validate($request,[
            'nombre_cliente'       => 'required|regex:/^[A-Z][A-Z,a-z, ,ü, é, á, í, ó, ú, ñ]+$/',
            'apellido_pcliente'    => 'required|regex:/^[A-Z][A-Z,a-z, ,ü, é, á, í, ó, ú, ñ]+$/',
            'apellido_mcliente'    => 'required|regex:/^[A-Z][A-Z,a-z, ,ü, é, á, í, ó, ú, ñ]+$/',
            'direccion_cliente'    => 'required|regex:/^[A-Z][A-Z,a-z, ,ü, é, á, í, ó, ú, ñ]+$/',
            
            'colonia_cliente'      => 'required|regex:/^[A-Z][A-Z,a-z, ,ü, é, á, í, ó, ú, ñ]+$/',
            'ciudad_cliente'       => 'required|regex:/^[A-Z][A-Z,a-z, ,ü, é, á, í, ó, ú, ñ]+$/',
            
            'codigo_postalcliente' => 'required|regex:/^[0-9]{5}$/',
            'email_cliente'        => 'required|email',
            'celular_cliente'      => 'required|regex:/^[0-9]{10}$/',
           
            
        ]);

        $data = pagoclientes::withTrashed()->find($request->id_pcliente);

       
        $data->nombre_cliente           = $request->input('nombre_cliente');
        $data->apellido_pcliente        = $request->input('apellido_pcliente');
        $data->apellido_mcliente        = $request->input('apellido_mcliente');
        $data->direccion_cliente        = $request->input('direccion_cliente');
        $data->departamento_cliente     = $request->input('departamento_cliente');
        $data->colonia_cliente          = $request->input('colonia_cliente'); 
        $data->ciudad_cliente           = $request->input('ciudad_cliente'); 
        $data->id_estado                = $request->input('id_estado'); 
        $data->codigo_postalcliente     = $request->input('codigo_postalcliente'); 
        $data->email_cliente            = $request->input('email_cliente'); 
        $data->celular_cliente          = $request->input('celular_cliente'); 
        $data->id_forma_pago            = $request->input('id_forma_pago'); 
    
        $data->save();

    Session::flash('mensaje',"Datos del cliente $request->nombre_cliente $request->apellido_pcliente $request->apellido_mcliente se han modificado correctamente");
    return redirect()->to('electronica_cliente');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
