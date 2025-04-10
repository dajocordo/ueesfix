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
  
 
  <link rel="stylesheet" type="text/css" href="/css/estail.css"> 
</head>
<body>
  <!--|==========| Barra de navegacion | ↓ | inicio |==========|-->
  @include('tool.topnav')
<!--|==========| Barra de navegacion | ↑ | fin |==========|-->

  <!--|====| Container | ↓ | → | inicio |====|-->
<div class="container">
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