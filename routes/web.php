<?php

use App\Http\Controllers\CollectionController;
use App\Http\Controllers\GestionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\prueba;
use App\Http\Controllers\VistaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [VistaController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/collection', [CollectionController::class, 'create'])->middleware(['auth', 'verified'])->name('collection');

// Gestion
Route::get('/gestion', [GestionController::class, 'index'])->middleware(['auth', 'verified'])->name('gestion.index');
//  EDIT
Route::get('/gestion/{register:nif}/edit', [GestionController::class, 'edit'])->middleware(['auth', 'verified'])->name('gestion.edit');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
