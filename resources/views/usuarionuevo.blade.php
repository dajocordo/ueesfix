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

      <div class="row"><!--|==========| Div | Row III | ↓ |==========|-->
        <div class="col-6">
          <label class="lblformuser">Telefono</label>
          <input type="number" class="form-control form-control-lg" name="txtTelefono" autocomplete="off" required>
        </div>
        <div class="col-6">
          <!--|==========| Select Tipo | ↓ | inicio |==========|-->
          <label class="lblformuser">Tipo</label>
          <select name="selTipoUsuario" class="form-control form-control-lg" aria-label="Default select example">
          @php foreach ($usertypee as $selsoptipo) {
                 $tipoid = $selsoptipo->usuariotipoid;
                $tiponame = $selsoptipo->usuariotipo_name;
          @endphp
            <option value="@php echo $tipoid; @endphp">@php echo $tiponame; @endphp</option>
          @php } @endphp
          </select><!--|==========| Select Tipo | ↑ | fin |==========|-->
      </div><!--|==========| Div | Row II | ↑ |==========|--></div>

      <div class="row"><!--|==========| Div | Row IV | ↓ |==========|-->
        <div class="col-6">
          <!--|==========| Select Facultad | ↓ | inicio |==========|-->
          <label class="lblformuser">Facultad</label>
          <select name="selFacultad" class="form-control form-control-lg" aria-label="Default select example">
          @php  foreach ($facultaad as $facul) {
                  $facuid = $facul->facultadid;
                  $facuname = $facul->facultad_name;
          @endphp
            <option value="@php echo $facuid; @endphp">@php echo $facuname; @endphp</option>
          @php } @endphp
          </select><!--|==========| Select Tipo | ↑ | fin |==========|--></div>
      
        <div class="col-6">
          <!--|==========| Select Carrera | ↓ | inicio |==========|-->
          <label class="lblformuser">Carrera</label>
          <select name="selCarrera" class="form-control form-control-lg" aria-label="Default select example">
          @php foreach ($carreraa as $carrer) {
                $carreid = $carrer->carreraid;
                $carrename = $carrer->carrera_name;
          @endphp
            <option value="@php echo $carreid; @endphp">@php echo $carrename; @endphp</option>
          @php } @endphp
          </select><!--|==========| Select Tipo | ↑ | fin |==========|--></div>
        <!--|==========| Div | Row IV | ↑ |==========|--></div>
          <input type="submit" class="btn-enviar-form" name="btnCrearUsuario" value="Enviar">

    </form><!--|==========| Formulario | ↑ | fin |==========|-->
  <!--|==========| Container | fin | ← | ↑ |==========|-->
  </div>

@endsection