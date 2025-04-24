<?php

use App\Http\Controllers\RolController;
use Illuminate\Support\Facades\Route;

Route::name('roles')->prefix('roles')->group(function() {
    
    Route::get('/', [RolController::class, 'index']);
    Route::get('/{id}', [RolController::class, 'show']);

    //  ROLES
    Route::get('/rolnuevo', function() {return view('rolnuevo');});
    Route::get('/roledit', function() {return view('roledit');});
    Route::resource('/r', RolController::class);
    Route::get('/r', [RolController::class, 'index']);
    Route::get('r/{id}/edit', [RolController::class, 'edit']);
    Route::post('/r/create', [RolController::class, 'create']);
    Route::post('/r/update', [RolController::class, 'update']);

});