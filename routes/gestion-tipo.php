<?php

use App\Http\Controllers\GestionTipoController;
use Illuminate\Support\Facades\Route;

Route::name('gestion-tipo')->prefix('gestion-tipo')->group(function() {
    
    Route::get('/', [GestionTipoController::class, 'index']);
    Route::get('/{id}', [GestionTipoController::class, 'show']);

    //  GESTION TIPO
    Route::get('/gestiontiponuevo', function() {return view('gestiontiponuevo');});
    Route::get('/gestiontipo', [GestionTipoController::class, 'index']);
    Route::get('/gestiontipoedit', function() {return view('gestiontipoedit');});
    Route::resource('/gt', GestionTipoController::class);
    Route::get('gt/{id}/edit', [GestionTipoController::class, 'edit']);
    Route::post('/gt/create', [GestionTipoController::class, 'create']);
    Route::post('/gt/update', [GestionTipoController::class, 'update']);

});
