{{--| admin |--}}

@extends('building')

@section('title', 'Editar rol')

@section('content')

  @include('tool.topnav')

  <!--|====| Container | ↓ | → | inicio |====|-->
  <div class="container">
      <!--|==========| Bienvenida | ↓ |==========|-->
      <h1 id="greeting">Editar Rol</h1>
      
      <!--|==========| Formulario | ↓ | inicio |==========|-->
      <form action="{{ url('/r/update/') }}" method="post">
        @csrf
        <input type="hidden" class="form-control form-control-lg" name="ii" value="@php echo $ii; @endphp" autocomplete="off" required>
        <label class="lblformuser">Nombre</label>
        <input type="text" class="form-control form-control-lg" name="txtEditNombre" value="@php echo $name; @endphp" autocomplete="off" required>
        <div class="d-grid gap-2">
          <input type="submit" class="btn btn-primary btn-lg" name="btnActualizarR" value="Actualizar">
        </div>
      </form><!--|==========| Formulario | ↑ | fin |==========|-->
    <!--|==========| Container | fin | ← | ↑ |==========|-->
  </div>

@endsection