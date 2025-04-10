{{--| admin |--}}

@extends('building')

@section('title', 'Nuevo soporte')

@section('content')

  @include('tool.topnav')

  <!--|====| Container | ↓ | → | inicio |====|-->
  <div class="container">
    <!--|==========| Boton | Regresar |==========|-->
    <div class="btn-left-pro"> <a href="{{ url('/s') }}" title="Regresar" class="aarrooww"><</a> </div>
    <!--|==========| Rol | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p><img src="/img/add.png"> Soporte [ nuevo ]</p> </div>
    <!--|==========| Formulario | ↓ | inicio |==========|-->
    <form action="{{url('/s/create')}}" name="frmUsuarioCreate" method="post">
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
      </div><!--|==========| Div | Row I | ↑ |==========|--></div>

      <div class="row"><!--|==========| Div | Row III | ↓ |==========|-->
        <div class="col-6">
          <!--|==========| Select Tipo | ↓ | inicio |==========|-->
          <label class="lblformuser">Tipo</label>
          <select name="selTipoSoporte" class="form-control form-control-lg" aria-label="Default select example">
          @php foreach ($sopotypee as $selsoptipo) {
                 $tipoid = $selsoptipo->soportetipoid;
                $tiponame = $selsoptipo->soportetipo_name;
          @endphp
            <option value="@php echo $tipoid; @endphp">@php echo $tiponame; @endphp</option>
          @php } @endphp
          </select><!--|==========| Select Tipo | ↑ | fin |==========|--></div>
        <div class="col-6">
          <!--|==========| Select Rol | ↓ | inicio |==========|-->
          <label class="lblformuser">Rol</label>
          <select name="selRoles" class="form-control form-control-lg" aria-label="Default select example">
          @php  foreach ($rolee as $roless) {
                  $rolid = $roless->roles_id;
                  $rolname = $roless->roles_name;
          @endphp
            <option value="@php echo $rolid; @endphp">@php echo $rolname; @endphp</option>
          @php } @endphp
          </select><!--|==========| Select Tipo | ↑ | fin |==========|--></div>
      <!--|==========| Div | Row I | ↑ |==========|--></div>

      <div class="row"><!--|==========| Div | Row III | ↓ |==========|-->
      <div class="col-6">
      <label class="lblformuser">Telefono</label>
          <input type="number" class="form-control" name="txtTelefono" autocomplete="off" required>
      </div>  
      <div class="col-6">
          <input type="submit" class="btn-enviar-form" name="btnCrearSoporte" value="Enviar">
      </div><!--|==========| Div | Row III | ↑ |==========|--></div>

    </form><!--|==========| Formulario | ↑ | fin |==========|-->
  <!--|==========| Container | fin | ← | ↑ |==========|-->
  </div>

@endsection