@php
  session_start();
  if(isset($_SESSION['admin'])){
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>Home</title>
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
    <a href="perfil">Perfil</a>
    <a href="#CerrarSesion" data-bs-toggle="modal" title="Salir">Salir</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div> <!--|==========| Barra de navegacion | ↑ | fin |==========|-->

  <!--|====| Container | ↓ | → | inicio |====|--><div class="container">
    <!--|==========| Bienvenida | ↓ |==========|-->
    <h3 id="greeting">Administrador</h3>
    
    <div class="row"><!--|==========| Div | Row I | ↓ |==========|-->
      <div class="col"> <p class="ppro"> <a href="{{ url('/c') }}" class="a1">Carrera</a> </p> </div>
      <div class="col"> <p class="ppro"> <a href="{{ url('/ch') }}" class="a2">Chatbots</a> </p> </div>
      <div class="col"> <p class="ppro"> <a href="{{ url('/e') }}" class="a2">Estado</a> </p> </div>
    <!--|==========| Div | Row I | ↑ |==========|--></div>

    <div class="row"><!--|==========| Div | Row II | ↓ |==========|-->
      <div class="col"> <p class="ppro"> <a href="{{ url('/f') }}" class="a2">Facultad</a> </p> </div>
      <div class="col"> <p class="ppro"> <a href="{{ url('/g') }}" class="a1">Gestión</a> </p> </div>
      <div class="col"> <p class="ppro"> <a href="{{ url('/gt') }}" class="a2">Gestión Tipo</a> </p> </div>
    <!--|==========| Div | Row II | ↑ |==========|--></div>

    <div class="row"><!--|==========| Div | Row II | ↓ |==========|-->
      <div class="col"> <p class="ppro"> <a href="{{ url('/h') }}" class="a2">Historial</a> </p> </div>
      <div class="col"> <p class="ppro"> <a href="{{ url('/n') }}" class="a2">Notas</a> </p> </div>
      <div class="col"> <p class="ppro"> <a href="{{ url('/p') }}" class="a1">Prioridad</a> </p> </div>
    <!--|==========| Div | Row II | ↑ |==========|--></div>

    <div class="row"><!--|==========| Div | Row III | ↓ |==========|-->
      <div class="col"> <p class="ppro"> <a href="{{ url('/r') }}" class="a2">Roles</a> </p> </div>
      <div class="col"> <p class="ppro"> <a href="{{ url('/s') }}" class="a1">Soporte</a> </p> </div>
      <div class="col"> <p class="ppro"> <a href="{{ url('/st') }}" class="a2">Soporte Tipo</a> </p> </div>
      
    <!--|==========| Div | Row III | ↑ |==========|--></div>

    <div class="row"><!--|==========| Div | Row IV | ↓ |==========|-->
      <div class="col"> <p class="ppro"> <a href="{{ url('/t') }}" class="a1">Ticket</a> </p> </div>
      <div class="col"> <p class="ppro"> <a href="{{ url('/u') }}" class="a1">Usuario</a> </p> </div>
      <div class="col"> <p class="ppro"> <a href="{{ url('/ut') }}" class="a2">Usuario Tipo</a> </p> </div>
    <!--|==========| Div | Row IV | ↑ |==========|--></div>

  <!--|==========| Container | fin | ← | ↑ |==========|--></div>

<!--|========| New Modal - CerrarSesion | ↓ |========|-->
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
            <a href="{{ url('/logout') }}" type="button" class="modal-btn-cerrar">Si</a>
        </div>
      </div>
    </div>
  </div><!--|======| New Modal - CerrarSesion | ↑ |======|--> 
</body>
</html>
@php  } else{
      echo "<script>
            alert('Debes iniciar sesión primero');
            window.location.href='/index';
          </script>";
}  @endphp