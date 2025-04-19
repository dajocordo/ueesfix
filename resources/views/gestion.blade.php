{{--| admin |--}}

@extends('building')
@section('title', 'Gestion')
@section('content')

  @include('tool.topnav')

  <div class="container">
    <!--|==========| Boton | ir a izquierda |==========|-->
    <div class="btn-left-pro"> 
      <a href="home" title="Inicio" class="aarrooww"><</a>
    </div>
    <!--|==========| Gestion | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p>Gestion</p> </div>
    <!--|==========| Boton | ir a derecha |==========|-->
    <div class="btn-right-pro"> 
      <a href="/gtn" title="Nuevo" class="aarrooww">+</a>
    </div>
    <table class="table table-bordered">
      <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Modificado</th>
        <th colspan="3">Opciones</th>
      </thead>
      <tbody>
        @foreach ($gestion as $value)
          <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td> 
            <td>{{ $value->fecha }}</td>
            <td><a class="optionsu" href="/g/{{ $value->id }}/edit" title="Editar"><img src="img/edit.png"></a></td>
            <td><a class="optionsu" href="/g/{{ $value->id }}" title="Ver"><img src="img/info.png"></a></td> 
            <td><a class="optionsu" href="/g/delete" title="Eliminar"><p class="btndelete">X</p></a></td>
          </tr>
        @endforeach
      </tbody>  
    </table>
  </div>

@endsection