<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventosController;
use App\Http\Controllers\UserController;


Route::get('/', [EventosController::class, 'index'])->name('index');
Route::get('/crear', [EventosController::class, 'crear'])->name('crear');
Route::post('/crear', [EventosController::class, 'guardar'])->name('guardar');
Route::get('/editar/{id}', [EventosController::class, 'editar'])->name('editar');
Route::put('/editar/{id}', [EventosController::class, 'actualizar'])->name('actualizar');
Route::delete('/borrar/{id}', [EventosController::class, 'borrar'])->name('borrar');

