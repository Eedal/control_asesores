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

/*Route::get('/', function () {
    return view('administrador/index');
});*/







Route::get('/supervisor_puntos', function () {
    return view('auditoria/index');
});

Route::resource('auditoria', 'AuditController');
Route::resource('punto', 'PointSaleController');

Route::get('auditoria.excel', 'AuditController@exportExcel')->name('audit.excel');

Route::post('roles.excel', 'RolController@importRolsExcel')->name('rols.import.excel');

Route::post('users.excel', 'UserController@importUsersExcel')->name('users.import.excel');

Route::post('point_sales.excel', 'PointSaleController@importPoint_salesExcel')->name('point_sales.import.excel');
Route::post('circuits.excel', 'CircuitController@importCircuitsExcel')->name('circuits.import.excel');

 

//para la administracion
Route::get('crear_zonas', 'UserController@crear_zonas');



Route::resource('/user/crear_zonas', 'UserController@crear_zonas');

Route::post('zones.create', 'ZoneController@store')->name('zones.create');

Route::get('crear_usuario', function () {
    return view('user/create_user');
});
Route::get('registro', 'UserController@register_user');
Route::post('asesor.create', 'UserController@adviser_store')->name('adviser.store');


Route::post('registro', 'UserController@store');


//Toda la parte del administrador
Route::resource('/', 'UserController');
Route::resource('zonas', 'ZoneController');
Route::get('usuarios', 'UserController@show_users');

Route::get('usuario/{cedula}', 'UserController@show_user')->name('usuario.show');

Route::get('usuario/{cedula}/edit', 'UserController@edit_user')->name('usuario.edit');
Route::post('usuario/{cedula}', 'UserController@update_user')->name('usuario.update');

Route::post('zonas/{id}', 'ZoneController@update_zone')->name('zone.update');



Route::resource('circuito', 'CircuitController');


Route::get('/cargar_archivos', function () {
    return view('user.upload_files');
});



