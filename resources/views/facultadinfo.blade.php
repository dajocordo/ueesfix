{{--| admin |--}}

@extends('building')
@section('title', 'Facultad info')
@section('content')

  @include('tool.topnav')

  <div class="container">
    <!--|==========| Boton | Regresar |==========|-->
    <div class="btn-left-pro"> <a href="{{ url('/f') }}" title="Regresar" class="aarrooww"><</a> </div>
    <!--|==========| Facultad | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p><img src="/img/info.png"> Facultad [info]</p> </div>
    <table class="table table-bordered">  
      <tr>
        <th class="table-primary">ID</th>
        <td>{{ $facultad->id }}</td>
      </tr> 
      <tr> 
        <th class="table-primary">Nombre</th>
        <td>{{ $facultad->valor }}</td>
      </tr>
      <tr> 
        <th class="table-primary">Creado</th>
        <td>{{ $facultad->created_at }}</td>
      </tr>
      <tr>
        <th class="table-primary">Modificado</th>
        <td>{{ $facultad->updated_at }}</td>
      </tr>
    </table>
  </div>

@endsection