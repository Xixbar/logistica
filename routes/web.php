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

Route::get('/contratos/create', 'ContratosController@create');
Route::post('/contratos', 'ContratosController@store');
Route::get('/contratos/{contrato}/edit', 'ContratosController@edit');
Route::put('/contratos', 'ContratosController@update');

Route::get('/nominaciones/create', 'NominacionesController@create');
Route::post('/nominaciones', 'NominacionesController@store');
Route::get('/nominaciones/{nominacion}/edit', 'NominacionesController@edit');
Route::put('/nominaciones', 'NominacionesController@update');

Route::get('/tracking/create', 'TrackingController@create');
Route::post('/tracking', 'TrackingController@store');
Route::get('/tracking/{tracking}/edit', 'TrackingController@edit');
Route::put('/tracking', 'TrackingController@update');