{{--| admin |--}}

@extends('building')
@section('title', 'soporte')
@section('content')

@include('tool.topnav')

  <div class="container">
    <!--|==========| Boton | ir a izquierda |==========|-->
    <div class="btn-left-pro"> 
      <a href="home" title="Inicio" class="aarrooww"><</a>
    </div>
    <!--|==========| Nuevo | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p>Soporte</p> </div>
    <!--|==========| Boton | ir a derecha |==========|-->
    <div class="btn-right-pro"> <a href="/soportenuevo" title="Nuevo" class="aarrooww">+</a> </div>
    <!--|==========| Nuevo | ↓ |==========|-->
    
    <table class="table table-bordered">
      <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Fecha</th>
        <th colspan="3">Opciones</th>
      </thead>
      <tbody>
        @foreach ($soport as $value)
        <tr>
          <td>{{ $value->id }}</td>
          <td>{{ $value->name }}</td>
          <td>{{ $value->correo }}</td>
          <td>{{ $value->fecha }}</td> 
          <td><a class="optionsu" href="/s/{{ $value->id }}/edit"><img src="img/edit.png"></a></td>
          <td><a class="optionsu" href="/s/{{ $value->id }}"><img src="img/info.png"></a></td> 
          <td><a class="optionsu" href="/s/delete"><p class="btndelete">X</p></a></td>
        </tr>
        @endforeach
      </tbody>  
    </table>
  </div>

@endsection