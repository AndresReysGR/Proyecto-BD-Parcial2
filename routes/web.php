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

Route::get('/', 'App\Http\Controllers\SujetosControllers@index')->name('sujetos.index');

Route::get('agregar', 'App\Http\Controllers\SujetosControllers@vistaAgregar')->name('sujetos.agregar');

Route::post('crear', 'App\Http\Controllers\SujetosControllers@crear')->name('sujetos.store');

Route::get('/{id}/editar', 'App\Http\Controllers\SujetosControllers@edit' )->name('sujetos.edit');

Route::put('/{sujetos}/editar', 'App\Http\Controllers\SujetosControllers@update' )->name('sujetos.update');

Route::delete('/{id}','App\Http\Controllers\SujetosControllers@destroy')->name('sujetos.destroy');

