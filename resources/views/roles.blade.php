{{--| admin |--}}

@extends('building')

@section('title', 'roles')

@section('content')

  @include('tool.topnav')

  <!--|==========| Container | ↓ | inicio |==========|-->
  <div class="container">
    <!--|==========| Boton | ir a izquierda |==========|-->
    <div class="btn-left-pro"> 
      <a href="home" title="Inicio" class="aarrooww"><</a>
    </div>
    <!--|==========| Roles | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p>Roles</p> </div>
    <!--|==========| Boton | ir a derecha |==========|-->
    <div class="btn-right-pro"> <a href="/rolnuevo" title="Nuevo" class="aarrooww">+</a> </div>
    
    <!--|==========| Tabla Roles | ↓ | inicio |==========|-->
    <table class="table table-bordered">
      <thead>
        <th>ID</th>
        <th>Rol</th>
        <th>Modificado</th>
        <th colspan="3">Opciones</th>
      </thead>
      @php
        foreach ($roll as $roli) {
          $id = $roli->roles_id;
          $rol_Nombre = $roli->roles_name;
          $rol_Fecha_Actual = $roli->updated_at;
      @endphp
      <tbody>
        <td>@php echo $id; @endphp</td>
        <td>@php echo $rol_Nombre; @endphp</td> 
        <td>@php echo $rol_Fecha_Actual; @endphp</td>
        <td><a class="optionsu" href="/r/@php echo $id; @endphp/edit"><img src="img/edit.png"></a></td>
        <td><a class="optionsu" href="/r/@php echo $id; @endphp"><img src="img/info.png"></a></td> 
        <td><a class="optionsu" href="/r/delete"><p class="btndelete">X</p></a></td>
      </tbody>  
     @php } @endphp  
    <!--|==========| Tabla Roles | ↑ | fin |==========|--></table>
    <!--|==========| Container | fin | ← | ↑ |==========|-->
  </div>

@endsection