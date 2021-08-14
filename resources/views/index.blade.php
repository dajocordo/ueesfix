@php
  session_start();
  if(isset($_SESSION['admin'])){
    echo '<script> window.location="/home"; </script>';
  } else if(isset($_SESSION['support'])){
      echo '<script> window.location="/dashboard"; </script>';
    } else if(isset($_SESSION['student'])){
        echo '<script> window.location="/inicio"; </script>';
      } else {
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>UEESFIX</title>
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
    <!--|==========| Perfil | ↓ |==========|-->
    <div class="middle-pro"><p><img src="/img/logo.png">  UEES FIX<p></div>

    <div class="row"><!--|==========| Div | Row I | ↓ |==========|-->
      <div class="colin"> <p class="ppro"> <a href="{{ url('/loginui') }}" class="a1">Estudiante / Empleado</a> </p> </div>
    <!--|==========| Div | Row I | ↑ |==========|--></div>

    <div class="row"><!--|==========| Div | Row II | ↓ |==========|-->
      <div class="colin"> <p class="ppro"> <a href="{{ url('/loginsi') }}" class="a2">Soporte</a> </p> </div>
    <!--|==========| Div | Row II | ↑ |==========|--></div>

    <div class="row"><!--|==========| Div | Row II | ↓ |==========|-->
      <div class="colin"> <p class="ppro"> <a href="{{ url('/loginai') }}" class="a3">Administrador</a> </p> </div>
    <!--|==========| Div | Row II | ↑ |==========|--></div>

  <!--|==========| Container | fin | ← | ↑ |==========|--></div>    
</body>
</html>
@php } @endphp