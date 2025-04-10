@php
  session_start();
  if(isset($_SESSION['support'])){
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>Soporte Equipo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
 
  <link rel="stylesheet" type="text/css" href="/css/soportestyle.css">    
</head>
<body>
  <!--|==========| Barra de navegacion | ↓ | inicio |==========|-->
  <div class="topnav" id="myTopnav">
    <a href="dashboard">Inicio</a>
    <a href="#CerrarSesion" data-bs-toggle="modal" title="Salir">Salir</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div><!--|=========| Barra de navegacion | ← | fin |=========|-->

  <!--|==========| Container | ↓ | inicio |==========|-->
  <div class="container">
      @php  $supportt = DB::SELECT('SELECT * FROM soporte WHERE soportecif = ?',[$_SESSION['support']]); 
            foreach ($supportt as $suporte) {
              $id = $suporte->soportecif;
              $name = $suporte->soporte_name;

    @endphp
    <!--|==========| Boton | ir a izquierda |==========|-->
     <div class="btn-left-pro"> <a href="/sperfil" title="Regresar" class="aarrooww"><img src="/img/back.png"></a> </div>
    <!--|==========| Nuevo | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p>Mi Equipo</p> </div>
    <!--|==========| Boton | ir a derecha |==========|-->
    <div class="btn-right-pro"> <a href="/sp/@php echo $id; @endphp/edit" title="Nuevo" class="aarrooww">></a></div>
 @php
      }
      @endphp
    <!--|==========| Tabla Usuarios | ↓ | inicio |==========|-->
    <table class="table table-bordered">
      <thead>
        <th>No.</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Correo</th>
        <th colspan="1">Opcion</th>
      </thead>
      @php
      $num=1;
      foreach ($soport as $sopor) {
        $id = $sopor->soportecif;
        $sopnombre = $sopor->soporte_name;
        $sopapellido = $sopor->soporte_apellido;
        $sopcorreo = $sopor->soporte_mail;

      @endphp
      <tbody><td>@php echo $num++; @endphp</td>
        <td>@php echo $sopnombre; @endphp</td>
        <td>@php echo $sopapellido; @endphp</td>
        <td>@php echo $sopcorreo; @endphp</td> 
        <td><a class="optionsu" href="/sp/@php echo $id; @endphp;"><img src="img/info.png"></a></td> 
      </tbody>  
     @php } @endphp  
    </table> <!--|==========| Tabla Usuarios | ↑ | fin |==========|-->
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


@php  } 
else{
      echo "<script>
            alert('Debes iniciar sesión primero');
            window.location.href='/index';
          </script>";
}  @endphp
