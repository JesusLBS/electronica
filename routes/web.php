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

/*Forma de pago*/
Route::get('electronica_formapago',[electronicacontroller::class,'formapago'])->name('formapago');

/*Metodo de pago*/
Route::get('electronica_metodopago',[electronicacontroller::class,'metodopago'])->name('metodopago');

/*Cliente*/
Route::get('electronica_cliente',[electronicacontroller::class,'cliente'])->name('cliente');