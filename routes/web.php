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

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contratos', 'ContratosController@index');
Route::get('/contratos/create', 'ContratosController@create')   ;
Route::post('/contratos', 'ContratosController@store');
Route::get('/contratos/{contratos}', 'ContratosController@show');
Route::get('/contratos/{contrato}/edit', 'ContratosController@edit');
Route::put('/contratos', 'ContratosController@update');

Route::get('/nominaciones', 'nominacionesController@index');
Route::get('/nominaciones/create', 'NominacionesController@create');
Route::post('/nominaciones', 'NominacionesController@store');
Route::get('/nominaciones/{nominacion}', 'NominacionesController@show');
Route::get('/nominaciones/{nominacion}/edit', 'NominacionesController@edit');
Route::put('/nominaciones', 'NominacionesController@update');

Route::get('/trackings', 'TrackingsController@index');
Route::get('/trackings/create', 'TrackingsController@create');
Route::post('/trackings', 'TrackingsController@store');
Route::get('/trackings/{tracking}', 'TrackingsController@show');
Route::get('/trackings/{tracking}/edit', 'TrackingsController@edit');
Route::put('/trackings', 'TrackingsController@update');