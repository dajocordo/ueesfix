@php
  session_start();
  if(isset($_SESSION['admin'])){
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>Nuevo Chatbot</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
 
  <link rel="stylesheet" type="text/css" href="/css/estail.css"> 
</head>
<body>
  <!--|==========| Barra de navegacion | ↓ | inicio |==========|-->
  @include('tool.topnav')
<!--|==========| Barra de navegacion | ↑ | fin |==========|-->

  <!--|====| Container | ↓ | → | inicio |====|-->
<div class="container">
    <!--|==========| Bienvenida | ↓ |==========|-->
    <h1 id="greeting">Nuevo Chatbot</h1>
    <!--|==========| Formulario | ↓ | inicio |==========|-->
    <form action="{{url('/ch/create')}}" name="frmUsuarioCreate" method="post">
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
  <!--|==========| Container | fin | ← | ↑ |==========|-->
</div>

</body>
</html>
@php  } else{
      echo "<script>
            alert('Debes iniciar sesión primero');
            window.location.href='/index';
          </script>";
}  @endphp
