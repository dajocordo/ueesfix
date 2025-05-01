<?php

use App\Http\Controllers\GestionTipoController;
use Illuminate\Support\Facades\Route;

Route::name('gestion-tipo')->prefix('gestion-tipo')->group(function() {
    
    Route::get('/', [GestionTipoController::class, 'index']);
    Route::get('/{id}', [GestionTipoController::class, 'show']);

    //  GESTION TIPO
    Route::get('/new', function() { return view('gestion-tipo-new'); });
    Route::get('/edit', function() { return view('gestion-tipo-edit'); });
    Route::get('/{id}/edit', [GestionTipoController::class, 'edit']);
    
    Route::post('/store', [GestionTipoController::class, 'store']);
    Route::post('/update', [GestionTipoController::class, 'update']);

});
