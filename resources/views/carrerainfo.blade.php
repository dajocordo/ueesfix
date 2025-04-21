{{--| admin |--}}

@extends('building')
@section('title', 'Carrera info')
@section('content')

  @include('tool.topnav') 

  <!--|====| Container | ↓ | → | inicio |====|-->
  <div class="container">
    <!--|==========| Boton | Regresar |==========|-->
    <div class="btn-left-pro">
      <a href="{{ url('/c') }}" title="Regresar" class="aarrooww"><</a>
    </div>
    <!--|==========| Estado | ↓ | titulo |==========|-->
    <div class="middle-pro">
      <p><img src="/img/info.png"> Carrera [info]</p>
    </div>

    <table class="table table-bordered">  
      <tr>
        <th class="table-primary">No. </th>
        <td>{{ $carrera->id }}</td>
      </tr> 
      <tr> 
        <th class="table-primary">Carrera</th>
        <td>{{ $carrera->valor }} </td>
      </tr>
      <tr> 
        <th class="table-primary">Facultad</th>
        <td>{{ $carrera->origen->valor ?? '' }} </td>
      </tr>
      <tr> 
        <th class="table-primary">Creado</th>
        <td>{{ $carrera->created_at }}</td>
      </tr>
      <tr>
        <th class="table-primary">Modificado</th>
        <td>{{ $carrera->updated_at }}</td>
      </tr>
    </table>
  </div>

@endsection