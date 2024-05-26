<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\TiendaController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\MensajeController;
use App\Http\Controllers\CategoriaController;

Route::get('/', function () {
    return view('welcome');
})->name('/');
Route::get('quienessomos', function () {
    return view('quienessomos');
})->name('quienessomos');
Route::resource('tienda', TiendaController::class);
Route::resource('compra', CompraController::class);
Route::resource('mensaje', MensajeController::class);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::resource('Productos', ProductosController::class);
    Route::resource('categoria', CategoriaController::class);
    Route::get('/mensajes', function () {
        return view('admin.dashboard');
    })->name('mensajes');
    Route::get('/pedidos', function () {
        return view('admin.dashboard');
    })->name('pedidos');

});
