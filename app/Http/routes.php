<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/Inicio', [
	'uses' => 'HomeController@index',
	'as' =>'home'
]);

Route::group(['prefix' => '/Inicio'], function () {

	Route::get('Soluciones', [
		'uses' => 'HomeController@soluciones',
		'as' =>'soluciones'
	]);

});

Route::put('Enviando', [
		'uses' => 'HomeController@enviar',
		'as' =>'enviar'
]);	

Route::get('/Términos-del-Servicio', [
	'uses' => 'HomeController@terminos',
	'as' =>'terminos'
]);	

Route::get('/Políticas-de-Privacidad', [
	'uses' => 'HomeController@politicas',
	'as' =>'politicas'
]);

Route::get('/Preguntas-Frecuentes', [
	'uses' => 'HomeController@faq',
	'as' =>'faq'
]);

Route::get('/Mapa-del-Sitio', [
	'uses' => 'HomeController@mapa',
	'as' =>'mapa'
]);

Route::get('/Trabaja-con-Nosotros', [
	'uses' => 'HomeController@trabaja',
	'as' =>'trabaja'
]);	