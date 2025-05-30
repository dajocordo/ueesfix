{{--| admin |--}}

@extends('building')
@section('title', 'gestion tipo')
@section('content')

  @include('tool.topnav')

  <div class="container">
    <!--|==========| Boton | ir a izquierda |==========|-->
    <div class="btn-left-pro"> 
      <a href="home" title="Inicio" class="aarrooww"><</a>
    </div>
    <!--|==========| GestionTipo | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p>Gestion Tipo</p> </div>
    <!--|==========| Boton | ir a derecha |==========|-->
    <div class="btn-right-pro"> <a href=" {{ url('/gestion-tipo/new') }}" title="Nuevo" class="aarrooww">+</a> </div>
    
    <table class="table table-bordered">
      <thead>
        <th>No.</th>
        <th>Nombre</th>
        <th>Creado</th>
        <th>Modificado</th>
        <th colspan="3">Opciones</th>
      </thead>
      <tbody>
        @foreach ($gestion_tipo as $value)
          <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td> 
            <td>{{ $value->creado }}</td>
            <td>{{ $value->actualizado }}</td>
            <td><a class="optionsu" href="/gestion-tipo/{{ $value->id }}/edit" title="Editar"><img src="img/edit.png"></a></td>
            <td>
              <button type="button" class="btn btn-data-info" data-cod="{{ $value->id }}" data-tipo="gestion-tipo"><img src="img/info.png"></button>
            </td>
            <td><a class="optionsu" href="/gt/delete" title="Eliminar"><p class="btndelete">X</p></a></td>
          </tr>
        @endforeach 
      </tbody>  
    </table>
  </div>

  @vite(['resources/js/carrera/carrera-index.js'])

@endsection