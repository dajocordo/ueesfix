{{--| admin |--}}

@extends('building')

@section('title', 'Estado info')

@section('content')

  @include('tool.topnav') <!--|==========| Barra de navegacion | ↑ | fin |==========|-->

  <!--|====| Container | ↓ | → | inicio |====|--><div class="container">
      <!--|==========| Boton | Regresar |==========|-->
      <div class="btn-left-pro"> <a href="{{ url('/e') }}" title="Regresar" class="aarrooww"><</a> </div>
      <!--|==========| Estado | ↓ | titulo |==========|-->
      <div class="middle-pro"> <p><img src="/img/info.png"> Estado [info]</p> </div>
      <!--|=======| Tabla Estado [info] | ↓ | fin |=======|-->
      <table class="table table-bordered">  
      <tr>
        <th class="table-primary">ID</th>
        <td>@php echo $id; @endphp</td>
      </tr> 
      <tr> 
        <th class="table-primary">Nombre</th>
        <td>@php echo $name; @endphp</td>
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
      <!--|=======| Tabla Estado [info] | ↑ | fin |=======|-->
    <!--|==========| Container | fin | ← | ↑ |==========|--></div>

@endsection