{{--| admin |--}}

@extends('building')
@section('title', 'Editar gestion tipo')
@section('content')

 @include('tool.topnav')

  <!--|====| Container | ↓ | → | inicio |====|-->
  <div class="container">
    <!--|==========| Boton | Regresar |==========|-->
    <div class="btn-left-pro"> <a href="{{ url('/gestion-tipo') }}" title="Regresar" class="aarrooww"><</a> </div>
    <!--|==========| Gestion | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p><img src="/img/edit.png"> Gestion tipo [ edit ]</p> </div> 
    <!--|==========| Formulario | ↓ | inicio |==========|-->
    <form action="{{ url('/gestion-tipo/update') }}" method="post">
      @csrf
      <input type="hidden" class="form-control form-control-lg" name="id" value="{{ $gestion_tipo->id }}" autocomplete="off" required>
      <label class="lblformuser">Nombre</label>
      <input type="text" class="form-control form-control-lg" name="valor" value="{{ $gestion_tipo->valor }}" autocomplete="off" required>
      <div class="d-grid gap-2">
        <input type="submit" class="btn btn-primary btn-lg" name="btnActualizarR" value="Actualizar">
      </div>
    </form>
  </div>

@endsection