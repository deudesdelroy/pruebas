<?php

use App\Http\Controllers\ChargesController;
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

Route::get('/','App\Http\Controllers\PersonasController@index');
Route::get('/crear','App\Http\Controllers\PersonasController@create')->name('personas.crear');
Route::get('/editar','App\Http\Controllers\PersonasController@edit')->name('personas.editar');
