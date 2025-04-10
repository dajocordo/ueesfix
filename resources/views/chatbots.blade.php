@php
  session_start();
  if(isset($_SESSION['admin'])){
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>Chatbot</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
 
  <link rel="stylesheet" type="text/css" href="/css/estail.css">    
</head>
<body>
  <!--|==========| Barra de navegacion | ↓ | inicio |==========|-->
  @include('tool.topnav')
<!--|=========| Barra de navegacion | ← | fin |=========|-->

  <!--|==========| Container | ↓ | inicio |==========|-->
  <div class="container">
    <!--|==========| Boton | ir a izquierda |==========|-->
    <div class="btn-left-pro"> <a href="home" title="Inicio" class="aarrooww"><</a> </div>
    <!--|==========| Nuevo | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p>Chatbot</p> </div>
    <!--|==========| Boton | ir a derecha |==========|-->
    <div class="btn-right-pro"> <a href="{{ url('/chatbotnuevo' )}}" title="Nuevo" class="aarrooww">+</a> </div>
    
    <!--|==========| Tabla Usuarios | ↓ | inicio |==========|-->
    <table class="table table-bordered">
      <thead>
        <th>No.</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Correo</th>
        <th colspan="2">Opciones</th>
      </thead>
      @php
      $num=1;
      foreach ($users as $user) {
        $id = $user->usuariocif;
        $nombreu = $user->unombre;
        $apellidou = $user->uapellido;
        $correou = $user->umail;
      @endphp
      <tbody><td>@php echo $num++; @endphp</td>
        <td>@php echo $nombreu; @endphp</td>
        <td>@php echo $apellidou; @endphp</td>
        <td>@php echo $correou; @endphp</td> 
        <td><a class="optionsu" href="/ch/@php echo $id; @endphp/edit"><img src="img/edit.png"></a></td>
        <td><a class="optionsu" href="/ch/@php echo $id; @endphp"><img src="img/info.png"></a></td> 
        <td><a class="optionsu" href="/ch/delete"><p class="btndelete">X</p></a></td>
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
@php  } else{
      echo "<script>
            alert('Debes iniciar sesión primero');
            window.location.href='/index';
          </script>";
}  @endphp
