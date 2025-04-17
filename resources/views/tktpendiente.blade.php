{{--| admin |--}}

@extends('building')
@section('title', 'Ticket pendiente')
@section('content')

  @include('tool.topnav')

  <div class="container">
    <!--|==========| Boton | ir a izquierda |==========|-->
    <div class="btn-left-pro"> <a href="{{ url('/home') }}" title="Inicio" class="aarrooww"><</a> </div>
    <!--|==========| Tickets | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p>Pendiente</p> </div>
    <!--|==========| Boton | ir a derecha |==========|-->
    <div class="btn-right-pro"> <a href="{{ url('/ticketnuevo') }}" title="Nuevo" class="aarrooww">></a></div>

    <table class="table table-bordered">
      <thead>
        <th>Ticket</th>
        <th>Estado</th>
        <th>Titulo</th>
        <th>Modificado</th>
        <th colspan="3">Opciones</th>
      </thead>
      <tbody>
        @foreach ($tickets as $value)
          <tr>
            <td>{{ $value->id }}</td>
            <td class="table-primary">{{ $value->estado }}</td>
            <td>{{ $value->titulo }}</td> 
            <td>{{ $value->fecha }}</td>
            <td><a class="optionsu" href="/t/{{ $id }}/edit"><img src="img/edit.png"></a></td>
            <td><a class="optionsu" href="/t/{{ $id }}"><img src="img/info.png"></a></td> 
            <td><a class="optionsu" href="/t/delete"><p class="btndelete">X</p></a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection