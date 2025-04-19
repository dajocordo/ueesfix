{{--| admin |--}}

@extends('building')
@section('title', 'Estado editar')
@section('content')

  @include('tool.topnav')

  <!--|====| Container | ↓ | → | inicio |====|-->
  <div class="container">
    <!--|==========| Boton | Regresar |==========|-->
    <div class="btn-left-pro"> <a href="{{ url('/e') }}" title="Regresar" class="aarrooww"><</a> </div>
    <!--|==========| Estado | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p><img src="/img/edit.png"> Estado [edit]</p> </div>

    <form action="{{ url('/e/update/') }}" method="post">
      @csrf
      <input type="hidden" class="form-control form-control-lg" name="id" value="{{ $estado->id }}" autocomplete="off" required>
      <label class="lblformuser">Nombre</label>
      <input type="text" class="form-control form-control-lg" name="valor" value="{{ $estado->valor }}" autocomplete="off" required>
      <div class="d-grid gap-2">
        <input type="submit" class="btn btn-primary btn-lg" name="btnActualizarR" value="Actualizar">
      </div>
    </form>
  </div>

@endsection