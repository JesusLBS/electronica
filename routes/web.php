<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\electronicacontroller;
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

Route::get('/', function () {
    return view('login/login');
});
/*Index*/
Route::get('electronica_index',[electronicacontroller::class,'index']);

/*Tablas*/
Route::get('electronica_tablas',[electronicacontroller::class,'tablas'])->name('tablas');

/*Pago*/
Route::get('electronica_pago',[electronicacontroller::class,'pago'])->name('pago');

/*Moneda*/
Route::get('electronica_moneda',[electronicacontroller::class,'moneda'])->name('moneda');
Route::post('electronica_guardarmoneda',[electronicacontroller::class,'guardarmoneda'])->name('guardarmoneda');

/*Forma de pago*/
Route::get('electronica_formapago',[electronicacontroller::class,'formapago'])->name('formapago');
Route::post('electronica_guardarformapago',[electronicacontroller::class,'guardarformapago'])->name('guardarformapago');

/*Metodo de pago*/
Route::get('electronica_metodopago',[electronicacontroller::class,'metodopago'])->name('metodopago');
Route::post('electronica_guardarmetodopago',[electronicacontroller::class,'guardarmetodopago'])->name('guardarmetodopago');

/*estado*/
Route::get('electronica_estado',[electronicacontroller::class,'estado'])->name('estado');
Route::post('electronica_guardarestado',[electronicacontroller::class,'guardarestado'])->name('guardarestado');


/*Cliente*/
Route::get('electronica_cliente',[electronicacontroller::class,'cliente'])->name('cliente');
Route::post('electronica_guardarcliente',[electronicacontroller::class,'guardarcliente'])->name('guardarcliente');