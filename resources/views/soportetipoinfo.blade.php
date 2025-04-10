{{--| admin |--}}

@extends('building')

@section('title', 'Soporte tipo info')

@section('content')

 @include('tool.topnav')

    <!--|====| Container | ↓ | → | inicio |====|-->
  <div class="container">
    <!--|==========| Boton | Regresar |==========|-->
    <div class="btn-left-pro"> <a href="{{ url('/st') }}" title="Regresar" class="aarrooww"><</a> </div>
    <!--|==========| Soporte Tipo | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p><img src="/img/info.png"> Soporte Tipo [info]</p> </div>

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
    </table>
  <!--|==========| Container | fin | ← | ↑ |==========|-->
  </div>

@endsection