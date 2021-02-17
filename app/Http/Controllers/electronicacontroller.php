<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class electronicacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('electronica/index');
    }

    public function tablas()
    {
        return view ('electronica/tablas');
    }

    public function pago()
    {
        return view ('electronica/pagocliente');
    }


/*-----------------------------------------------------------Start Moneda----------------------------------------------*/
    public function moneda()
    {
        return view ('electronica/moneda');
    }

    public function guardarmoneda(Request $request)
    {     
        
        $this->validate($request,[
            'tipo_moneda' => 'required|regex:/^[A-Z][A-Z,a-z, ,ü, é, á, í, ó, ú, ñ]+$/',
            
        ]);

       return view ('electronica/moneda');

       
    }

/*-----------------------------------------------------------End Moneda----------------------------------------------*/

/*-----------------------------------------------------------Start Moneda----------------------------------------------*/
    public function estado()
    {
        return view ('electronica/estado');
    }

    public function guardarestado(Request $request)
    {     
        
        $this->validate($request,[
            'estado' => 'required|regex:/^[A-Z][A-Z,a-z, ,ü, é, á, í, ó, ú, ñ]+$/',
            
        ]);

       return view ('electronica/estado');
 
       
    }

/*-----------------------------------------------------------End Moneda----------------------------------------------*/

    public function formapago()
    {
        return view ('electronica/formapago');
    }


     public function guardarformapago(Request $request)
    {     
        
        $this->validate($request,[
            'forma_pago' => 'required|regex:/^[A-Z][A-Z,a-z, ,ü, é, á, í, ó, ú, ñ]+$/',
            
        ]);

       return view ('electronica/formapago');

       
    }







/*-----------------------------------------------------------Start Metodopago----------------------------------------------*/
    public function metodopago()
    {
        return view ('electronica/metodopago');
    }



    public function guardarmetodopago(Request $request)
    {     
        
        $this->validate($request,[
            'metodo_pago' => 'required|regex:/^[A-Z][A-Z,a-z, ,ü, é, á, í, ó, ú, ñ]+$/',
            
        ]);

       return view ('electronica/metodopago');

       
    }
/*-----------------------------------------------------------End Metodopago----------------------------------------------*/






/*-----------------------------------------------------------Start Cliente----------------------------------------------*/
    public function cliente()
    {
        return view ('electronica/cliente');
    }

    public function guardarcliente(Request $request)
    {     
        
        $this->validate($request,[
            'nombre'           => 'required|regex:/^[A-Z][A-Z,a-z, ,ü, é, á, í, ó, ú, ñ]+$/',
            'apellido_paterno' => 'required|regex:/^[A-Z][A-Z,a-z, ,ü, é, á, í, ó, ú, ñ]+$/',
            'apellido_materno' => 'required|regex:/^[A-Z][A-Z,a-z, ,ü, é, á, í, ó, ú, ñ]+$/',
            'direccion'        => 'required|regex:/^[A-Z][A-Z,a-z, ,ü, é, á, í, ó, ú, ñ]+$/',
            'colonia'          => 'required|regex:/^[A-Z][A-Z,a-z, ,ü, é, á, í, ó, ú, ñ]+$/',
            'ciudad'           => 'required|regex:/^[A-Z][A-Z,a-z, ,ü, é, á, í, ó, ú, ñ]+$/',
            'codigo_postal'    => 'required|regex:/^[0-9]{5}$/',
            'email'            => 'required|email',
            'celular'          => 'required|regex:/^[0-9]{10}$/',
            
        ]);

       return view ('electronica/cliente');

       
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
