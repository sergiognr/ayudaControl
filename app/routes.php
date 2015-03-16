<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('inicio');
});

Route::get('index.html', function()
{
	return View::make('inicio');
});

Route::get('lista-ups', ['as' => 'lista-ups', 'uses' => 'UpsController@listarUps']);



Route::get('contabilidad-ups', function()
{
	return View::make('contabilidadUps');
});

Route::get('control-facturas', ['as' => 'control-facturas', 'uses' => 'FacturaController@listarFacturas']);

Route::get('cnb', function()
{
	return View::make('cnb');
});


Route::get('historial-cnb', function()
{
	return View::make('historialCnb');
});


Route::get('contabilidad-mantenimiento', function()
{
	return View::make('contabilidadMantenimiento');
});

//RUTAS DE FORMULARIOS



Route::post('agregarFactura', ['as' => 'agregarFactura', 'uses' => 'FacturaController@nuevaFactura']);

Route::post('ordenar', ['as' => 'ordenar', 'uses' => 'FacturaController@ordenar']);

