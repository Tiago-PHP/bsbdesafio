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

Route::namespace('API')->name('api.')->group(function(){
            Route::prefix('pedidos')->group(function(){

                Route::get('/','Pedidocontroller@index')->name('index_pedidos');
                Route::get('/{id}','Pedidocontroller@show')->name('unico_pedido');


                Route::post('/','Pedidocontroller@store')->name('store_pedido');


                Route::put('/{id}','Pedidocontroller@update')->name('update_pedido');

                Route::delete('/{id}','Pedidocontroller@delete')->name('delete_Projetos');

});

});

