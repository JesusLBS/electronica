<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\monedas;

class monedascontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function desactivarmoneda($id_moneda)
    {
        // Desactivacion
        $monedas = monedas::find($id_moneda);
        $monedas->delete();

        return redirect()->to('electronica_moneda');
    }
    public function activarmoneda($id_moneda)
    {
        // Activacion
        monedas::withTrashed()->where('id_moneda',$id_moneda)->restore();
        

        return redirect()->to('electronica_moneda');
    }
    public function borrarmoneda($id_moneda)
    {
        // Eliminacion
        $monedas = monedas::withTrashed()->find($id_moneda)->forceDelete();


        return redirect()->to('electronica_moneda');
    }

    public function index()
    {
        $consulta = monedas::orderBy('id_moneda','DESC')
                   ->take(1)->get();
        $cuantos =count($consulta);

        $consulta2 = monedas::withTrashed()->select(['id_moneda','tipo_moneda','deleted_at'])
                                       ->get();

        if ($cuantos == 0) {
            $id_sigue = 1;
        }
        else{
            $id_sigue = $consulta[0]->id_moneda + 1;
        }
 
        //return $id_sigue;
 
        return view ('electronica/moneda')
            ->with('id_sigue',$id_sigue)
            ->with('consulta2',$consulta2);
    }

    public function guardarmoneda(Request $request)
    {     
        
        $this->validate($request,[
            'tipo_moneda' => 'required|regex:/^[A-Z][A-Z,a-z, ,ü, é, á, í, ó, ú, ñ]+$/',
           
            
        ]);

        $moneda = new monedas;

         
        $moneda->id_moneda        = $request->input('id_moneda'); 
        $moneda->tipo_moneda       = $request->input('tipo_moneda'); 
        

           
        $moneda->save();

        
        return redirect()->to('electronica_moneda');

       
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
