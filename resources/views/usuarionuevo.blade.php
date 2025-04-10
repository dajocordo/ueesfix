<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>Nuevo Usuario</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script type="text/javascript" src="/js/barra.js"></script>
  <link rel="stylesheet" type="text/css" href="/css/estail.css"> 
</head>
<body>
 @include('tool.topnav')

  <!--|====| Container | ↓ | → | inicio |====|--><div class="container">
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