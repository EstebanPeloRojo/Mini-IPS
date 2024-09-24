<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\PacientesController;
use App\Http\Controllers\bioController;
use App\Http\Controllers\facturaController;
use App\Http\Controllers\IventariosController;

Route::get('/', function () {
    return view('welcome');
});
//Rutas para Usuario
Route::resource('usuarios', UsuariosController::class);


//Rutas para Paciente
Route::resource('paciente', PacientesController::class);

//Rutas para Biologicos
Route::get('/bio', [bioController::class, 'create'])->name('biolgicos.biologicos');

//Rutas para Factura
Route::get('/factura', [facturaController::class, 'create'])->name('factura.create');
Route::post('/saveFactura', [facturaController::class, 'store'])->name('factura.store');

//Rutas para Inventario
Route::resource('inventario', IventariosController::class);

