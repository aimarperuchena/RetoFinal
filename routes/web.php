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



Route::get('/admin/productEdit/{id}','AdminController@productEdit')->name('admin.productEdit');
Route::post('/admin/productUpdate','AdminController@productUpdate')->name('admin.productUpdate');