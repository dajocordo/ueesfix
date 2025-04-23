{{--|  |--}}

@extends('building')
@section('title', 'estado')
@section('content')

  @include('tool.topnav')

  <div class="container">
    <div class="btn-left-pro"> 
      <a href="home" title="Inicio" class="aarrooww"><</a>
    </div>
    <div class="middle-pro">
      <p>Estado</p>
    </div>
    <div class="btn-right-pro">
      <a href="/estadonuevo" title="Nuevo" class="aarrooww">+</a>
    </div>
    
    <table class="table table-bordered">
      <thead>
        <th>ID</th>
        <th>Estado</th>
        <th>Creado</th>
        <th colspan="2">Opciones</th>
      </thead>
      <tbody>
        @foreach ($state as $value)
          <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td> 
            <td>{{ $value->fecha }}</td>
            <td><a class="optionsu" href="/e/{{ $value->id }}/edit"><img src="img/edit.png"></a></td>
            <td>
              <button type="button" class="btn btn-data-info" data-cod="{{ $value->id }}" data-tipo="estado"><img src="img/info.png"></button>
            </td> 
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  @vite(['resources/js/carrera/carrera-index.js'])

@endsection