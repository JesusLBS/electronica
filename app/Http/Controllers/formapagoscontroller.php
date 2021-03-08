<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\formapagos;

class formapagoscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 
/*-----------------------------------------------------------Start Formapago----------------------------------------------*/
    public function index()
    {
        $consulta = formapagos::orderBy('id_forma_pago','DESC')
                   ->take(1)->get();
        $cuantos =count($consulta);

        if ($cuantos == 0) {
            $id_sigue = 1;
        }
        else{ 
            $id_sigue = $consulta[0]->id_forma_pago + 1;
        }

        //return $id_sigue;
 
        return view ('electronica/formapago')
            ->with('id_sigue',$id_sigue);

    }



    public function guardarformapago (Request $request)
    {     
        
        $this->validate($request,[
            'forma_pago' => 'required|regex:/^[A-Z][A-Z,a-z, ,ü, é, á, í, ó, ú, ñ]+$/',
        ]);

        $moneda = new formapagos;

         
        $moneda->id_forma_pago    = $request->input('id_forma_pago'); 
        $moneda->forma_pago       = $request->input('forma_pago'); 
        

           
        $moneda->save();

        
        return redirect()->to('electronica_formapago');

       
    }
/*-----------------------------------------------------------End Formapago----------------------------------------------*/
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
