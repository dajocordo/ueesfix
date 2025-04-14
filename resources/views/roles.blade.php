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
    
    <!--|==========| Tabla Roles | ↓ | inicio |==========|-->
    <table class="table table-bordered">
      <thead>
        <th>ID</th>
        <th>Rol</th>
        <th>Modificado</th>
        <th colspan="3">Opciones</th>
      </thead>
      <tbody>
        @foreach ($roles as $rol)
        <tr>
            <td>{{ $rol->id; }}</td>
            <td>{{ $rol->name; }}</td> 
            <td>{{ $rol->fecha; }}</td>
            <td><a class="optionsu" href="/r/{{ $rol->id; }}/edit"><img src="img/edit.png"></a></td>
            <td><a class="optionsu" href="/r/{{ $rol->name; }}"><img src="img/info.png"></a></td> 
            <td><a class="optionsu" href="/r/delete"><p class="btndelete">X</p></a></td>
        </tr>
        @endforeach  
      </tbody>  
    </table>
  </div>

@endsection