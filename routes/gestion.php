<?php

use App\Http\Controllers\GestionController;
use Illuminate\Support\Facades\Route;

Route::name('gestion')->prefix('gestion')->name('gestion.')->group(function() {
    
    Route::get('/', [GestionController::class, 'index']);
    Route::get('/{id}', [GestionController::class, 'show']);

    //  GESTION
    // Route::get('/new', [GestionController::class, 'newgestion'])->name('nuevo');
    // Route::get('/new', function() {return view('gestionnuevo');})->name('nuevo');
    
    Route::get('/{id}/edit', [GestionController::class, 'edit']);
    
    Route::post('/create', [GestionController::class, 'store']);
    Route::post('/update', [GestionController::class, 'update']);
    
    
});

Route::get('gtn', [GestionController::class, 'newgestion']);