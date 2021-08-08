<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

/*------------------------------------------------------------------------
| Web Routes
|-------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!*/

Route::get('/', function () {return view('index');});
Route::get('/dashboard', function() {return view('dashboard');});
Route::get('/home', function() {return view('home');});
Route::get('/index', function() {return view('index');});
Route::get('/inicio', function() {return view('inicio');});
Route::get('/login', function() {return view('login');});
Route::get('/logout', function() {return view('logout');});
Route::get('/perfil', function() {return view('perfil');});
Route::get('/notas', function() {return view('notas');});
Route::get('/contact', function() {return view('contact');});
Route::get('/todo', function() {return view('todo');});
Route::get('/doing', function() {return view('doing');});
Route::get('/done', function() {return view('done');});


// LOGIN
Route::get('/loginui', function() {return view('loginui');});
Route::get('/loginuii', function() {return view('loginuii');});
Route::get('/loginsi', function() {return view('loginsi');});
Route::get('/loginsii', function() {return view('loginsii');});
Route::get('/loginai', function() {return view('loginai');});
Route::get('/loginaii', function() {return view('loginaii');});
Route::resource('/l', LoginnController::class);
Route::post('/lu', [LoginnController::class, 'firstusuario']);
Route::post('/ls', [LoginnController::class, 'firstsoporte']);
Route::post('/la', [LoginnController::class, 'firstadmin']);
Route::post('/loginu', [LoginnController::class, 'stepusu']);
Route::post('/logins', [LoginnController::class, 'stepsop']);
Route::post('/logina', [LoginnController::class, 'stepadm']);


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


//  CHATBOT
Route::get('/chatbotnuevo', function() {return view('chatbotnuevo');});
Route::get('/chatbot', [ChatbotController::class, 'index']);
Route::get('/chatbotedit', function() {return view('chatbotedit');});
Route::resource('/ch', ChatbotController::class);
Route::get('/ch', [ChatbotController::class, 'index']);
Route::get('/ch/{id}', [ChatbotController::class, 'show']);
Route::get('ch/{id}/edit', [ChatbotController::class, 'edit']);
Route::post('/ch/create', [ChatbotController::class, 'create']);
Route::post('/ch/update', [ChatbotController::class, 'update']);


//  ESTADO
Route::get('/estadonuevo', function() {return view('estadonuevo');});
Route::get('/estadoedit', function() {return view('estadoedit');});
Route::resource('/e', EstadoController::class);
Route::get('/e', [EstadoController::class, 'index']);
Route::get('e/{id}', [EstadoController::class, 'show']);
Route::get('e/{id}/edit', [EstadoController::class, 'edit']);
Route::post('/e/create', [EstadoController::class, 'create']);
Route::post('/e/update', [EstadoController::class, 'update']);


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


//  GESTION
Route::get('/gestionnuevo', function() {return view('gestionnuevo');});
Route::get('/gestion', [GestionController::class, 'index']);
Route::get('/gestionedit', function() {return view('gestionedit');});
Route::resource('/g', GestionController::class);
Route::get('/g', [GestionController::class, 'index']);
Route::get('/g/{id}', [GestionController::class, 'show']);
Route::get('g/{id}/edit', [GestionController::class, 'edit']);
Route::post('/g/create', [GestionController::class, 'create']);
Route::post('/g/update', [GestionController::class, 'update']);


//  GESTION TIPO
Route::get('/gestiontiponuevo', function() {return view('gestiontiponuevo');});
Route::get('/gestiontipo', [GestionTipoController::class, 'index']);
Route::get('/gestiontipoedit', function() {return view('gestiontipoedit');});
Route::resource('/gt', GestionTipoController::class);
Route::get('/gt', [GestionTipoController::class, 'index']);
Route::get('/gt/{id}', [GestionTipoController::class, 'show']);
Route::get('gt/{id}/edit', [GestionTipoController::class, 'edit']);
Route::post('/gt/create', [GestionTipoController::class, 'create']);
Route::post('/gt/update', [GestionTipoController::class, 'update']);


//  HISTORIAL
Route::get('/historialnuevo', function() {return view('historialnuevo');});
Route::get('/historial', [HistorialController::class, 'index']);
Route::get('/historialedit', function() {return view('historialedit');});
Route::resource('/h', HistorialController::class);
Route::get('/h', [HistorialController::class, 'index']);
Route::get('/h/{id}', [HistorialController::class, 'show']);
Route::get('h/{id}/edit', [HistorialController::class, 'edit']);
Route::post('/h/create', [HistorialController::class, 'create']);
Route::post('/h/update', [HistorialController::class, 'update']);


//  NOTAS
Route::get('/notasnuevo', function() {return view('notasnuevo');});
Route::get('/notas', [NotasController::class, 'index']);
Route::get('/notasedit', function() {return view('notasedit');});
Route::resource('/n', NotasController::class);
Route::get('/n', [NotasController::class, 'index']);
Route::get('/n/{id}', [NotasController::class, 'show']);
Route::get('n/{id}/edit', [NotasController::class, 'edit']);
Route::post('/n/create', [NotasController::class, 'create']);
Route::post('/n/update', [NotasController::class, 'update']);


//  PRIORIDAD
Route::get('/prioridadnueva', function() {return view('prioridadnueva');});
Route::get('/prioridadedita', function() {return view('prioridadedita');});
Route::resource('/p', PrioridadController::class);
Route::get('/p', [PrioridadController::class, 'index']);
Route::get('p/{id}', [PrioridadController::class, 'show']);
Route::get('p/{id}/edit', [PrioridadController::class, 'edit']);
Route::post('/p/create', [PrioridadController::class, 'create']);
Route::post('/p/update', [PrioridadController::class, 'update']);


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
Route::get('/st/{id}', [SoportetipoController::class, 'show']);
Route::get('/st/{id}/edit', [SoportetipoController::class, 'edit']);
Route::post('/st/create', [SoportetipoController::class, 'create']);
Route::post('/st/update', [SoportetipoController::class, 'update']);


//  TICKET
Route::get('/ticketedit', function() {return view('ticketedit');});
Route::resource('/t', TicketController::class);
Route::get('/t', [TicketController::class, 'index']);
Route::get('/t/{id}', [TicketController::class, 'show']);
Route::get('/t/{id}/edit', [TicketController::class, 'edit']);
Route::post('/t/create', [TicketController::class, 'create']);
Route::post('/t/update', [TicketController::class, 'update']);
Route::get('/ticketnuevo', [TicketController::class, 'tktnewtii']);

//  TICKET NUEVO SESION DE USUARIO
Route::resource('/tu', UTicketController::class);
Route::get('/tu', [UTicketController::class, 'index']);
Route::get('/tu/{id}', [UTicketController::class, 'show']);
Route::get('/tu/{id}/edit', [UTicketController::class, 'edit']);
Route::post('/tu/create', [UTicketController::class, 'create']);
Route::post('/tu/update', [UTicketController::class, 'update']);
Route::get('/ticketn', [UTicketController::class, 'utktnewtii']);

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