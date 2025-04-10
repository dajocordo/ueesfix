{{--| admin |--}}

@extends('building')

@section('title', 'estado')

@section('content')

  @include('tool.topnav')

  <!--|==========| Container | ↓ | inicio |==========|-->
  <div class="container">
    <!--|==========| Boton | ir a izquierda |==========|-->
    <div class="btn-left-pro"> 
      <a href="home" title="Inicio" class="aarrooww"><</a>
    </div>
    <!--|==========| Nuevo | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p>Estado</p> </div>
    <!--|==========| Boton | ir a derecha |==========|-->
    <div class="btn-right-pro"> <a href="{{ url('/estadonuevo' )}}" title="Nuevo" class="aarrooww">+</a> </div>
    
    <!--|==========| Tabla Usuarios | ↓ | inicio |==========|-->
    <table class="table table-bordered">
      <thead>
        <th>No.</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Correo</th>
        <th colspan="2">Opciones</th>
      </thead>
      @php
      $num=1;
      foreach ($users as $user) {
        $id = $user->usuariocif;
        $nombreu = $user->unombre;
        $apellidou = $user->uapellido;
        $correou = $user->umail;
      @endphp
      <tbody><td>@php echo $num++; @endphp</td>
        <td>@php echo $nombreu; @endphp</td>
        <td>@php echo $apellidou; @endphp</td>
        <td>@php echo $correou; @endphp</td> 
        <td><a class="optionsu" href="/h/@php echo $id; @endphp/edit"><img src="img/edit.png"></a></td>
        <td><a class="optionsu" href="/h/@php echo $id; @endphp"><img src="img/info.png"></a></td> 
        <td><a class="optionsu" href="/h/delete"><p class="btndelete">X</p></a></td>
      </tbody>  
     @php } @endphp  
    </table> <!--|==========| Tabla Usuarios | ↑ | fin |==========|-->
  </div>
  <!--|==========| Container | fin | ↑ |==========|-->

@endsection