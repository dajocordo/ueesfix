@php
  session_start();
  if(isset($_SESSION['student'])){
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>Gestion Tipo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script type="text/javascript" src="/js/barra.js"></script>
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

  <!--|====| Container | ↓ | → | inicio |====|--><div class="container">
    @php  $usuarioo = DB::SELECT('SELECT * FROM usuario WHERE usuariocif = ?',[$_SESSION['student']]); 
            foreach ($usuarioo as $usser) {
              $cif = $usser->usuariocif;
              $name = $usser->usuario_name;
    @endphp
    <!--|==========| Bienvenido | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p>Bienvenido @php echo $name; @endphp</p> </div>@php } @endphp

    <div class="row"><!--|==========| Div | Row I | ↓ |==========|-->
    <div class="col"> <p class="ppro"> <a href="{{ url('/ticketn') }}" class="a1">Crear Ticket</a> </p> </div>
    <div class="col"> <p class="ppro"> <a href="{{ url('/ticketnv') }}" class="a2">Mis Tickets</a> </p> </div>
    <!--|==========| Div | Row I | ↑ |==========|--></div>

    <div class="row"><!--|==========| Div | Row II | ↓ |==========|-->
    <div class="col"> <p class="ppro"> <a href="{{ url('/cuenta') }}" class="a1">Ver Cuenta</a> </p> </div>
    <div class="col"> <p class="ppro"> <a href="{{ url('/cuentaedit') }}" class="a2">Editar Cuenta</a> </p> </div>
    <!--|==========| Div | Row II | ↑ |==========|--></div>

  </div><!--|==========| Container | fin | ↑ |==========|-->
  
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
            <a href="{{ url('/logout') }}" type="button" class="modal-btn-cerrar">Si</a>
        </div>
      </div>
    </div>
  </div><!--|======| New Modal - CerrarSesion |fin| ↑ |======|--> 
</body>
</html>
@php  } else{
      echo "<script>
            alert('Debes iniciar sesión primero');
            window.location.href='/index';
          </script>";
}  @endphp