<?php

use App\Http\Controllers\ObraController;
use App\Http\Controllers\ExpoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/obras', [ObraController::class, 'index'])->name('obras.index');
Route::post('/obras', [ObraController::class, 'store'])->name('obras.store');
Route::get('/obras/create', [ObraController::class, 'create'])->name('obras.create');
Route::delete('/obras/{obra}', [ObraController::class, 'destroy'])->name('obras.destroy');
Route::put('/obras/{obra}', [ObraController::class, 'update'])->name('obras.update');
Route::get('/obras/{obra}/edit', [ObraController::class, 'edit'])->name('obras.edit');

Route::get('/exposiciones', [ExpoController::class, 'index'])->name('exposiciones.index');
Route::post('/exposiciones', [ExpoController::class, 'store'])->name('exposiciones.store');
Route::get('/exposiciones/create', [ExpoController::class, 'create'])->name('exposiciones.create');
Route::delete('/exposiciones/{exposicion}', [ExpoController::class, 'destroy'])->name('exposiciones.destroy');
Route::put('/exposiciones/{exposicion}', [ExpoController::class, 'update'])->name('exposiciones.update');
Route::get('/exposiciones/{exposicion}/edit', [ExpoController::class, 'edit'])->name('exposiciones.edit');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


