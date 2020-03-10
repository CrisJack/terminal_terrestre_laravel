<?php
use App\Salida;
use App\Empresa;
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

    $salidas['salidas']=salida::all()->load('empresa');
    return view('welcome',$salidas);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('mensaje','MensajeController');
Route::resource('empresa','EmpresaController');
Route::resource('user','UserController');
Route::resource('salida','SalidaController');
// Route::resource('mensaje','MensajeController');
