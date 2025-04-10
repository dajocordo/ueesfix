@extends('building')

@section('title', 'gestion tipo')

@section('content')

  <!--|==========| Barra de navegacion | ↓ | inicio |==========|-->
  @include('tool.topnav')
<!--|=========| Barra de navegacion | ← | fin |=========|-->

  <!--|==========| Container | ↓ | inicio |==========|-->
  <div class="container">
    <!--|==========| Boton | ir a izquierda |==========|-->
    <div class="btn-left-pro"> 
      <a href="home" title="Inicio" class="aarrooww"><</a>
    </div>
    <!--|==========| GestionTipo | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p>Gestion Tipo</p> </div>
    <!--|==========| Boton | ir a derecha |==========|-->
    <div class="btn-right-pro"> <a href="/gestiontiponuevo" title="Nuevo" class="aarrooww">+</a> </div>
    
    <!--|==========| Tabla Gestion Tipo | ↓ | inicio |==========|-->
    <table class="table table-bordered">
      <thead>
        <th>No.</th>
        <th>Nombre</th>
        <th>Modificado</th>
        <th colspan="3">Opciones</th>
      </thead>
      @php $num=1;
        foreach ($gestiontipo1 as $gestionti) {
          $id = $gestionti->gestiontipoid;
          $gestiontipo_Nombre = $gestionti->gestiontipo_name;
          $gestiontipo_Fecha_Actual = $gestionti->updated_at;
      @endphp
      <tbody>
        <td>@php echo $num++; @endphp</td>
        <td>@php echo $gestiontipo_Nombre; @endphp</td> 
        <td>@php echo $gestiontipo_Fecha_Actual; @endphp</td>
        <td><a class="optionsu" href="/gt/@php echo $id; @endphp/edit" title="Editar"><img src="img/edit.png"></a></td>
        <td><a class="optionsu" href="/gt/@php echo $id; @endphp" title="Ver"><img src="img/info.png"></a></td> 
        <td><a class="optionsu" href="/gt/delete" title="Eliminar"><p class="btndelete">X</p></a></td>
      </tbody>  
     @php } @endphp  
    </table> <!--|==========| Tabla Gestion Tipo | ↑ | fin |==========|-->
  </div>
  <!--|==========| Container | fin | ↑ |==========|-->

@endsection