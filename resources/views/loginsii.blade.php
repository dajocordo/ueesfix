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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script type="text/javascript" src="/js/barra.js"></script>
  <link rel="stylesheet" type="text/css" href="/css/estail.css"> 
</head>
<body>
  <!--|==========| Container | ↓ | inicio |==========|-->
  <div class="container">
    <!--|==========| Boton | Regresar |==========|-->
    <div class="btn-left-pro"> <a href="{{ url('/loginsi') }}" title="Regresar" class="aarrooww"><img src="img/back.png"></a> </div>
    <!--|==========| Perfil | ↓ |==========|-->
    <div class="middle-pro"><p>UEES FIX<p></div>

    <!--|==========| Formulario | ↓ | inicio |==========|-->
    <form action="{{ url('/logins') }}" name="step-sii-login" method="post">
      @csrf
      <input type="hidden" class="form-control form-control-lg" name="iii" value="@php echo $id; @endphp" autocomplete="off" required>
        <label class="lbl1">2.  Ingrese su contraseña</label>
      <div class="form-group">
        <input type="password" class="farm-cantral" name="txtContra" autocomplete="off" required>
      </div>
      <input type="submit"  class="btn-entrur"  name="btnLoginStepIISoporte" value="Ingresar">
    </form><!--|==========| Formulario | ↑ | fin |==========|-->

  <!--|==========| Container | fin | ← | ↑ |==========|--></div>    
</body>
</html>
@php } @endphp