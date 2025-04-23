{{--| admin |--}}

@extends('building')
@section('title', 'Prioridad')
@section('content')

  @include('tool.topnav')

  <!--|==========| Container | ↓ | inicio |==========|-->
  <div class="container">
    <!--|==========| Boton | ir a izquierda |==========|-->
    <div class="btn-left-pro"> <a href="/home" title="Inicio" class="aarrooww"><</a> </div>
    <!--|==========| Nuevo | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p>Prioridad</p> </div>
    <!--|==========| Boton | ir a derecha |==========|-->
    <div class="btn-right-pro"> <a href="/prioridadnueva" title="Nueva Prioridad" class="aarrooww">+</a> </div>
    <table class="table table-bordered">
      <thead>
        <th>ID</th>
        <th>Prioridad</th>
        <th>Creado</th>
        <th colspan="3">Opciones</th>
      </thead>
      <tbody>
        @foreach ($prioridad as $value)
          <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->fecha }}</td>
            <td><a class="optionsu" href="/p/{{ $value->id }}/edit"><img src="img/edit.png"></a></td>
            <td>
              <button type="button" class="btn btn-data-info" data-cod="{{ $value->id }}" data-tipo="prioridad"><img src="img/info.png"></button>
            </td>
            <td><a class="optionsu" href="/p/delete"><p class="btndelete">X</p></a></td>
          </tr>
        @endforeach
      </tbody>  
    </table> 
  </div>

  @vite(['resources/js/carrera/carrera-index.js'])
  
@endsection