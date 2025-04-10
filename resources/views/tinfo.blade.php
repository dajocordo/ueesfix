{{--| support |--}}

@extends('building')

@section('title', 'Ticket Info')

@section('content')

  <!--|==========| Barra de navegacion | ↓ | inicio |==========|-->
  <div class="topnav" id="myTopnav">
    <a href="dashboard" class="active">Inicio</a>
    <a href="perfil">Perfil</a>
    <a href="#CerrarSesion" data-bs-toggle="modal" title="Salir">Salir</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div><!--|==========| Barra de navegacion | ↑ | fin |==========|-->

    <!--|====| Container | ↓ | → | inicio |====|-->
<div class="container">
    <!--|==========| Boton | Regresar |==========|-->
    <div class="btn-left-pro"> <a href="{{ url('/ts') }}" title="Regresar" class="aarrooww"><</a> </div>
    <!--|==========| Ticket | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p><img src="/img/info.png"> Ticket [ info ]</p> </div>

    <!--|====| Tabla Ticket [info ] | ↓ | inicio |====|-->
    <table class="table table-bordered">  
    <tr>
      <th class="table-primary">Ticket</th>
      <td>@php echo $id; @endphp</td>
    </tr> 
    <tr> 
      <th class="table-primary">Titulo</th>
      <td>@php echo $titulo; @endphp </td>
    </tr>
    <tr> 
      <th class="table-primary">Detalles</th>
      <td>@php echo $detalles; @endphp</td>
    </tr>
    <tr> 
      <th class="table-primary">Gestion</th>
      <td>@php echo $gname; @endphp </td>
    </tr>
    <tr> 
      <th class="table-primary">Gestion Tipo</th>
      <td>@php echo $gtname; @endphp</td>
    </tr>
    <tr>
      <th class="table-primary">Prioridad</th>
      <td>@php echo $pname; @endphp</td>
    </tr>
    <tr>
      <th class="table-primary">Estado</th>
      <td>@php echo $ename; @endphp</td>
    </tr>
    <tr> 
      <th class="table-primary">Creado</th>
      <td>@php echo $creado; @endphp</td>
    </tr>
    <tr>
      <th class="table-primary">Modificado</th>
      <td>@php echo $modificado; @endphp</td>
  </table><!--|======| Tabla Ticket [info] | ↑ | fin |======|-->
  <!--|==========| Container | fin | ← | ↑ |==========|-->
</div>

@endsection