{{--| admin |--}}

@extends('building')
@section('title', 'usuarios')
@section('content')

  @include('tool.topnav')

  <div class="container">
    <!--|==========| Boton | ir a izquierda |==========|-->
    <div class="btn-left-pro"> 
      <a href="home" title="Inicio" class="aarrooww"><</a>
    </div>
    <!--|==========| Nuevo | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p>Usuarios</p> </div>
    <!--|==========| Boton | ir a derecha |==========|-->
    <div class="btn-right-pro"> <a href="{{ url('/usuarionuevo' )}}" title="Nuevo" class="aarrooww">+</a> </div>
    
    <table class="table table-bordered">
      <thead>
        <th>CIF</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Fecha</th>
        <th colspan="3">Opciones</th>
      </thead>
      <tbody>
        @foreach($users as $value)
        <tr>
          <td>{{ $value->id }}</td>
          <td>{{ $value->name }}</td>
          <td>{{ $value->correo }}</td>
          <td>{{ $value->fecha }}</td> 
          <td><a class="optionsu" href="/u/{{ $value->id }}/edit"><img src="img/edit.png"></a></td>
          <td><a class="optionsu" href="/u/{{ $value->id }}"><img src="img/info.png"></a></td> 
          <td><a class="optionsu" href="/u/delete"><p class="btndelete">X</p></a></td>
        </tr>
        @endforeach
      </tbody> 
    </table>
  </div>

@endsection