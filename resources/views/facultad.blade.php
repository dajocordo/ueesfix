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
        @foreach ($facultad as $fa)
        <tr>
          <td>{{ $fa->num; }}</td>
          <td>{{ $fa->name; }}</td>
          <td>{{ $fa->fecha; }}</td>
          <td><a class="optionsu" href="/f/{{ $fa->id; }}/edit"><img src="img/edit.png"></a></td>
          <td><a class="optionsu" href="/f/{{ $fa->id; }}"><img src="img/info.png"></a></td> 
          <td><a class="optionsu" href="/f/delete"><p class="btndelete">X</p></a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>


@endsection