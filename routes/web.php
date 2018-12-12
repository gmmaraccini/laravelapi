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

Route::group(['prefix' => 'api'],function(){
	Route::group(['prefix' => 'user'],function(){
		Route::get('',function(){
			return "Devolver a lista de usuarios";
		});

		Route::get('{id}',function($id){
			return "Devolve o usuario {$id}";
		});

		Route::post('',function(){
			return "Cria um usuario baseado na informacao recebida";
		});


		Route::put('{id}',function($id){
			return "Atualizar o usuario de ID " . $id;
		});

		Route::delete('{id}',function($id){
			return "Deleta o usuario de ID " . $id;
		});
	});

});

Route::get('/', function () {
    return "Hello World";
});
