{{--| admin |--}}

@extends('building')

@section('title', 'facultad')

@section('content')

  @include('tool.topnav')

  <!--|==========| Container | ↓ | inicio |==========|-->
  <div class="container">
    <!--|==========| Boton | ir a izquierda |==========|-->
    <div class="btn-left-pro"> 
      <a href="home" title="Inicio" class="aarrooww"><</a>
    </div>
    <!--|==========| Nuevo | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p>Facultad</p> </div>
    <!--|==========| Boton | ir a derecha |==========|-->
    <div class="btn-right-pro"> <a href="/facultadnuevo" title="Nuevo" class="aarrooww">+</a> </div>    
    <!--|==========| Tabla Facultad | ↓ | inicio |==========|-->
    <table class="table table-bordered">
      <thead>
        <th>No.</th>
        <th>Nombre</th>
        <th>Modificado</th>
        <th colspan="3">Opciones</th>
      </thead>
      @php
      $num=1;
      foreach ($facultad1 as $facul) {
        $id = $facul->facultadid;
        $nombref = $facul->facultad_name;
        $actualf = $facul->updated_at;
      @endphp
      <tbody>
        <td>@php echo $num++; @endphp</td>
        <td>@php echo $nombref; @endphp</td>
        <td>@php echo $actualf; @endphp</td>
        <td><a class="optionsu" href="/f/@php echo $id; @endphp/edit"><img src="img/edit.png"></a></td>
        <td><a class="optionsu" href="/f/@php echo $id; @endphp"><img src="img/info.png"></a></td> 
        <td><a class="optionsu" href="/f/delete"><p class="btndelete">X</p></a></td>
      </tbody>  
     @php } @endphp  
    </table> <!--|==========| Tabla Usuarios | ↑ | fin |==========|-->
  </div><!--|==========| Container | fin | ↑ |==========|-->


@endsection