<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;


use App\Models\detalleventas;
use App\Models\empleados;
use App\Models\estados;
use App\Models\facturas;
use App\Models\formapagos;
use App\Models\marcas;
use App\Models\metodopagos;
use App\Models\monedas;
use App\Models\municipios;
use App\Models\pagoclientes;
use App\Models\productcategorias;
use App\Models\productos;
use App\Models\proveedores;
use App\Models\razonsocial;
use App\Models\tipoempleados;
use App\Models\tipofactura;


class logincontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login/login');
    }

/*Captcha-Login*/
    public function logincaptcha(Request $request)
    {
       $user = $this->validate(request(), [
            
            'email' => ['required', 'email'],
            'password' => ['required'],
            'captcha' => ['required','captcha'],
            
        ],['captcha.captcha'=>'Código Captcha inválido..']);
       //dd(var:"Gracias");

       return view ('electronica/index');
    }

    public function reload()
    {
        return response()->json(['captcha' => captcha_img()]);
        
    }

    public function registro()
    {
        return view ('login/registro');
    }

  
/*Consultas*/


    public function consulta()
    {

        $consulta1 = tipofactura::all();
        return $consulta1;
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
        $user = $this->validate(request(), [
            'name'      => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
           

        ]);
        
        $newuser = new User;

         
        $newuser->name      = $request->input('name'); 
        $newuser->email      = $request->input('email'); 
        $newuser->password    = $request->input('password'); 

           
        $newuser->fill([
            'password' => hash("sha256",$request->password),
        ])->save();

        
        return redirect()->to('electronica_index');
    }


    public function salir(){
        Auth::logout();
        return redirect()->intended('/');
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
