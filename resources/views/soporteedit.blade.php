{{--| admin |--}}

@extends('building')
@section('title', 'Editar soporte')
@section('content')

  @include('tool.topnav')
  <div class="container">
    <h1 id="greeting">Editar Soporte</h1>  
    <form action="{{url('/s/update/')}}" method="post">
      @csrf
      <input type="hidden" class="form-control form-control-lg" name="ii" value="{{ $user['id'] }}" autocomplete="off" required>
      <label class="lblformuser">Nombre</label>
      <input type="text" class="form-control form-control-lg" name="txtEditNombre" value="{{ $user['name'] }}" autocomplete="off" required>
      <label class="lblformuser">Correo</label>
      <input type="email" class="form-control form-control-lg" name="txtEditCorreo" value="{{ $user['correo'] }}" autocomplete="off" required>
      {{-- <label class="lblformuser">Telefono</label>
      <input type="number" class="form-control form-control-lg" name="txtEditTelefono" value="{{ $user['telefono'] }}" autocomplete="off" required>      --}}
      <div class="d-grid gap-2">
        <input type="submit" class="btn btn-primary btn-lg" name="btnActualizarSoporte" value="Actualizar">
      </div>
    </form>
  </div>

@endsection