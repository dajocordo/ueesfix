<?php

use App\Http\Controllers\EstadoController;
use Illuminate\Support\Facades\Route;

Route::name('estado')->prefix('estado')->group(function() {
    
    Route::get('/', [EstadoController::class, 'index']);
    Route::get('/{id}', [EstadoController::class, 'show']);

    //  ESTADO
    Route::get('/estadonuevo', function() {return view('estadonuevo');});
    Route::get('/estadoedit', function() {return view('estadoedit');});
    Route::resource('/e', EstadoController::class);
    Route::get('e/{id}/edit', [EstadoController::class, 'edit']);
    Route::post('/e/create', [EstadoController::class, 'store']);
    Route::post('/e/update', [EstadoController::class, 'update']);

});