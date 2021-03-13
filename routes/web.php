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
//Desactivar
Route::post('desactivarmoneda/{id_moneda}',[monedascontroller::class,'desactivarmoneda'])->name('desactivarmoneda');
//Activacion
Route::post('activarmoneda/{id_moneda}',[monedascontroller::class,'activarmoneda'])->name('activarmoneda');
//Borrar
Route::post('borrarmoneda/{id_moneda}',[monedascontroller::class,'borrarmoneda'])->name('borrarmoneda');
//Editar
Route::get('editar_moneda/{id_moneda}',[monedascontroller::class,'editar_moneda'])->name('editar_moneda');

Route::post('/updatemoneda',[monedascontroller::class,'updatemoneda'])->name('updatemoneda');



/*Forma de pago*/
Route::get('electronica_formapago',[formapagoscontroller::class,'index'])->name('formapago');
Route::post('electronica_guardarformapago',[formapagoscontroller::class,'guardarformapago'])->name('guardarformapago');
//Desactivar
Route::post('desactivarformpago/{id_forma_pago}',[formapagoscontroller::class,'desactivarformpago'])->name('desactivarformpago');
//Activacion
Route::post('activarformpago/{id_forma_pago}',[formapagoscontroller::class,'activarformpago'])->name('activarformpago');
//Borrar
Route::post('borrarformpago/{id_forma_pago}',[formapagoscontroller::class,'borrarformpago'])->name('borrarformpago');
//Editar
Route::get('editar_formpago/{id_forma_pago}',[formapagoscontroller::class,'editar_formpago'])->name('editar_formpago');

Route::post('/updateformpago',[formapagoscontroller::class,'updateformpago'])->name('updateformpago');


/*Metodo de pago*/
Route::get('electronica_metodopago',[metodopagoscontroller::class,'index'])->name('metodopago');
Route::post('electronica_guardarmetodopago',[metodopagoscontroller::class,'guardarmetodopago'])->name('guardarmetodopago');
//Desactivar
Route::post('desactivarmetodopago/{id_metodo_pago}',[metodopagoscontroller::class,'desactivarmetodopago'])->name('desactivarmetodopago');
//Activacion
Route::post('activarmetodopago/{id_metodo_pago}',[metodopagoscontroller::class,'activarmetodopago'])->name('activarmetodopago');
//Borrar
Route::post('borrarmetodopago/{id_metodo_pago}',[metodopagoscontroller::class,'borrarmetodopago'])->name('borrarmetodopago');
//Editar
Route::get('editar_mpago/{id_metodo_pago}',[metodopagoscontroller::class,'editar_mpago'])->name('editar_mpago');

Route::post('/updatempago',[metodopagoscontroller::class,'updatempago'])->name('updatempago');



/*Estado*/
Route::get('electronica_estado',[estadoscontroller::class,'index'])->name('estado');
Route::post('electronica_guardarestado',[estadoscontroller::class,'guardarestado'])->name('guardarestado');
//Editar
Route::get('editar_estado/{id_estado}',[estadoscontroller::class,'editar_estado'])->name('editar_estado');

Route::post('/update-estado',[estadoscontroller::class,'updateestado'])->name('estado.update');


//Desactivar
Route::post('desactivarestado/{id_estado}',[estadoscontroller::class,'desactivarestado'])->name('desactivarestado');
//Activacion
Route::post('activarestado/{id_estado}',[estadoscontroller::class,'activarestado'])->name('activarestado');
//Borrar
Route::post('borrarestado/{id_estado}',[estadoscontroller::class,'borrarestado'])->name('borrarestado');



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
//Editar
Route::get('editar_pcliente/{id_pcliente}',[pagoclientescontroller::class,'editar_pcliente'])->name('editar_pcliente');

Route::post('/updatepcliente',[pagoclientescontroller::class,'updatepcliente'])->name('updatepcliente');
 
