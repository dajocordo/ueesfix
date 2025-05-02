{{--| admin |--}}

@extends('building')
@section('title', 'Gestion editar')
@section('content')

  @include('tool.topnav')

  <!--|====| Container | ↓ | → | inicio |====|-->
  <div class="container">
    <!--|==========| Boton | Regresar |==========|-->
    <div class="btn-left-pro"> <a href="{{ url('/gestion') }}" title="Regresar" class="aarrooww"><</a> </div>
    <!--|==========| Gestion | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p><img src="/img/edit.png"> Gestion [edit]</p> </div>    
    <!--|==========| Formulario | ↓ | inicio |==========|-->
    <form action="{{url('/gestion/update/')}}" method="post" name="frmEditGestion">
      @csrf
      <input type="hidden" class="form-control form-control-lg" name="id" value="{{ $gestion->id }}" autocomplete="off" required>
      <label class="lblformuser">Nombre</label>
      <input type="text" class="form-control form-control-lg" name="valor" value="{{ $gestion->valor }}" autocomplete="off" required>
      <div class="d-grid gap-2">
        <input type="submit" class="btn btn-primary btn-lg" name="btnActualizarR" value="Actualizar">
      </div>
    </form>
  </div>

@endsection