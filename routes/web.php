<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HealthPlanController;
use App\Http\Controllers\ProfessionalController;

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('health-plans', HealthPlanController::class)
        ->only(['index', 'create', 'store', 'edit', 'update']);

    Route::resource('professionals', ProfessionalController::class)
        ->only(['index', 'create', 'store', 'edit', 'update']);
});

require __DIR__.'/auth.php';
