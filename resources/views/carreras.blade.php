{{--| admin |--}}

@extends('building')
@section('title', 'Carreras')
@section('content')

  @include('tool.topnav')

  <div class="container">
    <!--|==========| Boton | ir a izquierda |==========|-->
    <div class="btn-left-pro"> 
      <a href="home" title="Inicio" class="aarrooww"><</a>
    </div>
    <!--|==========| Nuevo | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p>Carreras</p> </div>
    <!--|==========| Boton | ir a derecha |==========|-->
    <div class="btn-right-pro">
      <a href="/carreranueva" title="Nuevo" class="aarrooww">+</a>
    </div>
    
    <table class="table table-bordered">
      <thead>
        <th>ID</th>
        <th>Carrera</th>
        <th>Facultad</th>
        <th colspan="3">Opciones</th>
      </thead>
      <tbody>
        <tr>
          @foreach ($carrera as $value)
          <td>{{ $value->id }}</td>
          <td>{{ $value->name }}</td>
          <td>{{ $value->origen }}</td>
          <td><a class="optionsu" href="/c/{{ $value->id }}/edit"><img src="img/edit.png"></a></td>
          <td><a class="optionsu" href="/c/{{ $value->id }}"><img src="img/info.png"></a></td> 
          <td><a class="optionsu" href="/c/delete"><p class="btndelete">X</p></a></td>
          @endforeach
        </tr>
      </tbody>  
    </table>
  </div>

@endsection