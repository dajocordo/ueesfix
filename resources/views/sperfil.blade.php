{{--| support |--}}
@extends('building')
@section('title', 'Perfil')
@section('content')

  <!--|==========| Barra de navegacion | ↓ | inicio |==========|-->
  <div class="topnav" id="myTopnav">
    <a href="dashboard">Inicio</a>
    <a href="perfil" class="active">Perfil</a>
    <a href="#CerrarSesion" data-bs-toggle="modal" title="Salir" data-bs-target="#CerrarSesion">Salir</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div><!--|==========| Barra de navegacion | ↑ | fin |==========|-->

  <div class="container">
    <!--|==========| Perfil | ↓ |==========|-->
    <h1 id="greeting">Perfil</h1> 
    @csrf
      @php   $soporte_show = DB::SELECT('SELECT * FROM soporte WHERE soportecif = ?',[$_SESSION['support']]); 
            foreach ($soporte_show as $soporteshoow) {
            $id = $soporteshoow->soportecif;
            $sname = $soporteshoow->snombre;
            
          @endphp
           <!--|==========| Editar perfil | ↓ |==========|-->
    <div class="editprofile"> <p class="ppro"> <a href="/sp/@php echo $id; @endphp/edit" class="a2">Editar perfil</a> </p> </div>
    @php
      }
      @endphp
    <!--|==========| Ver perfil | ↓ |==========|-->
      <div class="seeprofile"> <p class="ppro"> <a href="/sp/@php echo $id; @endphp" class="a1">Mi cuenta</a> </p> </div>
   
    <!--|==========| Conocer equipo | ↓ |==========|-->
    <div class="knowteam"> <p class="ppro"> <a href="{{ url('/sp') }}" class="a3">Mi equipo</a> </p> </div>
  </div>

@endsection