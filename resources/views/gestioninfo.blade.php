{{--| admin |--}}

@extends('building')

@section('title', 'Gestion info')

@section('content')


  <!--|==========| Barra de navegacion | ↓ | inicio |==========|-->
  <div class="topnav" id="myTopnav">
    <a href="{{ url('/home') }}" class="active">Inicio</a>
    <a href="perfil">Perfil</a>
    <a href="#CerrarSesion" data-bs-toggle="modal" title="Salir">Salir</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div><!--|==========| Barra de navegacion | ↑ | fin |==========|-->

 <!--|====| Container | ↓ | → | inicio |====|-->
<div class="container">
    <!--|==========| Boton | Regresar |==========|-->
    <div class="btn-left-pro"> <a href="{{ url('/g') }}" title="Regresar" class="aarrooww"><</a> </div>
    <!--|==========| Gestion | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p><img src="/img/info.png"> Gestion [info]</p> </div>
    <!--|====| Tabla Gestion [info] | ↓ | inicio |====|-->
    <table class="table table-bordered">  
    <tr>
     <th class="table-primary">ID</th>
      <td>@php echo $id; @endphp</td>
    </tr> 
    <tr> 
      <th class="table-primary">Nombre</th>
      <td>@php echo $name; @endphp </td>
    </tr>
    <tr> 
      <th class="table-primary">Creado</th>
      <td>@php echo $creado; @endphp</td>
    </tr>
    <tr>
      <th class="table-primary">Modificado</th>
      <td>@php echo $modificado; @endphp</td>
    </tr>
  </table><!--|======| Tabla Gestion [info] | ↑ | fin |======|-->
  <!--|==========| Container | fin | ← | ↑ |==========|-->
</div>
@endsection