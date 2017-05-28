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

Route::get('/', [
	'uses' => 'HomeController@index',
	'as' =>'home'
]);


Route::group(['prefix' => '/Soluciones'], function () {

	Route::get('Servicios', [
		'uses' => 'HomeController@servicios',
		'as' =>'servicios'
	]);

	Route::get('Nuestras-Soluciones', [
		'uses' => 'HomeController@nuestrasSoluciones',
		'as' =>'nuestrasSoluciones'
	]);

	Route::get('Proyectos', [
		'uses' => 'HomeController@proyectos',
		'as' =>'proyectos'
	]);

});













Route::get('/Trabaja-con-Nosotros', [
	'uses' => 'HomeController@trabaja',
	'as' =>'trabaja'
]);	

Route::get('/Casos-de-éxito', [
	'uses' => 'HomeController@casos',
	'as' =>'casosExito'
]);	

Route::get('/Contáctanos', [
	'uses' => 'HomeController@contacto',
	'as' =>'contacto'
]);	




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

