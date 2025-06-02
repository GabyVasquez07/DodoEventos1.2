<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventosController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('landing');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('auth')->group(function () {
    Route::get('/eventos', [EventosController::class, 'indexEventos'])->name('indexEventos');
    Route::get('/crear', [EventosController::class, 'crear'])->name('crear');
    Route::post('/crear', [EventosController::class, 'guardar'])->name('guardar');
    Route::get('/editar/{id}', [EventosController::class, 'editar'])->name('editar');
    Route::put('/editar/{id}', [EventosController::class, 'actualizar'])->name('actualizar');
    Route::delete('/borrar/{id}', [EventosController::class, 'borrar'])->name('borrar');
    Route::get('/index', [EventosController::class, 'index'])->name('index');
});
require __DIR__.'/auth.php';
