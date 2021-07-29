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
Route::resource('/c', CarreraController::class);
Route::get('/c', [CarreraController::class, 'index']);
Route::get('/c/{id}', [CarreraController::class, 'show']);
Route::get('/c/{id}/edit', [CarreraController::class, 'edit']);
Route::post('/c/create', [CarreraController::class, 'create']);
Route::post('/c/update', [CarreraController::class, 'update']);
// // Route::get('/carreras', [carreraController::class, 'index']);
// // Route::get('/carreras', function() {return view('carreras');});
Route::get('/carreras', function () {return redirect('/c');});


//  FACULTAD
Route::get('/facultad', [FacultadController::class, 'index']);
Route::get('/facultadnuevo', function() {return view('facultadnuevo');});
Route::get('/facultadedit', function() {return view('facultadedit');});
Route::resource('/f', FacultadController::class);
Route::get('/f', [FacultadController::class, 'index']);
Route::get('f/{id}', [FacultadController::class, 'show']);
Route::get('f/{id}/edit', [FacultadController::class, 'edit']);
Route::post('/f/create', [FacultadController::class, 'create']);
Route::post('/f/update', [FacultadController::class, 'update']);


//  PRIORIDAD
Route::get('/prioridadnueva', function() {return view('prioridadnueva');});
Route::get('/prioridadedita', function() {return view('prioridadedita');});
Route::resource('/p', PrioridadController::class);
Route::get('/p', [PrioridadController::class, 'index']);
Route::get('p/{id}', [FacultadController::class, 'show']);
Route::get('p/{id}/edit', [FacultadController::class, 'edit']);
Route::post('/p/create', [PrioridadController::class, 'create']);
Route::post('/p/update', [FacultadController::class, 'update']);


//  ROLES
Route::get('/roles', [RolController::class, 'index']);
Route::get('/rolnuevo', function() {return view('rolnuevo');});
Route::get('/roledit', function() {return view('roledit');});
Route::resource('/r', RolController::class);
Route::get('/r', [RolController::class, 'index']);
Route::get('r/{id}', [RolController::class, 'show']);
Route::get('r/{id}/edit', [RolController::class, 'edit']);
Route::post('/r/create', [RolController::class, 'create']);
Route::post('/r/update', [RolController::class, 'update']);


//  SOPORTE
Route::get('/soporteedit', function() {return view('soporteedit');});
// Route::get('/soporte', [SoporteController::class, 'index']);
Route::resource('/s', SoporteController::class);
Route::get('/s', [SoporteController::class, 'index']);
Route::get('/s/{id}', [SoporteController::class, 'show']);
Route::get('/s/{id}/edit', [SoporteController::class, 'edit']);
Route::post('/s/create', [SoporteController::class, 'create']);
Route::post('/s/update', [SoporteController::class, 'update']);
Route::get('/soportenuevo', [SoporteController::class, 'sopnewtii']);


//  SOPORTETIPO
Route::get('/soportetipoedit', function() {return view('soportetipoedit');});
Route::get('/soportetiponuevo', function() {return view('soportetiponuevo');});
Route::resource('/st', SoportetipoController::class);
Route::get('/st', [SoportetipoController::class, 'index']);
Route::get('/st/{id}', [UserController::class, 'show']);
Route::get('/st/{id}/edit', [UserController::class, 'edit']);
Route::post('/st/create', [SoportetipoController::class, 'create']);
Route::post('/st/update', [UserController::class, 'update']);


//  TICKET
Route::get('/ticketedit', function() {return view('ticketedit');});
Route::resource('/t', TicketController::class);
Route::get('/t', [TicketController::class, 'index']);
Route::get('/t/{id}', [TicketController::class, 'show']);
Route::get('/t/{id}/edit', [TicketController::class, 'edit']);
Route::post('/t/create', [TicketController::class, 'create']);
Route::post('/t/update', [TicketController::class, 'update']);
Route::get('/ticketnuevo', [TicketController::class, 'tktnewtii']);


//  USUARIO
// Route::get('/usuarionuevo', function() {return view('usuarionuevo');});
Route::get('/usuarioedit', function() {return view('usuarioedit');});
Route::resource('/u', UsuarioController::class);
Route::get('/u', [UsuarioController::class, 'index']);
Route::get('/u/{id}', [UsuarioController::class, 'show']);
Route::get('/u/{id}/edit', [UsuarioController::class, 'edit']);
Route::post('/u/create', [UsuarioController::class, 'create']);
Route::post('/u/update', [UsuarioController::class, 'update']);
Route::get('/usuarionuevo', [UsuarioController::class, 'usenewtti']);
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