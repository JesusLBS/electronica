<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pagoclientes;
use App\Models\estados;
use App\Models\formapagos; 

 
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

        return redirect()->to('electronica_cliente');
    }

    public function activarpcliente($id_pcliente)
    {
        // Activacion
        pagoclientes::withTrashed()->where('id_pcliente',$id_pcliente)->restore();
        

        return redirect()->to('electronica_cliente');
    }
    public function borrarpcliente($id_pcliente)
    {
        // Eliminacion
        $pagoclientes = pagoclientes::withTrashed()->find($id_pcliente)->forceDelete();


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
