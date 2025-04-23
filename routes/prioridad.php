<?php

use App\Http\Controllers\PrioridadController;
use Illuminate\Support\Facades\Route;

Route::name('prioridad')->prefix('prioridad')->group(function() {
    
    Route::get('/', [PrioridadController::class, 'index']);
    Route::get('/{id}', [PrioridadController::class, 'show']);

    //  PRIORIDAD
    Route::get('/prioridadnueva', function() {return view('prioridadnueva');});
    Route::get('/prioridadedita', function() {return view('prioridadedita');});
    Route::resource('/p', PrioridadController::class);
    Route::get('p/{id}/edit', [PrioridadController::class, 'edit']);
    Route::post('/p/create', [PrioridadController::class, 'create']);
    Route::post('/p/update', [PrioridadController::class, 'update']);

});