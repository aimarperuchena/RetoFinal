<?php

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
    return view('layouts.inicio');
});

Auth::routes(['verify' => true]);


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/menu',function(){
    return view('menu');
});

Route::get('/webmaster', 'WebMasterController@index');
Route::get('/admin', 'AdminController@index')->name('admin.index');
Route::get('/user', 'UserController@index');


Route::get('/denegado',function(){
    return view('layouts.denegado');
});
Route::post('/contact','ContactController@save')->name("contact.save");

//Cambio de idiomas segun detecta

Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});

// InfoSociedad
Route::get('/sociedadID','SociedadController@info')->name('sociedad.info');
Route::get('/reserva','SociedadController@reserva')->name('sociedad.reserva');

/*PRODUCTOS*/
Route::get('/admin/productoIndex','AdminController@productoIndex')->name('admin.productoIndex');
Route::get('/admin/productCreate/','AdminController@productCreate')->name('admin.productCreate');
Route::post('/admin/productStore/','AdminController@productStore')->name('admin.productStore');
Route::get('/admin/productEdit/{id}','AdminController@productEdit')->name('admin.productEdit');
Route::post('/admin/productUpdate','AdminController@productUpdate')->name('admin.productUpdate');
Route::get('/admin/productDestroy/{id}','AdminController@productDestroy')->name('admin.productDestroy');

//INCIDENCIAS
Route::get('/admin/incidenciaIndex','AdminController@incidenciaIndex')->name('admin.incidenciaIndex');
Route::get('/admin/createIncidencia', 'AdminController@incidenciaCreate')->name('admin.incidenciaCreate');
Route::post('/admin/storeIncidencia','AdminController@incidenciaStore')->name('admin.incidenciaStore');
Route::get('/admin/incidenciaEdit/{id}','AdminController@incidenciaEdit')->name('admin.incidenciaEdit');
Route::post('/admin/incidenciaUpdate','AdminController@incidenciaUpdate')->name('admin.incidenciaUpdate');
Route::get('/admin/incidenciaDelete/{id}','AdminController@incidenciaDestroy')->name('admin.incidenciaDestroy');


//Mesas
Route::get('/admin/mesaIndex','AdminController@mesaIndex')->name('admin.mesaIndex');
Route::get('/admin/mesaCreate','AdminController@mesaCreate')->name('admin.mesaCreate');
Route::post('/admin/mesaStore','AdminController@mesaStore')->name('admin.mesaStore');
Route::get('/admin/mesaEdit/{id}','AdminController@mesaEdit')->name('admin.mesaEdit');
Route::post('/admin/mesaUpdate','AdminController@mesaUpdate')->name('admin.mesaUpdate');
Route::get('/admin/mesaDestroy/{id}','AdminController@mesaDestroy')->name('admin.mesaDestroy');

//RESERVAS
Route::get('/admin/reservaIndex','AdminController@reservaIndex')->name('admin.reservaIndex');
Route::get('/admin/reservaShow/{id}','AdminController@reservaShow')->name('admin.reservaShow');
Route::get('/admin/facturaShow/{id}','AdminController@facturaShow')->name('admin.facturaShow');


//SOCIOS
Route::get('/admin/userIndex','AdminController@userIndex')->name('admin.userIndex');
