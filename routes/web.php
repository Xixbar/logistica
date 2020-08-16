<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes(['reset'=>false]);
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contratos', 'ContratosController@index');
Route::get('/contratos/create', 'ContratosController@create')   ;
Route::post('/contratos', 'ContratosController@store');
Route::get('/contratos/{contrato}', 'ContratosController@show');
Route::get('/contratos/{contrato}/edit', 'ContratosController@edit');
Route::put('/contratos/{contrato}', 'ContratosController@update');

Route::get('/nominaciones', 'nominacionesController@index');
Route::get('/nominaciones/create', 'NominacionesController@create');
Route::post('/nominaciones', 'NominacionesController@store');
Route::get('/nominaciones/{nominacion}', 'NominacionesController@show');
Route::get('/nominaciones/{nominacion}/edit', 'NominacionesController@edit');
Route::put('/nominaciones/{nominacion}', 'NominacionesController@update');

Route::get('/trackings', 'TrackingsController@index');
Route::get('/trackings/create', 'TrackingsController@create');
Route::post('/trackings', 'TrackingsController@store');
Route::get('/trackings/{tracking}', 'TrackingsController@show');
Route::get('/trackings/{tracking}/edit', 'TrackingsController@edit');
Route::put('/trackings/{tracking}', 'TrackingsController@update');

Route::get('/ingenios', 'IngenioController@index');
Route::get('/ingenios/create', 'IngenioController@create')   ;
Route::post('/ingenios', 'IngenioController@store');
Route::get('/ingenios/{ingenio}', 'IngenioController@show');
Route::get('/ingenios/{ingenio}/edit', 'IngenioController@edit');
Route::put('/ingenios/{ingenio}', 'IngenioController@update');