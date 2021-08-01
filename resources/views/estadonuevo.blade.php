<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>Nuevo Estado</title>
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

  <!--|====| Container | ↓ | → | inicio |====|--><div class="container">
    <!--|==========| Bienvenida | ↓ |==========|-->
    <h1 id="greeting">Nuevo Estado</h1>
    <!--|==========| Formulario | ↓ | inicio |==========|-->
    <form action="{{url('/e/create')}}" name="frmUsuarioCreate" method="post">
      @csrf
      <label class="lblformuser">Nombre</label>
      <input type="text" class="form-control form-control-lg" name="txtNombre" autocomplete="off" required>
      <label class="lblformuser">Apellido</label>
      <input type="text" class="form-control form-control-lg" name="txtApellido" autocomplete="off" required>
      <label class="lblformuser">Correo</label>
      <input type="mail" class="form-control form-control-lg" name="txtCorreo" autocomplete="off" required>
      <label class="lblformuser">Contraseña</label>
      <input type="password" class="form-control form-control-lg" name="txtPassword" autocomplete="off" required>
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
      
      <!--|==========| Select Facultad | ↓ | inicio |==========|-->
      <label class="lblformuser">Facultad</label>
      <select name="selFacultad" class="form-control form-control-lg" aria-label="Default select example">
      @php  foreach ($facultaad as $facul) {
              $facuid = $facul->facultadid;
              $facuname = $facul->facultad_name;
      @endphp
        <option value="@php echo $facuid; @endphp">@php echo $facuname; @endphp</option>
      @php } @endphp
      </select><!--|==========| Select Tipo | ↑ | fin |==========|-->
      
      <!--|==========| Select Carrera | ↓ | inicio |==========|-->
      <label class="lblformuser">Carrera</label>
      <select name="selCarrera" class="form-control form-control-lg" aria-label="Default select example">
      @php foreach ($carreraa as $carrer) {
            $carreid = $carrer->carreraid;
            $carrename = $carrer->carrera_name;
      @endphp
        <option value="@php echo $carreid; @endphp">@php echo $carrename; @endphp</option>
      @php } @endphp
      </select><!--|==========| Select Tipo | ↑ | fin |==========|-->
      <div class="d-grid gap-2">
        <input type="submit" class="btn btn-primary btn-lg" name="btnCrearUsuario" value="Enviar">
      </div>
    </form><!--|==========| Formulario | ↑ | fin |==========|-->
  <!--|==========| Container | fin | ← | ↑ |==========|--></div>

  <!--|========| Modal - CerrarSesion |inicio| ↓ |========|-->
  <div class="modal fade" id="CerrarSesion" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Cerrar Sesion</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
          <div class="modal-body"> ¿Desea salir de la plataforma? </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
          <a href="welcome" type="button" class="btn btn-primary">Si</a>
        </div>
      </div>
    </div>
  </div><!--|======| Modal - CerrarSesion |fin| ↑ |======|--> 
</body>
</html>
