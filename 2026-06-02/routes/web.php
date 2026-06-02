<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\AppController;

Route::get('/', [AppController::class, 'index'])->name("home");

Route::get('/eventos', [EventoController::class, 'index'])->name('eventos.index');
Route::get('/eventos/create', [EventoController::class, 'create'])->name('eventos.create');
Route::post('/eventos/store', [EventoController::class, 'store'])->name('eventos.store');
Route::get('/eventos/{evento}/edit', [EventoController::class, 'edit'])->name('eventos.edit');
Route::put('/eventos/{evento}/update', [EventoController::class, 'update'])->name('eventos.update');
Route::delete('/eventos/{evento}/destroy', [EventoController::class, 'destroy'])->name('eventos.destroy');