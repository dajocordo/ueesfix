@php
  session_start();
  if(isset($_SESSION['admin'])){
    echo '<script> window.location="home"; </script>';
  } else {
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>Gestion</title>
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
    <a href="home">Inicio</a>
    <a href="perfil">Perfil</a>
    <a href="#CerrarSesion" data-bs-toggle="modal" title="Salir">Salir</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div><!--|=========| Barra de navegacion | ← | fin |=========|-->

  <!--|==========| Container | ↓ | inicio |==========|-->
  <div class="container">
    <!--|==========| Boton | ir a izquierda |==========|-->
    <div class="btn-left-pro"> <a href="home" title="Inicio" class="aarrooww"><</a> </div>
    <!--|==========| Gestion | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p>Gestion</p> </div>
    <!--|==========| Boton | ir a derecha |==========|-->
    <div class="btn-right-pro"> <a href="/gestionnuevo" title="Nuevo" class="aarrooww">+</a> </div>
    
    <!--|==========| Tabla Gestion | ↓ | inicio |==========|-->
    <table class="table table-bordered">
      <thead>
        <th>No.</th>
        <th>Nombre</th>
        <th>Modificado</th>
        <th colspan="3">Opciones</th>
      </thead>
     @php $num=1;
        foreach ($gestion1 as $gesti) {
          $id = $gesti->gestionid;
          $gestionname = $gesti->gestion_name;
          $gestion_Fecha_Actual = $gesti->updated_at;
      @endphp
      <tbody>
        <td>@php echo $num++; @endphp</td>
        <td>@php echo $gestionname; @endphp</td> 
        <td>@php echo $gestion_Fecha_Actual; @endphp</td>
        <td><a class="optionsu" href="/g/@php echo $id; @endphp/edit" title="Editar"><img src="img/edit.png"></a></td>
        <td><a class="optionsu" href="/g/@php echo $id; @endphp" title="Ver"><img src="img/info.png"></a></td> 
        <td><a class="optionsu" href="/g/delete" title="Eliminar"><p class="btndelete">X</p></a></td>
      </tbody>  
     @php } @endphp  
    </table> <!--|==========| Tabla Gestion | ↑ | fin |==========|-->
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
