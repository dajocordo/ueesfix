{{--| admin |--}}

@extends('building')
@section('title', 'Estado info')
@section('content')

  @include('tool.topnav')

  <div class="container">
    <!--|==========| Boton | Regresar |==========|-->
    <div class="btn-left-pro"> <a href="{{ url('/e') }}" title="Regresar" class="aarrooww"><</a> </div>
    <!--|==========| Estado | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p><img src="/img/info.png"> Estado [info]</p> </div>
    <table class="table table-bordered">  
      <tr>
        <th class="table-primary">ID</th>
        <td>{{ $estado->id }}</td>
      </tr> 
      <tr> 
        <th class="table-primary">Nombre</th>
        <td>{{ $estado->valor }}</td>
      </tr>
      <tr> 
        <th class="table-primary">Creado</th>
        <td>{{ $estado->created_at }}</td>
      </tr>
      <tr>
        <th class="table-primary">Modificado</th>
        <td>{{ $estado->updated_at }}</td>
      </tr>
    </table>
  </div>

@endsection