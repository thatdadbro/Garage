<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Route;

Route::prefix('vehicles')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/collection', [VehicleController::class, 'index'])->name('vehicles.collection');
    Route::get('/add', [VehicleController::class, 'add'])->name('vehicles.add');
    // Route::get('/edit/{id}', [VehicleController::class, 'add'])->name('vehicles.edit');
    Route::post('/', [VehicleController::class, 'create'])->name('vehicles.create');
    Route::get('/show', [VehicleController::class, 'show'])->name('vehicles.show');
    Route::patch('/', [VehicleController::class, 'update'])->name('vehicles.update');
    Route::delete('/', [VehicleController::class, 'destroy'])->name('vehicles.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
