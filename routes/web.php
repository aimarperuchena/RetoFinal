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

Auth::routes();

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

/*PRODUCTOS*/
Route::get('/admin/productCreate/','AdminController@productCreate')->name('admin.productCreate');
Route::post('/admin/productStore/','AdminController@productStore')->name('admin.productStore');
Route::get('/admin/productEdit/{id}','AdminController@productEdit')->name('admin.productEdit');
Route::post('/admin/productUpdate','AdminController@productUpdate')->name('admin.productUpdate');
Route::get('/admin/productDestroy/{id}','AdminController@productDestroy')->name('admin.productDestroy');

//INCIDENCIAS
Route::get('/admin/createIncidencia', 'AdminController@incidenciaCreate')->name('admin.incidenciaCreate');
Route::post('/admin/storeIncidencia','AdminController@incidenciaStore')->name('admin.incidenciaStore');
Route::get('/admin/incidenciaEdit/{id}','AdminController@incidenciaEdit')->name('admin.incidenciaEdit');
Route::post('/admin/incidenciaUpdate','AdminController@incidenciaUpdate')->name('admin.incidenciaUpdate');
Route::get('/admin/incidenciaDelete/{id}','AdminController@incidenciaDestroy')->name('admin.incidenciaDestroy');
/* Route::post() */