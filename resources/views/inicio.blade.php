@php
  session_start();
  if(isset($_SESSION['student'])){
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>Usuario</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
 
  <link rel="stylesheet" type="text/css" href="/css/usuariostyle.css">
</head>
<body>
  <!--|==========| Barra de navegacion | ↓ | inicio |==========|-->
  <div class="topnav" id="myTopnav">
    <a href="{{ url('/inicio') }}" class="active">Inicio</a>
    <a href="#CerrarSesion" data-bs-toggle="modal" title="Salir">Salir</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
  <!--|==========| Barra de navegacion | ↑ | fin |==========|-->

  <!--|====| Container | ↓ | → | inicio |====|-->
<div class="container">
    @php  $usuarioo = DB::SELECT('SELECT * FROM usuario WHERE usuariocif = ?',[$_SESSION['student']]); 
            foreach ($usuarioo as $usser) {
              $cif = $usser->usuariocif;
              $name = $usser->usuario_name;
    @endphp
    <!--|==========| Bienvenido | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p>Bienvenido <img src="/img/user.png"> @php echo $name; @endphp</p> </div>@php } @endphp

    <div class="row"><!--|==========| Div | Row I | ↓ |==========|-->
    <div class="col"> <p class="ppro"> <a href="{{ url('/ticketn') }}" class="a1">Crear Ticket</a> </p> </div>
    <div class="col"> <p class="ppro"> <a href="{{ url('/ticketnv') }}" class="a2">Mis Tickets</a> </p> </div>
    <!--|==========| Div | Row I | ↑ |==========|--></div>

  </div><!--|==========| Container | fin | ↑ |==========|-->

  <!--|====| Container | ↓ | → | inicio |====|-->
<div class="container">
    <!--|==========| Bienvenido | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p>Mi Cuenta <img src="/img/ajustes.png"></p> </div>

    <div class="row"><!--|==========| Div | Row II | ↓ |==========|-->
    <div class="col"> <p class="ppro"> <a href="{{ url('/up') }}" class="a1">Ver Cuenta</a> </p> </div>
    <div class="col"> <p class="ppro"> <a href="{{ url('/psw') }}" class="a2">Editar Cuenta</a> </p> </div>
    <!--|==========| Div | Row II | ↑ |==========|--></div>

  </div><!--|==========| Container | fin | ↑ |==========|-->
  

  </div>
</body>
</html>
@php  } else{
      echo "<script>
            alert('Debes iniciar sesión primero');
            window.location.href='/index';
          </script>";
}  @endphp