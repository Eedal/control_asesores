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
    return view('administrador/index');
});

Route::get('/supervisor_puntos', function () {
    return view('auditoria/index');
});

Route::resource('auditoria', 'AuditController');
Route::resource('punto', 'PointSaleController');

Route::get('auditoria.excel', 'AuditController@exportExcel')->name('audit.excel');

Route::post('roles.excel', 'RolController@importRolsExcel')->name('rols.import.excel');

Route::post('users.excel', 'UserController@importUsersExcel')->name('users.import.excel');

Route::post('point_sales.excel', 'PointSaleController@importPoint_salesExcel')->name('point_sales.import.excel');



