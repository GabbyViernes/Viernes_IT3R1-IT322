<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index']);      // Read All
    Route::post('/', [UserController::class, 'store']);     // Create
    Route::get('/{id}', [UserController::class, 'show']);   // Read One
    Route::put('/{id}', [UserController::class, 'update']); // Update
    Route::delete('/{id}', [UserController::class, 'destroy']); // Delete
});
