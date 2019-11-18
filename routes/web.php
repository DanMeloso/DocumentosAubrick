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

Route::get('/', 'DocumentosController@index')->name('documentos.index');
Route::get('/redirect','DocumentosController@redirect');

Route::post('/enviarArquivos', 'MatrDocController@create')->name('enviar.create');
