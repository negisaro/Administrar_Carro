<?php

use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\PropietarioController;
use Illuminate\Support\Facades\Route;


//rutas no autenticadas
Route::get('/', [DashBoardController::class, 'index']);

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])
    ->group(function () {
        //Rutas autenticadas
        Route::get('/dashboard', [DashBoardController::class, 'dashboard'])->name('dashboard');
        Route::resource('/propietarios', PropietarioController::class);
    });
