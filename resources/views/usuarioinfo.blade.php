{{--| admin |--}}

@extends('building')
@section('title', 'Usuario info')
@section('content')

  @include('tool.topnav')

  <div class="container">
    <!--|==========| Boton | Regresar |==========|-->
    <div class="btn-left-pro"> <a href="{{ url('/u') }}" title="Regresar" class="aarrooww"><</a> </div>
    <!--|==========| Usuario | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p><img src="/img/info.png"> Usuario [info]</p> </div>

    <table class="table table-bordered">  
      <tr>
        <th class="table-primary">No. </th>
        <td>{{ $user->id }}</td>
      </tr> 
      <tr> 
        <th class="table-primary">Nombre</th>
        <td>{{ $user->name }} </td>
      </tr>
      {{-- <tr> 
        <th class="table-primary">Apellido</th>
        <td>{{ $user->apellido }}</td>
      </tr> --}}
      <tr>
        <th class="table-primary">Correo</th>
        <td>{{ $user->email }}</td>
      </tr>
      <tr> 
        <th class="table-primary">Creado</th>
        <td>{{ $user->created_at }}</td>
      </tr>
      <tr>
        <th class="table-primary">Modificado</th>
        <td>{{ $user->updated_at }}</td>
      </tr>
    </table>
  </div>

@endsection