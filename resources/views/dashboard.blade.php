
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

  <!--|====| Container | ↓ | → | inicio |====|--><div class="container">
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
  <!--|==========| Container | fin | ← | ↑ |==========|--></div>

  <!--|========| New Modal - CerrarSesion |inicio| ↓ |========|-->
  <div class="modal fade" id="CerrarSesion" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Cerrar Sesion</h5>
          <a class="modal-btn-closee" data-bs-dismiss="modal" aria-label="Close">X</a>
        </div>
          <div class="modal-body"> ¿Desea salir de la plataforma? </div>
        <div class="modal-footer">
            <a class="modal-btn-cerrar" data-bs-dismiss="modal">No</a>
            <a href="logout" type="button" class="modal-btn-cerrar">Si</a>
        </div>
      </div>
    </div>
  </div><!--|======| New Modal - CerrarSesion |fin| ↑ |======|--> 

@endsection