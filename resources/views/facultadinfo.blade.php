{{--| admin |--}}

@extends('building')

@section('title', 'Facultad info')

@section('content')

  @include('tool.topnav') <!--|==========| Barra de navegacion | ↑ | fin |==========|-->

    <!--|====| Container | ↓ | → | inicio |====|-->
  <div class="container">
      <!--|==========| Boton | Regresar |==========|-->
      <div class="btn-left-pro"> <a href="{{ url('/f') }}" title="Regresar" class="aarrooww"><</a> </div>
      <!--|==========| Facultad | ↓ | titulo |==========|-->
      <div class="middle-pro"> <p><img src="/img/info.png"> Facultad [info]</p> </div>
      <!--|====| Tabla Facultad [info ]| ↓ | inicio |====|-->
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
        <th class="table-primary">Creado</th>
        <td>@php echo $creado; @endphp</td>
      </tr>
      <tr>
        <th class="table-primary">Modificado</th>
        <td>@php echo $modificado; @endphp</td>
      </tr>
    </table><!--|======| Tabla Facultad [info] | ↑ | fin |======|-->
    <!--|==========| Container | fin | ← | ↑ |==========|-->
  </div>

@endsection
