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
Route::get('/', 'PrincipalController@index')->name('site.index');
Route::get('/sobrenos', 'SobreNosController@index')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@index')->name('site.contato');
