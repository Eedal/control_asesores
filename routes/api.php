<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/




Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



/*Route::get('Auditoria', function(){
    //aqui se hace la carga de el lado del servidor
    //return App\Audit::all();
    return datatables()
        ->eloquent(App\Audit::query())
        ->toJson;
});*/

