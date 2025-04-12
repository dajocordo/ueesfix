{{--| admin |--}}

@extends('building')
@section('title', 'Opciones')
@section('content')

  <div class="topnav" id="myTopnav">
      <a href="dashboard">Inicio</a>
      <a href="perfil.php">Perfil</a>
      <a href="#CerrarSesion" data-bs-toggle="modal" title="Salir">Salir</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
      </a>
  </div>
  <!--|==========| Barra de navegacion | ↑ | fin |==========|-->
  <!--|==========| Container | ↓ | inicio |==========|-->
  <div class="container">
      <div class="btn-left-pro"> <a href="{{ url('/dashboard' )}}" title="Inicio" class="aarrooww"><</a> </div>
      <!--|==========| Bienvenida | ↓ |==========|-->
        <div class="middle-pro"> <p>Bienvenido UEES-FIX</p> </div>
          <!--|==========| Boton | ir a izquierda |==========|-->
      
      <!--|==========| Nuevo | ↓ |==========|-->
      <div class="row"><!--|==========| Div | Row I | ↓ |==========|-->
        <div class="col"> <p class="ppro"> <a href="{{ url('/tnuevo') }}" class="a1">Crear Ticket</a> </p> </div>
        <div class="col"> <p class="ppro"> <a href="{{ url('/ts') }}" class="a2">Mis Tickets</a> </p> </div>
      <!--|==========| Div | Row I | ↑ |==========|--></div>
  <!--|==========| Container | fin | ↑ |==========|-->

@endsection