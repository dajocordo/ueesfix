@php
  session_start();
  if(isset($_SESSION['admin'])){
    echo '<script> window.location="home"; </script>';
  } else {
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
 
  <link rel="stylesheet" type="text/css" href="/css/usuariostyle.css"> 
</head>
<body>
  <!--|==========| Container | ↓ | inicio |==========|-->
  <div class="container">
    <!--|==========| Boton | Regresar |==========|-->
    <div class="btn-left-pro"> <a href="{{ url('/index') }}" title="Regresar" class="aarrooww"><img src="/img/back.png"></a> </div>
    <!--|==========| Perfil | ↓ |==========|-->
    <div class="middle-pro"><p>UEES FIX<p></div>

    <!--|==========| Formulario | ↓ | inicio |==========|-->
    <form action="{{ url('/loginuii') }}" name="step-ii-login" method="post">
      @csrf
        <label class="lbl1">1.  Ingrese su correo</label>
      <div class="form-group">
        <input type="email" class="farm-cantral" name="email" autocomplete="off" required>
      </div>
      <label class="lbl1">2.  Ingrese su contraseña</label>
      <div class="form-group">
        <input type="password" class="farm-cantral" name="password" autocomplete="off" required>
      </div>
      <input type="submit"  class="btn-entrur"  name="btnLoginStepIUsuario" value="Siguiente">
    </form><!--|==========| Formulario | ↑ | fin |==========|-->

  <!--|==========| Container | fin | ← | ↑ |==========|-->
</div>    
</body>
</html>
@php } @endphp