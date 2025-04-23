<?php

use App\Http\Controllers\CarreraController;
use Illuminate\Support\Facades\Route;


Route::name('carrera')->prefix('carrera')->group(function() {

  Route::get('/', [CarreraController::class, 'index']);
  Route::get('/{id}', [CarreraController::class, 'show']);
  
  // Route::get('/carreranueva', function() {return view('carreranueva');});
  Route::get('/carreraedit', function() {return view('carreraedit');});
  Route::get('/c/{id}/edit', [CarreraController::class, 'edit']);
  Route::post('/c/create', [CarreraController::class, 'store']);
  Route::post('/c/update', [CarreraController::class, 'update']);
  Route::get('/carreranueva', [CarreraController::class, 'newcarreer']);
  // // Route::get('/carreras', [carreraController::class, 'index']);
  // // Route::get('/carreras', function() {return view('carreras');});
  // Route::get('/carreras', function () {return redirect('/c');});
  
});