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
    return view('welcome');
});
Route::get('/Ejercicio1', 'ControllerTarea1@vistaEjercicio1')->name('Tarea1.Ejercicio1');
Route::get('/Ejercicio2', 'ControllerTarea1@vistaEjercicio2')->name('Tarea1.Ejercicio2');
Route::post('/Ejercicio1', 'ControllerTarea1@numeroMayor')->name('Tarea1.numeroMayor');
Route::post('/Ejercicio2', 'ControllerTarea1@numeroCadena')->name('Tarea1.numeroCadena');
