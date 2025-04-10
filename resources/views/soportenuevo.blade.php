<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>Nuevo Soporte</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
 
  <link rel="stylesheet" type="text/css" href="/css/estail.css"> 
</head>
<body>
  <!--|==========| Barra de navegacion | ↓ | inicio |==========|-->
  @include('tool.topnav')
<!--|==========| Barra de navegacion | ↑ | fin |==========|-->

  <!--|====| Container | ↓ | → | inicio |====|--><div class="container">
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
  <!--|==========| Container | fin | ← | ↑ |==========|--></div>

  <!--|========| New Modal - CerrarSesion |inicio| ↓ |========|-->
  <div class="modal fade" id="CerrarSesion" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Cerrar Sesion</h5>
          <a class="modal-btn-closee" data-bs-dismiss="modal" aria-label="Close">X</a>
        </div>
          <div class="modal-body"> ¿Desea salir de la plataforma? </div>
        <div class="modal-footer">
            <a class="modal-btn-cerrar" data-bs-dismiss="modal">No</a>
            <a href="logout" type="button" class="modal-btn-cerrar">Si</a>
        </div>
      </div>
    </div>
  </div><!--|======| New Modal - CerrarSesion |fin| ↑ |======|--> 
</body>
</html>