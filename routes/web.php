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
Route::get('empleado/pdf', [App\Http\Controllers\empleadoController::class, 'PDF'])->name('empleado.pdf');
Auth::routes();

Route::resource('empleados',App\Http\Controllers\EmpleadoController::class)->middleware('auth') ;
Route::resource('sucursales',App\Http\Controllers\SucursaleController::class)->middleware('auth') ;
Route::resource('tipos',App\Http\Controllers\TipoController::class)->middleware('auth') ;
Route::resource('revistas',App\Http\Controllers\RevistaController::class)->middleware('auth') ;
Route::resource('periodistas',App\Http\Controllers\PeriodistaController::class)->middleware('auth') ;
Route::resource('articulos',App\Http\Controllers\ArticuloController::class)->middleware('auth') ;

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
