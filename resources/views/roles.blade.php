{{--| admin |--}}

@extends('building')
@section('title', 'roles')
@section('content')

  @include('tool.topnav')

  <!--|==========| Container | ↓ | inicio |==========|-->
  <div class="container">
    <!--|==========| Boton | ir a izquierda |==========|-->
    <div class="btn-left-pro"> 
      <a href="home" title="Inicio" class="aarrooww"><</a>
    </div>
    <!--|==========| Roles | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p>Roles</p> </div>
    <!--|==========| Boton | ir a derecha |==========|-->
    <div class="btn-right-pro"> <a href="/rolnuevo" title="Nuevo" class="aarrooww">+</a> </div>
    
    <table class="table table-bordered">
      <thead>
        <th>ID</th>
        <th>Rol</th>
        <th>Modificado</th>
        <th colspan="3">Opciones</th>
      </thead>
      <tbody>
        @foreach ($roles as $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td> 
            <td>{{ $value->fecha }}</td>
            <td><a class="optionsu" href="/r/{{ $value->id }}/edit"><img src="img/edit.png"></a></td>
            <td>
              <button type="button" class="btn btn-data-info" data-cod="{{ $value->id }}" data-tipo="roles"><img src="img/info.png"></button>
            </td>
            <td><a class="optionsu" href="/r/delete"><p class="btndelete">X</p></a></td>
        </tr>
        @endforeach  
      </tbody>  
    </table>
  </div>

  @vite(['resources/js/carrera/carrera-index.js'])

@endsection