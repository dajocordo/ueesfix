{{--| admin |--}}

@extends('building')

@section('title', 'Gestion')

@section('content')

  @include('tool.topnav')

  <!--|==========| Container | ↓ | inicio |==========|-->
  <div class="container">
    <!--|==========| Boton | ir a izquierda |==========|-->
    <div class="btn-left-pro"> 
      <a href="home" title="Inicio" class="aarrooww"><</a>
    </div>
    <!--|==========| Gestion | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p>Gestion</p> </div>
    <!--|==========| Boton | ir a derecha |==========|-->
    <div class="btn-right-pro"> <a href="/gtn" title="Nuevo" class="aarrooww">+</a> </div>
    <!--|==========| Tabla Gestion | ↓ | inicio |==========|-->
    <table class="table table-bordered">
      <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Modificado</th>
        <th colspan="3">Opciones</th>
      </thead>
     @php foreach ($gestion1 as $gesti) {
          $id = $gesti->gestionid;
          $gestionname = $gesti->gestion_name;
          $gestion_Fecha_Actual = $gesti->updated_at;
      @endphp
      <tbody>
        <td>@php echo $id; @endphp</td>
        <td>@php echo $gestionname; @endphp</td> 
        <td>@php echo $gestion_Fecha_Actual; @endphp</td>
        <td><a class="optionsu" href="/g/@php echo $id; @endphp/edit" title="Editar"><img src="img/edit.png"></a></td>
        <td><a class="optionsu" href="/g/@php echo $id; @endphp" title="Ver"><img src="img/info.png"></a></td> 
        <td><a class="optionsu" href="/g/delete" title="Eliminar"><p class="btndelete">X</p></a></td>
      </tbody>  
     @php } @endphp  
    </table> <!--|==========| Tabla Gestion | ↑ | fin |==========|-->
  </div>  <!--|==========| Container | fin | ↑ |==========|-->

 
@endsection