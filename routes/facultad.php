<?php

use App\Http\Controllers\FacultadController;
use Illuminate\Support\Facades\Route;

Route::name('facultad')->prefix('facultad')->group(function() {
    
    Route::get('/', [FacultadController::class, 'index']);
    Route::get('/{id}', [FacultadController::class, 'show']);

    //  FACULTAD
    Route::get('/facultad', [FacultadController::class, 'index']);
    Route::get('/facultadnuevo', function() {return view('facultadnuevo');});
    Route::get('/facultadedit', function() {return view('facultadedit');});
    Route::resource('/f', FacultadController::class);
    Route::get('f/{id}/edit', [FacultadController::class, 'edit']);
    Route::post('/f/create', [FacultadController::class, 'store']);
    Route::post('/f/update', [FacultadController::class, 'update']);

});