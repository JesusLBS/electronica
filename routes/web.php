<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\electronicacontroller;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\estadoscontroller;
use App\Http\Controllers\pagoclientescontroller;
use App\Http\Controllers\monedascontroller;
use App\Http\Controllers\formapagoscontroller;
use App\Http\Controllers\metodopagoscontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*Login*/


Route::get('/',[logincontroller::class,'index'])->name('/');

/*Captcha - Login*/
Route::get('reload',[logincontroller::class,'reload'])->name('reload');
Route::post('logincaptcha',[logincontroller::class,'logincaptcha'])->name('logincaptcha');

/*Registro*/

Route::get('registro',[logincontroller::class,'registro'])->name('registro');
Route::post('registroe',[logincontroller::class,'store'])->name('registroe');

// Logout 
Route::post('salir', [logincontroller::class, 'salir'])->name('salir');

//Consulta ejemplos//
Route::get('consulta',[logincontroller::class,'consulta'])->name('consulta');


/*Index*/
Route::get('electronica_index',[electronicacontroller::class,'index']);

/*Tablas*/
Route::get('electronica_tablas',[electronicacontroller::class,'tablas'])->name('tablas');



/*Moneda*/
Route::get('electronica_moneda',[monedascontroller::class,'index'])->name('moneda');
Route::post('electronica_guardarmoneda',[monedascontroller::class,'guardarmoneda'])->name('guardarmoneda');

/*Forma de pago*/
Route::get('electronica_formapago',[formapagoscontroller::class,'index'])->name('formapago');
Route::post('electronica_guardarformapago',[formapagoscontroller::class,'guardarformapago'])->name('guardarformapago');

/*Metodo de pago*/
Route::get('electronica_metodopago',[metodopagoscontroller::class,'index'])->name('metodopago');
Route::post('electronica_guardarmetodopago',[metodopagoscontroller::class,'guardarmetodopago'])->name('guardarmetodopago');
//Desactivar
Route::post('desactivarmetodopago/{id_metodo_pago}',[metodopagoscontroller::class,'desactivarmetodopago'])->name('desactivarmetodopago');


/*estado*/
Route::get('electronica_estado',[estadoscontroller::class,'index'])->name('estado');
Route::post('electronica_guardarestado',[estadoscontroller::class,'guardarestado'])->name('guardarestado');


/*Cliente*/
Route::get('electronica_cliente',[pagoclientescontroller::class,'index'])->name('cliente');
Route::post('electronica_guardarcliente',[pagoclientescontroller::class,'guardarcliente'])->name('guardarcliente');

/*Pago Cliente*/
Route::get('electronica_pago',[pagoclientescontroller::class,'pago'])->name('pago');
//Desactivar cliente
Route::post('desactivarpcliente/{id_pcliente}',[pagoclientescontroller::class,'desactivarpcliente'])->name('desactivarpcliente');
//Activacion
Route::post('activarpcliente/{id_pcliente}',[pagoclientescontroller::class,'activarpcliente'])->name('activarpcliente');
//Borrar
Route::post('borrarpcliente/{id_pcliente}',[pagoclientescontroller::class,'borrarpcliente'])->name('borrarpcliente');

