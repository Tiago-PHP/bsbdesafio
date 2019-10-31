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


Route::group(['middleware'=>'web'], function(){

    Route::get('/', function () {
        return view('welcome');
    });

 //   ProdutoController
//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


        Route::prefix('produtos')->group(function() {

            Route::get('/', 'Web\ProdutoController@index')->name('produtos');

            Route::get('/novo', 'Web\ProdutoController@create')->name('produtos.create');

            Route::get('/{id}', 'Web\ProdutoController@show')->name('unico_produtos.storeduto');

            Route::post('/', 'Web\ProdutoController@store')->name('produtos.store');

            Route::put('/{id}', 'Web\ProdutoController@update')->name('produtos.update');

            Route::get('edit/{id}', 'Web\ProdutoController@edit')->name('produtos.edit');

            Route::delete('/{id}', 'Web\ProdutoController@delete')->name('delete_Projetos');



            //Criar os metodos no Controller

    });
});
