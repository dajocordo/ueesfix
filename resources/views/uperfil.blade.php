{{--| usuario |--}}

@extends('building')
@section('title', 'perfil')
@section('content')

  <link rel="stylesheet" type="text/css" href="/css/usuariostyle.css"> 

  <div class="topnav" id="myTopnav">
    <a href="dashboard">Inicio</a>
    <a href="#CerrarSesion" data-bs-toggle="modal" title="Salir" data-bs-target="#CerrarSesion">Salir</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>

  <div class="container">
    <!--|==========| Boton | Regresar |==========|-->
    <div class="btn-left-pro"> <a href="{{ url('/inicio') }}" title="Regresar" class="aarrooww"><</a> </div>
    <!--|==========| Ticket | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p><img src="/img/add.png"> Perfil [ Usuario ]</p> </div>
 
    <div class="container">
    @csrf
      @php   $soporte_show = DB::SELECT('SELECT * FROM usuario WHERE usuariocif = ?',[$_SESSION['student']]); 
            foreach ($soporte_show as $soporteshoow) {
            $id = $soporteshoow->usuariocif;
            $sname = $soporteshoow->usuario_name;
            
          @endphp
           <!--|==========| Editar perfil | ↓ |==========|-->
    <div class="editprofile"> <p class="ppro"> <a href="/up/@php echo $id; @endphp/edit" class="a2">Editar perfil</a> </p> </div>
    @php
      }
      @endphp
    <!--|==========| Ver perfil | ↓ |==========|-->
      <div class="seeprofile"> <p class="ppro"> <a href="/up/@php echo $id; @endphp" class="a1">Mi cuenta</a> </p> </div>
   
    </div>

  
  </div>

@endsection