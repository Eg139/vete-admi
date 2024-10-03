<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\UserController;

// Definir rutas de administración

Route::middleware(['auth', 'admin'])->group(function () {
    Route::middleware(['auth', 'verified'])->group(function () {
        Route::resource('/owners', OwnerController::class);
        Route::resource('/pets', PetController::class);
        Route::resource('/users', UserController::class);
    });
});
