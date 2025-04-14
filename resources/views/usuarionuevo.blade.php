{{--| admin |--}}

@extends('building')
@section('title', 'Usuario nuevo')
@section('content')

 @include('tool.topnav')

  <!--|====| Container | ↓ | → | inicio |====|-->
  <div class="container">
    <!--|==========| Boton | Regresar |==========|-->
    <div class="btn-left-pro"> <a href="{{ url('/u') }}" title="Regresar" class="aarrooww"><</a> </div>
    <!--|==========| Rol | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p><img src="/img/add.png"> Usuario [ nuevo ]</p> </div>
    <!--|==========| Formulario | ↓ | inicio |==========|-->
    <form action="{{url('/u/create')}}" name="frmUsuarioCreate" method="post">
      @csrf
      <div class="row"><!--|==========| Div | Row I | ↓ |==========|-->
        <div class="col-6">
          <label class="lblformuser">Nombre</label>
          <input type="text" class="form-control" name="txtNombre"  autocomplete="off" required>
        </div>
        <div class="col-6">
          <label class="lblformuser">Apellido</label>
          <input type="text" class="form-control" name="txtApellido" autocomplete="off" required>
      </div><!--|==========| Div | Row I | ↑ |==========|--></div>

      <div class="row"><!--|==========| Div | Row II | ↓ |==========|-->
        <div class="col-6">
          <label class="lblformuser">Correo</label>
          <input type="email" class="form-control form-control-lg" name="txtCorreo" autocomplete="off" required>
        </div>
        <div class="col-6">
          <label class="lblformuser">Contraseña</label>
          <input type="password" class="form-control form-control-lg" name="txtPassword" autocomplete="off" required>
      </div><!--|==========| Div | Row II | ↑ |==========|--></div>

      <div class="row">
        <div class="col-6">
          <label class="lblformuser">Telefono</label>
          <input type="number" class="form-control form-control-lg" name="txtTelefono" autocomplete="off" required>
        </div>
        <div class="col-6">
          <label class="lblformuser">Tipo</label>
          <select name="selTipoUsuario" class="form-control form-control-lg" aria-label="Default select example">
            @foreach ($roles as $rol)
            <option value="{{ $rol->id }}">{{ $rol->name }}</option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="row">
        <div class="col-6">
          <label class="lblformuser">Facultad</label>
          <select name="selFacultad" class="form-control form-control-lg" aria-label="Default select example">
            @foreach ($facultad as $fa)
            <option value="{{ $fa->id }}">{{ $fa->name }}</option>
            @endforeach
          </select>
        </div>
      
        <div class="col-6">
          <label class="lblformuser">Carrera</label>
          <select name="selCarrera" class="form-control form-control-lg" aria-label="Default select example">
            @foreach ($carrera as $ca)
            <option value="{{ $ca->id }}">{{ $ca->name }}</option>
            @endforeach
          </select>
        </div>
      </div>
      <input type="submit" class="btn-enviar-form" name="btnCrearUsuario" value="Enviar">

    </form><!--|==========| Formulario | ↑ | fin |==========|-->
  <!--|==========| Container | fin | ← | ↑ |==========|-->
  </div>

@endsection