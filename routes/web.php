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

Route::get('/correo',function(){
    return view('correo');
});
Route::post('/contact','ContactController@save')->name("contact.save");

Route::post('/update','UserController@update')->name('user.update');
Route::get('admin','AdminController@index')->name('admin.index');
Route::get('/edit_user/{id}','AdminController@edit')->name('admin.edit');
Route::post('user_update','AdminController@update')->name('admin.update');
Route::get('/delete/{id}','AdminController@delete')->name('admin.delete');

//Cambio de idiomas segun detecta

Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});