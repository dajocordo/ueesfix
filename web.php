<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome.blade.php', function(){
    return view('welcome');
});

Route::get('/num/{ido}/{namee}', function($ido, $namee){
    return "Este es el valor real es ". $ido." ".$namee;
});

Route::get('/home.php', function(){
    return view('home');
});

Route::get('/perfil.php', function(){
    return view('perfil');
});

Route::get('/notas.php', function(){
    return view('notas');
});