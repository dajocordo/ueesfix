{{--| admin |--}}

@extends('building')

@section('title', 'Usuario tipo (editar)')

@section('content')

  <!--|==========| Barra de navegacion | ↓ | inicio |==========|-->
  <div class="topnav" id="myTopnav">
    <a href="home" >Inicio</a>
    <a href="perfil">Perfil</a>
    <a href="#CerrarSesion" data-bs-toggle="modal" title="Salir">Salir</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div> <!--|==========| Barra de navegacion | ↑ | fin |==========|-->

  <!--|====| Container | ↓ | → | inicio |====|-->
  <div class="container">
      <!--|==========| Boton | Regresar |==========|-->
      <div class="btn-left-pro"> <a href="{{ url('/ut') }}" title="Regresar" class="aarrooww"><</a> </div>
      <!--|==========| Usuario Tipo | ↓ | titulo |==========|-->
      <div class="middle-pro"> <p><img src="/img/edit.png"> Usuario tipo [ edit ]</p> </div> 

      <!--|==========| Formulario | ↓ | inicio |==========|-->
      <form action="{{url('/ut/update/')}}" method="post" name="frmEditUsuarioTipo">
        @csrf
        <input type="hidden" class="form-control form-control-lg" name="ii" value="@php echo $ii; @endphp" autocomplete="off" required>
        <label class="lblformuser">Nombre</label>
        <input type="text" class="form-control form-control-lg" name="txtEditNombre" value="@php echo $name; @endphp" autocomplete="off" required>
        <div class="d-grid gap-2">
          <input type="submit" class="btn btn-primary btn-lg" name="btnActualizar" value="Actualizar">
        </div>
      </form><!--|==========| Formulario | ↑ | fin |==========|-->
    <!--|==========| Container | fin | ← | ↑ |==========|-->
  </div>

@endsection