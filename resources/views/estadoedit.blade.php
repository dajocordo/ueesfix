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

      <!--|==========| Formulario | ↓ | inicio |==========|-->
      <form action="{{ url('/e/update/') }}" method="post">
        @csrf
        <input type="hidden" class="form-control form-control-lg" name="ii" value="@php echo $ii; @endphp" autocomplete="off" required>
        <label class="lblformuser">Nombre</label>
        <input type="text" class="form-control form-control-lg" name="txtEditEstado" value="@php echo $name; @endphp" autocomplete="off" required>
        <div class="d-grid gap-2">
          <input type="submit" class="btn btn-primary btn-lg" name="btnActualizarR" value="Actualizar">
        </div>
      </form><!--|==========| Formulario | ↑ | fin |==========|-->
    <!--|==========| Container | fin | ← | ↑ |==========|-->
  </div>

@endsection