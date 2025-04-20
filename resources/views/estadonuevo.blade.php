{{--| admin |--}}

@extends('building')
@section('title', 'Estado nuevo')
@section('content')

  @include('tool.topnav')
 
  <div class="container">
    <!--|==========| Boton | Regresar |==========|-->
    <div class="btn-left-pro"> <a href="{{ url('/e') }}" title="Regresar" class="aarrooww"><</a> </div>
    <!--|==========| Estado | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p><img src="/img/add.png"> Estado [nuevo]</p> </div>
    <form action="{{ url('/e/create') }}" method="post">
      @csrf
      <label class="lblformuser">Nombre</label>
      <input type="text" class="form-control form-control-lg" name="valor" autocomplete="off" required>
      <div class="d-grid gap-2">
        <input type="submit" class="btn btn-primary btn-lg" name="btnEnviarEstado" value="Crear">
      </div>
    </form>
  </div>

@endsection