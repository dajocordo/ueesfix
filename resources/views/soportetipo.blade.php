@extends('building')
@section('title', 'soporte tipo')
@section('content')

  @include('tool.topnav')

  <!--|==========| Container | ↓ | inicio |==========|-->
  <div class="container">
    <!--|==========| Boton | ir a izquierda |==========|-->
    <div class="btn-left-pro"> 
      <a href="home" title="Inicio" class="aarrooww"><</a>
    </div>
    <!--|==========| Nuevo | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p>Soporte Tipo</p> </div>
    <!--|==========| Boton | ir a derecha |==========|-->
    <div class="btn-right-pro"> <a href="/soportetiponuevo" title="Nuevo" class="aarrooww">+</a> </div>
    <!--|==========| Nuevo | ↓ |==========|-->
    
    <!--|=======| Tabla Soporte Tipo | ↓ | inicio |=======|-->
    <table class="table table-bordered">
      <thead>
        <th>No.</th>
        <th>Soporte Tipo</th>
        <th>Modificado</th>
        <th colspan="3">Opciones</th>
      </thead>
      @php
      $num=1;
      foreach ($sopotipo as $st) {
        $id = $st->soportetipoid;
        $nombrest = $st->soportetipo_name;
        $fechaActual = $st->updated_at;
      @endphp
      <tbody><td>@php echo $num++; @endphp</td>
        <td>@php echo $nombrest; @endphp</td>
        <td>@php echo $fechaActual; @endphp</td>
        <td><a class="optionsu" href="/st/@php echo $id; @endphp/edit"><img src="img/edit.png"></a></td>
        <td><a class="optionsu" href="/st/@php echo $id; @endphp"><img src="img/info.png"></a></td> 
        <td><a class="optionsu" href="/st/delete"><p class="btndelete">X</p></a></td> 
      </tbody>  
     @php } @endphp  
    </table><!--|=======| Tabla Soporte Tipo | ↑ | fin |=======|-->
  </div>
  
@endsection