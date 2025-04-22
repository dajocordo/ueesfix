<?php

use App\Http\Controllers\GestionController;
use Illuminate\Support\Facades\Route;

Route::name('gestion')->prefix('gestion')->group(function() {
    
    Route::get('/', [GestionController::class, 'index']);
    Route::get('/{id}', [GestionController::class, 'show']);

    
    //  GESTION
    Route::get('/gestionnuevo', function() {return view('gestionnuevo');});
    Route::get('/gestionedit', function() {return view('gestionedit');});
    Route::resource('/g', GestionController::class);
    Route::get('g/{id}/edit', [GestionController::class, 'edit']);
    Route::post('/g/create', [GestionController::class, 'create']);
    Route::post('/g/update', [GestionController::class, 'update']);
    Route::get('/gtn', [GestionController::class, 'newgestion']);

});