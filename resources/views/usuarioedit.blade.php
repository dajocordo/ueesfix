{{--| admin |--}}

@extends('building')
@section('title', 'Editar usuario')
@section('content')

  @include('tool.topnav')

  <div class="container">
    <!--|==========| Boton | Regresar |==========|-->
    <div class="btn-left-pro"> <a href="{{ url('/u') }}" title="Regresar" class="aarrooww"><</a> </div>
    <!--|==========| Roles | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p><img src="/img/edit.png"> Editar Usuario</p> </div>
    
    <form action="{{url('/u/update/')}}" method="post">
      @csrf
      <input type="hidden" class="form-control form-control-lg" name="ii" value="{{ $user['id'] }}" autocomplete="off" required>
      <label class="lblformuser">Nombre</label>
      <input type="text" class="form-control form-control-lg" name="txtEditNombre" value="{{ $user['name'] }}" autocomplete="off" required>
      {{-- <label class="lblformuser">Apellido</label>
      <input type="text" class="form-control form-control-lg" name="txtEditApellido" value="{{ $user['apellido'] }}" autocomplete="off" required> --}}
      <label class="lblformuser">Correo</label>
      <input type="mail" class="form-control form-control-lg" name="txtEditCorreo" value="{{ $user['correo'] }}" autocomplete="off" required>
      <div class="d-grid gap-2">
        <input type="submit" class="btn btn-primary btn-lg" name="btnActualizarU" value="Actualizar">
      </div>
    </form>
  </div>

@endsection