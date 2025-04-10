{{--| admin |--}}

@extends('building')

@section('title', 'Carrera info')

@section('content')

  @include('tool.topnav') 

  <!--|====| Container | ↓ | → | inicio |====|-->
  <div class="container">
      <!--|==========| Boton | Regresar |==========|-->
      <div class="btn-left-pro"> <a href="{{ url('/c') }}" title="Regresar" class="aarrooww"><</a> </div>
      <!--|==========| Estado | ↓ | titulo |==========|-->
      <div class="middle-pro"> <p><img src="/img/info.png"> Carrera [info]</p> </div>

      <table class="table table-bordered">  
      <tr>
        <th class="table-primary">No. </th>
        <td>@php echo $carreraid; @endphp</td>
      </tr> 
      <tr> 
        <th class="table-primary">Carrera</th>
        <td>@php echo $cname; @endphp </td>
      </tr>
      <tr> 
        <th class="table-primary">Facultad</th>
        <td>@php echo $fname; @endphp </td>
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