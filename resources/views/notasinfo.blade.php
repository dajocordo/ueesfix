{{--| admin |--}}

@extends('building')

@section('title', 'Notas info')

@section('content')

  <!--|==========| Barra de navegacion | ↓ | inicio |==========|-->
  <div class="topnav" id="myTopnav">
    <a href="home" class="active">Inicio</a>
    <a href="notas">Notas</a>
    <a href="perfil">Perfil</a>
    <a href="#CerrarSesion" data-bs-toggle="modal" title="Salir">Salir</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div><!--|==========| Barra de navegacion | ↑ | fin |==========|-->

    <!--|====| Container | ↓ | → | inicio |====|-->
  <div class="container">
      <!--|==========| Boton | Regresar |==========|-->
      <div class="btn-left-pro"> <a href="{{ url('/n') }}" title="Regresar" class="aarrooww"><</a> </div>
      <!--|==========| Roles | ↓ | titulo |==========|-->
      <div class="middle-pro"> <p>Notas [info]</p> </div>

      <!--|====| Tabla Usuario [info ]| ↓ | inicio |====|-->
      <table class="table table-bordered">  
      <tr>
        <th class="table-primary">No. </th>
        <td>@php echo $id; @endphp</td>
      </tr> 
      <tr> 
        <th class="table-primary">Nombre</th>
        <td>@php echo $name; @endphp </td>
      </tr>
      <tr> 
        <th class="table-primary">Apellidon</th>
        <td>@php echo $apellido; @endphp</td>
      </tr>
      <tr>
        <th class="table-primary">Correo</th>
        <td>@php echo $correo; @endphp</td>
      </tr>
      <tr> 
        <th class="table-primary">Creado</th>
        <td>@php echo $creado; @endphp</td>
      </tr>
      <tr>
        <th class="table-primary">Modificado</th>
        <td>@php echo $modificado; @endphp</td>
      </tr>
    </table><!--|======| Tabla Usuario [info] | ↑ | fin |======|-->
    <!--|==========| Container | fin | ← | ↑ |==========|-->
  </div>

@endsection