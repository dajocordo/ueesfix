{{--| admin |--}}

@extends('building')
@section('title', 'facultad')
@section('content')

  @include('tool.topnav')

  <div class="container">
    <!--|==========| Boton | ir a izquierda |==========|-->
    <div class="btn-left-pro"> 
      <a href="home" title="Inicio" class="aarrooww"><</a>
    </div>
    <!--|==========| Nuevo | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p>Facultad</p> </div>
    <!--|==========| Boton | ir a derecha |==========|-->
    <div class="btn-right-pro"> <a href="/facultadnuevo" title="Nuevo" class="aarrooww">+</a> </div>    

    <table class="table table-bordered">
      <thead>
        <th>No.</th>
        <th>Nombre</th>
        <th>Modificado</th>
        <th colspan="3">Opciones</th>
      </thead>
      <tbody>
        @foreach ($facultad as $value)
        <tr>
          <td>{{ $value->num }}</td>
          <td>{{ $value->name }}</td>
          <td>{{ $value->fecha }}</td>
          <td><a class="optionsu" href="/f/{{ $value->id }}/edit"><img src="img/edit.png"></a></td>
          <td>
            <button type="button" class="btn btn-data-info" data-cod="{{ $value->id }}" data-tipo="facultad"><img src="img/info.png"></button>
          </td>
          <td><a class="optionsu" href="/f/delete"><p class="btndelete">X</p></a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  @vite(['resources/js/carrera/carrera-index.js'])


@endsection