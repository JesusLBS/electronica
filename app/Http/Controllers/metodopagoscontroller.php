<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\metodopagos;

class metodopagoscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function desactivarmetodopago($id_metodo_pago)
    {
        // Desactivacion
        $metodopagos = metodopagos::find($id_metodo_pago);
        $metodopagos->delete();

        return redirect()->to('electronica_metodopago');
    }
    public function activarmetodopago($id_metodo_pago)
    {
        // Activacion
        metodopagos::withTrashed()->where('id_metodo_pago',$id_metodo_pago)->restore();
        

        return redirect()->to('electronica_metodopago');
    }
    public function borrarmetodopago($id_metodo_pago)
    {
        // Eliminacion
        $metodopagos = metodopagos::withTrashed()->find($id_metodo_pago)->forceDelete();


        return redirect()->to('electronica_metodopago');
    }




    public function index()
    {
        $consulta = metodopagos::orderBy('id_metodo_pago','DESC')
                   ->take(1)->get();
        $cuantos =count($consulta);
 
        $consulta2 = metodopagos::withTrashed()->select(['id_metodo_pago','metodo_pago','deleted_at'])
                                       ->get();

        if ($cuantos == 0) {
            $id_sigue = 1;
        }
        else{ 
            $id_sigue = $consulta[0]->id_metodo_pago + 1;
        }

        //return $id_sigue;
 
        return view ('electronica/metodopago')
            ->with('id_sigue',$id_sigue)
            ->with('consulta2',$consulta2);

    }



    public function guardarmetodopago (Request $request)
    {     
        
        $this->validate($request,[
            'metodo_pago' => 'required|regex:/^[A-Z][A-Z,a-z, ,ü, é, á, í, ó, ú, ñ]+$/',
        ]);

        $metodopago = new metodopagos;

         
        $metodopago->id_metodo_pago    = $request->input('id_metodo_pago'); 
        $metodopago->metodo_pago       = $request->input('metodo_pago'); 
        

           
        $metodopago->save();

        
        return redirect()->to('electronica_metodopago');

       
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
