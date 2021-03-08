<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\estados;

class estadoscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consulta = estados::orderBy('id_estado','DESC')
                   ->take(1)->get();
        $cuantos =count($consulta);

        if ($cuantos == 0) {
            $id_sigue = 1;
        }
        else{
            $id_sigue = $consulta[0]->id_estado + 1;
        }

        //return $id_sigue;

        return view ('electronica/estado')
            ->with('id_sigue',$id_sigue);
    }

   
    public function guardarestado(Request $request)
    {     
        
        $this->validate($request,[
            'nombre_estado' => 'required|regex:/^[A-Z][A-Z,a-z, ,ü, é, á, í, ó, ú, ñ]+$/',
           
            
        ]);

         $estado = new estados;

         
        $estado->id_estado        = $request->input('id_estado'); 
        $estado->nombre_estado       = $request->input('nombre_estado'); 
        

           
        $estado->save();

        
        return redirect()->to('electronica_estado');
 
       
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
