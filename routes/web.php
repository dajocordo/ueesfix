<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

/*------------------------------------------------------------------------
| Web Routes
|-------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!*/

Route::get('/', function () {return view('login');});
Route::get('/home', function() {return view('home');});
Route::get('/login', function() {return view('login');});
Route::get('/perfil', function() {return view('perfil');});
Route::get('/notas', function() {return view('notas');});
Route::get('/contact', function() {return view('contact');});
Route::get('/todo', function() {return view('todo');});
Route::get('/doing', function() {return view('doing');});
Route::get('/done', function() {return view('done');});


// 	CARRERA
Route::get('/carreraedit', function() {return view('carreraedit');});
Route::get('/carreranueva', function() {return view('carreranueva');});
Route::get('/carrerashow', function() {return view('carrerashow');});
Route::resource('/c', carreraController::class);
Route::post('/c/{id}', [carreraController::class, 'show']);
Route::post('/c/{id}/edit', [carreraController::class, 'edit']);
Route::post('c/create', [carreraController::class, 'create']);
Route::post('/c/update', [carreraController::class, 'update']);
// // Route::get('/carreras', [carreraController::class, 'index']);
// // Route::get('/carreras', function() {return view('carreras');});
Route::get('/carreras', function () {return redirect('/c');});


//  FACULTAD
Route::get('/facultadnuevo', function() {return view('facultadnuevo');});
Route::get('/facultad', [FacultadController::class, 'index']);
Route::get('/facultadedit', function() {return view('facultadedit');});
Route::resource('/f', FacultadController::class);
Route::get('f/{id}', [FacultadController::class, 'show']);
Route::get('f/{id}/edit', [FacultadController::class, 'edit']);
Route::get('/f', [FacultadController::class, 'index']);
Route::post('/f/create', [FacultadController::class, 'create']);
Route::post('/f/update', [FacultadController::class, 'update']);



//  PRIORIDAD
Route::get('/prioridadnueva', function() {return view('prioridadnueva');});
Route::get('/prioridad edit', function() {return view('editausuario');});
Route::resource('/p', PrioridadController::class);
Route::get('/p', [PrioridadController::class, 'index']);
Route::get('/prioridad', [PrioridadController::class, 'index']);
Route::post('/p/create', [PrioridadController::class, 'create']);


//  SOPORTETIPO
Route::get('/soportetipos', [SoportetipoController::class, 'index']);
Route::get('/soportetiponuevo', function() {return view('soportetiponuevo');});
Route::resource('/st', SoportetipoController::class);
Route::get('/st', [SoportetipoController::class, 'index']);
Route::get('/st/{id}', [UserController::class, 'edit']);
Route::get('/st/{id}/edit', [UserController::class, 'edit']);
Route::post('/st/create', [SoportetipoController::class, 'create']);
Route::post('/st/update', [UserController::class, 'update']);


//  USUARIO
Route::get('/usuarionuevo', function() {return view('usuarionuevo');});
Route::get('/usuarioedit', function() {return view('usuarioedit');});
Route::get('/usuarios', [UserController::class, 'index']);
Route::resource('/u', UserController::class);
Route::get('/u', [UserController::class, 'index']);
Route::get('/u/{id}', [UserController::class, 'show']);
Route::get('/u/{id}/edit', [UserController::class, 'edit']);
Route::post('/u/create', [UserController::class, 'create']);
Route::post('/u/update', [UserController::class, 'update']);
Route::get('/siuu', [UserController::class, 'selectii']);
// Route::get('/u/{id}', [UserController::class, 'show']);
// Route::get('/usuarioedit', [UserController::class, 'edit']);
// Route::get('/u/{id}', 'UserController@show')->name('showme');


//  USUARIO TIPO
Route::get('/usuariotiponuevo', function() {return view('usuariotiponuevo');});
Route::get('/usuariotipo', [UsuarioTipoController::class, 'index']);
Route::get('/usuariotipoedit', function() {return view('usuariotipoedit');});
Route::resource('/ut', UsuarioTipoController::class);
Route::get('/ut', [UsuarioTipoController::class, 'index']);
Route::get('/ut/{id}', [UsuarioTipoController::class, 'show']);
Route::get('ut/{id}/edit', [UsuarioTipoController::class, 'edit']);
Route::post('/ut/create', [UsuarioTipoController::class, 'create']);
Route::post('/ut/update', [UsuarioTipoController::class, 'update']);



// Route::resource('post', PostController::class);
// Route::post('a/create', [PostController::class, 'create']);
// Route::post('a/edit/{id}', [PostController::class, 'edit']);
// Route::get('/post/{id}', [PostController::class, 'show']);


?>