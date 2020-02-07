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

Route::get('/prueba', function () {
    return view('prueba');
});

Auth::routes(['verify' => true]);


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/menu',function(){
    return view('menu');
});

Route::get('/webmaster', 'WebMasterController@index')-> name('webmaster.index');
Route::get('/admin', 'AdminController@index')->name('admin.index');
Route::get('/user', 'UserController@index')->name('usuario.listado');


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
Route::get('/user_suscripcion','UserController@suscripciones')->name('usuario.suscripciones');
Route::get('/sociedad/{id}','SociedadController@info')->name('sociedad.info');
Route::get('/sociedad/peticion/{id}','SociedadController@peticion')->name('sociedad.peticion');
Route::get('/reserva/{id}','SociedadController@reserva')->name('sociedad.reserva');
Route::get('/reserva/{sociedad_id}/{tipo_id}/success','SociedadController@crear')->name('sociedad.crear');
Route::get('/reservaFecha/{sociedad_id}','SociedadController@reservaFecha')->name('sociedad.reservaFecha');
Route::get('/alta_sociedad','SociedadController@formAlta')->name('sociedad.formAlta');
Route::post('/alta_sociedad/success','SociedadController@alta')->name('sociedad.alta');

//Perfil usuario
Route::get('/perfil','ProfileController@profile')->name('profile.index');
Route::get('/perfil/desuscribirse/{id}','ProfileController@deleteSuscripcion')->name('profile.deleteSus');
Route::post('/perfil/update','ProfileController@update')->name('profile.update');

//Reserva
Route::get('/reservas','ReservaController@index')->name('reserva.index');
Route::get('/reservas/{id}','ReservaController@show')->name('reserva.show');
Route::get('/reservas/editar/{id}','ReservaController@edit')->name('reserva.edit');
Route::get('/reservas/borrar/{id}','ReservaController@delete')->name('reserva.delete');

//Lineas
Route::get('/lineas/{id}','LineaController@index')->name('linea.show');
Route::get('/lineas/create/{id}','LineaController@create')->name('linea.create');
Route::post('/lineas/store','LineaController@store')->name('linea.store');
Route::get('/lineas/delete/{id}','LineaController@delete')->name('linea.delete');
Route::get('/lineas/edit/{id}','LineaController@edit')->name('linea.edit');
Route::post('/lineas/update','LineaController@update')->name('linea.update');



// Facturas
Route::get('/crear_factura/{id}','FacturaController@create')->name('factura.create');
Route::post('/factura_store/{id}','FacturaController@store')->name('factura.store');


//----------------------------------------ADMIN----------------------------

Route::get('/admin/sociedadEdit','AdminController@sociedadEdit')->name('admin.sociedad.edit');
Route::post('/admin/sociedadUpdate','AdminController@sociedadUpdate')->name('admin.sociedad.update');
Route::post('/admin/planoUpdate','AdminController@planoUpdate')->name('admin.sociedad.planoUpdate');
Route::get('/admin/peticionesSociedad','AdminController@peticionIndex')->name('admin.peticionIndex');
Route::get('/admin/peticionSociedadAceptar/{id}','AdminController@peticionAceptar')->name('admin.peticionAceptar');
Route::get('/admin/peticionSociedadDenegar/{id}','AdminController@peticionDenegar')->name('admin.peticionDenegar');
Route::post('/admin/sociedadImagen','AdminController@sociedadImagen')->name('admin.sociedadImagen');
Route::get('/admin/userDelete/{id}','AdminController@userDelete')->name('admin.userDelete');
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
Route::post('/admin/incidenciaIndexFiltro','AdminController@incidenciaIndexFiltro')->name('admin.incidenciaIndexFiltro');

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
Route::get('/admin/reservaEdit/{id}','AdminController@reservaEdit')->name('admin.reservaEdit');
Route::post('/admin/reservaUpdate','AdminController@reservaUpdate')->name('admin.reservaUpdate');
Route::post('/admin/reservaIndexFiltro','AdminController@reservaIndexFiltro')->name('admin.reservaIndexFiltro');
Route::get('/admin/reservaDelete/{id}','AdminController@reservaDelete')->name('admin.reservaDelete');
Route::get('/admin/reservaCreate','AdminController@reservaCreate')->name('admin.reservaCreate');
Route::post('/admin/reservaFechaFind','AdminController@reservaFechaFind')->name('admin.reservaFechaFind');
Route::post('/admin/reservaStore','AdminController@reservaStore')->name('admin.reservaStore');

//LINEAS
Route::get('/admin/deleteLinea/{id}','AdminController@lineaDelete')->name('admin.lineaDelete');
Route::get('/admin/lineaAdd/{id}','AdminController@lineaAdd')->name('admin.lineaAdd');
Route::post('/admin/lineaCreate','AdminController@lineaCreate')->name('admin.lineaCreate');
Route::get('/admin/lineaEdit/{id}','AdminController@lineaEdit')->name('admin.lineaEdit');
Route::post('/admin/lineaUpdate','AdminController@lineaUpdate')->name('admin.lineaUpdate');
//SOCIOS
Route::get('/admin/userIndex','AdminController@userIndex')->name('admin.userIndex');

//Productos webmaster

Route::get('/webmaster/productoIndex','WebMasterController@productoIndex');
Route::get('/webmaster/productoRestore/{id}','WebMasterController@productoRestore');
Route::get('/webmaster/productCreate','WebMasterController@productCreate');
Route::post('/webmaster/productStore','WebMasterController@productStore')-> name ('webmaster.productStore');
Route::get('/webmaster/productEdit/{id}','WebMasterController@productEdit')-> name ('webmaster.productEdit');
Route::post('/webmaster/productUpdate/{id}','WebMasterController@productUpdate')-> name ('webmaster.productUpdate');
Route::get('/webmaster/productDestroy/{id}','WebMasterController@productDestroy');

//Sociedades Webmaster
Route::get('/webmaster/sociIndex','WebMasterController@sociIndex')->name('webmaster.sociIndex');
Route::get('/webmaster/sociRestore/{id}','WebMasterController@sociRestore');
Route::get('/webmaster/sociDestroy/{id}','WebMasterController@sociDestroy');

//Sociedades Peticiones
Route::get('/webmaster/sociPeticion','WebMasterController@sociPeticion')->name('webmaster.sociPeticion');
Route::get('/webmaster/peticionAceptar/{id}','WebMasterController@peticionAceptar')->name('webmaster.peticionAceptar');
Route::get('/webmaster/peticionDenegar/{id}','WebMasterController@peticionDenegar')->name('webmaster.peticionDenegar');
Route::post('/webmaster/peticionFiltrado','WebMasterController@peticionFiltrado')->name('webmaster.peticionFiltrado');
Route::get('/webmaster/sociDenegado','WebMasterController@sociDenegado')->name('webmaster.sociDenegado');
Route::get('/webmaster/sociAceptado','WebMasterController@sociAceptado')->name('webmaster.sociAceptado');


//Socios Webmaster
Route::get('/webmaster/socioIndex','WebMasterController@socioIndex')->name('webmaster.socioIndex');
Route::get('/webmaster/socioRestore/{id}','WebMasterController@socioRestore');
Route::get('/webmaster/socioDestroy/{id}','WebMasterController@socioDestroy');
