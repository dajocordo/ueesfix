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
  
 
  <link rel="stylesheet" type="text/css" href="/css/soportestyle.css"> 
</head>
<body>
  <!--|==========| Container | ↓ | inicio |==========|-->
  <div class="container">
    <!--|==========| Boton | Regresar |==========|-->
    <div class="btn-left-pro"> <a href="{{ url('/loginsi') }}" title="Regresar" class="aarrooww"><img src="/img/back.png"></a> </div>
    <!--|==========| Perfil | ↓ |==========|-->
    <div class="middle-pro"><p>UEES FIX<p></div>

    <!--|==========| Formulario | ↓ | inicio |==========|-->
    <form action="{{ url('/logins') }}" name="step-sii-login" method="post">
      @csrf
      <input type="hidden" class="form-control form-control-lg" name="sopcif" value="@php echo $id; @endphp" autocomplete="off" required>
        <label class="lbl1">2.  Ingrese su contraseña</label>
      <div class="form-group">
        <input type="password" class="farm-cantral" name="txtContra" autocomplete="off" required>
      </div>
      <input type="submit"  class="btn-entrur"  name="btnLoginStepIISoporte" value="Ingresar">
    </form><!--|==========| Formulario | ↑ | fin |==========|-->

  <!--|==========| Container | fin | ← | ↑ |==========|-->
</div>    
</body>
</html>
@php } @endphp