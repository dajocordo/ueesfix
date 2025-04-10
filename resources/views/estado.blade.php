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
    <!--|==========| Roles | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p>Estado</p> </div>
    <!--|==========| Boton | ir a derecha |==========|-->
    <div class="btn-right-pro"> <a href="/estadonuevo" title="Nuevo" class="aarrooww">+</a> </div>
    
    <!--|==========| Tabla Roles | ↓ | inicio |==========|-->
    <table class="table table-bordered">
      <thead>
        <th>ID</th>
        <th>Estado</th>
        <th>Modificado</th>
        <th colspan="2">Opciones</th>
      </thead>
      @php
        foreach ($state as $queryState) {
          $id = $queryState->estadoid;
          $name = $queryState->estado_name;
          $fecha = $queryState->updated_at;
      @endphp
      <tbody>
        <td>@php echo $id; @endphp</td>
        <td>@php echo $name; @endphp</td> 
        <td>@php echo $fecha; @endphp</td>
        <td><a class="optionsu" href="/e/@php echo $id; @endphp/edit"><img src="img/edit.png"></a></td>
        <td><a class="optionsu" href="/e/@php echo $id; @endphp"><img src="img/info.png"></a></td> 
      </tbody>  
     @php } @endphp  
    <!--|==========| Tabla Roles | ↑ | fin |==========|--></table>
    <!--|==========| Container | fin | ← | ↑ |==========|-->
</div>

@endsection