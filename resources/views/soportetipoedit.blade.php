{{--| admin |--}}

@extends('building')
@section('title', 'Editar soporte tipo')
@section('content')

  <!--|==========| Barra de navegacion | ↓ | inicio |==========|-->
  <div class="topnav" id="myTopnav">
    <a href="home" class="active">Inicio</a>
    <a href="notas">Notas</a>
    <a href="perfil">Perfil</a>
    <a href="#CerrarSesion" data-bs-toggle="modal" title="Salir">Salir</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div> <!--|==========| Barra de navegacion | ↑ | fin |==========|-->

  <!-- {{ $id=3 }} -->

  <div class="container">
    <!--|==========| Bienvenida | ↓ |==========|-->
    <h1 id="greeting">Editar Usuario</h1>
    
    <!--|==========| Formulario | ↓ | inicio |==========|-->
    <form action="{{url('/st/update/')}}" name="frmSoporteTipoEdit" method="post">
      @csrf
      <input type="hidden" class="form-control form-control-lg" name="ii" value="@php echo $ii; @endphp" autocomplete="off" required>
      <label class="lblformuser">Nombre de Soporte Tipo</label>
      <input type="text" class="form-control form-control-lg" name="txtEditNombreSoporteTipo" value="@php echo $name; @endphp" autocomplete="off" required>
      <div class="d-grid gap-2">
        <input type="submit" class="btn btn-primary btn-lg" name="btnActualizarSopoTipo" value="Actualizar">
      </div>
    </form>
  </div>

@endsection
