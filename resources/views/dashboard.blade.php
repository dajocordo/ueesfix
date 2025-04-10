
@extends('building')

@section('content')
  
  <link rel="stylesheet" type="text/css" href="/css/soportestyle.css"> 
  <!--|==========| Barra de navegacion | ↓ | inicio |==========|-->
  <div class="topnav" id="myTopnav">
  <a href="{{ url('/dashboard') }}">Inicio</a>
  <a href="#CerrarSesion" data-bs-toggle="modal" title="Salir">Salir</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
  <i class="fa fa-bars"></i>
  </a>
  </div> <!--|==========| Barra de navegacion | ↑ | fin |==========|-->

  <!--|====| Container | ↓ | → | inicio |====|-->
<div class="container">
  {{--
  @php  $supportt = DB::SELECT('SELECT * FROM soporte WHERE soportecif = ?',[$_SESSION['support']]); 
          foreach ($supportt as $suporte) {
            $cif = $suporte->soportecif;
            $name = $suporte->soporte_name;
  @endphp
  <!--|==========| Boton | Tareas |==========|-->
  <div class="btn-left-pro"> <a href="/sperfil" title="Inicio" class="aarrooww"><img src="/img/user.png"></a> </div>
  <!--|==========| Bienvenido | ↓ | titulo |==========|-->
  <div class="middle-pro"> <p>Bienvenido @php echo $name; @endphp</p> </div>
  <!--|==========| Boton | Tareas |==========|-->
  <div class="btn-right-pro"> <a href="/tareas/@php echo $cif; @endphp" title="Tareas" class="aarrooww">✔</a> </div>@php } @endphp


  --}}

  <!--|==========| Nuevo | ↓ |==========|-->
  <div class="first"> <p class="ppro"> <a href="/stnuevo" class="a1">Nuevo</a> </p> </div>
  <!--|==========| Pendiente | ↓ |==========|-->
  <div class="second"> <p class="ppro"> <a href="/stpendiente" class="a2">Pendiente</a> </p> </div>
  <!--|==========| Completado | ↓ |==========|-->
  <div class="third"> <p class="ppro"> <a href="/stterminado" class="a3">Terminado</a> </p> </div>
  <!--|==========| Container | fin | ← | ↑ |==========|-->
</div>

  

@endsection