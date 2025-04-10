@php
  session_start();
  if(isset($_SESSION['support'])){
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>Mis Tickets</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
 
  <link rel="stylesheet" type="text/css" href="/css/estail.css">    
</head>
<body>
  <!--|==========| Barra de navegacion | ↓ | inicio |==========|-->
  <div class="topnav" id="myTopnav">
    <a href="dashboard">Inicio</a>
    <a href="perfil">Perfil</a>
    <a href="#CerrarSesion" data-bs-toggle="modal" title="Salir">Salir</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div><!--|=========| Barra de navegacion | ← | fin |=========|-->

  <!--|==========| Container | ↓ | inicio |==========|-->
  <div class="container">
    <!--|==========| Boton | ir a izquierda |==========|-->
    <div class="btn-left-pro"> <a href="{{ url('/stinicio' )}}" title="Inicio" class="aarrooww"><</a> </div>
    <!--|==========| Tickets | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p>Todos los Tickets</p> </div>
    <!--|==========| Boton | ir a derecha |==========|-->
    <div class="btn-right-pro"> <a href="{{ url('/tnuevo' )}}" title="Nuevo" class="aarrooww">+</a> </div>
    
    <!--|==========| Tabla Ticket | ↓ | inicio |==========|-->
    <table class="table table-bordered">
      <thead>
        <th>Ticket</th>
        <th>Titulo</th>
        <th>Modificado</th>
        <th colspan="3">Opciones</th>
      </thead>
      @php
      foreach ($tickett as $tickt) {
        $id = $tickt->ticketid;
        $titulo = $tickt->ticket_titulo;
        $fecha = $tickt->updated_at;
      @endphp
      <tbody>
        <td>@php echo $id; @endphp</td>
        <td>@php echo $titulo; @endphp</td> 
        <td>@php echo $fecha; @endphp</td>
        <td><a class="optionsu" href="/ts/@php echo $id; @endphp/update"><img src="img/edit.png"></a></td>
        <td><a class="optionsu" href="/ts/@php echo $id; @endphp"><img src="img/info.png"></a></td> 
      </tbody>  
     @php } @endphp  
    </table> <!--|==========| Tabla Ticket | ↑ | fin |==========|-->
  </div>
  <!--|==========| Container | fin | ↑ |==========|-->

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
            <a href="logout" type="button" class="modal-btn-cerrar">Si</a>
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