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
Route::get('/', function () {
    return view('home');
});

/*Trabajadores*/
Route::get('/trabajadores', 'App\Http\Controllers\TrabajadoresController@index')->name('trabajador.index');

/*Salarios*/
Route::prefix('salarios')->group(function () {
    Route::get('/salarios/{id?}/', 'App\Http\Controllers\SalariosController@index')->name('salarios.index');
    Route::get('/salarios', 'App\Http\Controllers\SalariosController@getSalarios')->name('salarios.getSalarios');
    Route::post('/mensaje/{id?}', 'App\Http\Controllers\SalariosController@storeSalarios')->name('salarios.storeSalarios');
});
