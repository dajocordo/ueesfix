{{--| admin |--}}

@extends('building')

@section('title', 'soporte')

@section('content')

@include('tool.topnav')

  <!--|==========| Container | ↓ | inicio |==========|-->
  <div class="container">
    <!--|==========| Boton | ir a izquierda |==========|-->
    <div class="btn-left-pro"> 
      <a href="home" title="Inicio" class="aarrooww"><</a>
    </div>
    <!--|==========| Nuevo | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p>Soporte</p> </div>
    <!--|==========| Boton | ir a derecha |==========|-->
    <div class="btn-right-pro"> <a href="/soportenuevo" title="Nuevo" class="aarrooww">+</a> </div>
    <!--|==========| Nuevo | ↓ |==========|-->
    
    <!--|==========| Tabla Soporte | ↓ | inicio |==========|-->
    <table class="table table-bordered">
      <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Correo</th>
        <th colspan="3">Opciones</th>
      </thead>
      @php
      $num=1;
      foreach ($soport as $sopor) {
        $id = $sopor->soportecif;
        $sopnombre = $sopor->soporte_name;
        $sopapellido = $sopor->soporte_apellido;
        $sopcorreo = $sopor->soporte_mail;
      @endphp
      <tbody><td>@php echo $id; @endphp</td>
        <td>@php echo $sopnombre; @endphp</td>
        <td>@php echo $sopapellido; @endphp</td>
        <td>@php echo $sopcorreo; @endphp</td> 
        <td><a class="optionsu" href="/s/@php echo $id; @endphp/edit"><img src="img/edit.png"></a></td>
        <td><a class="optionsu" href="/s/@php echo $id; @endphp"><img src="img/info.png"></a></td> 
        <td><a class="optionsu" href="/s/delete"><p class="btndelete">X</p></a></td> 
      </tbody>  
     @php } @endphp  
    </table> <!--|==========| Tabla Usuarios | ↑ | fin |==========|-->
  </div>
  <!--|==========| Container | fin | ↑ |==========|-->

@endsection