@php
  session_start();
  if(isset($_SESSION['admin'])){
    echo '<script> window.location="home"; </script>';
  } else {
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>Nuevo</title>
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
    <div class="btn-left-pro"> <a href="done" title="Completado" class="aarrooww"><</a> </div>
    <!--|==========| Nuevo | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p>Usuarios</p> </div>
    <!--|==========| Boton | ir a derecha |==========|-->
    <div class="btn-right-pro"> <a href="doing" title="Pendiente" class="aarrooww">></a> </div>
    <!--|==========| Nuevo | ↓ |==========|-->
    
    <table class="table table-bordered">
      <thead>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Correo</th>
      </thead>
      
      @php 
      foreach ($users as $user) {
        $nombreu = $user->unombre;
        $apellidou = $user->upellido;
        $correou = $user->umail;
      @endphp
      <tbody>
        <td>@php echo $nombreu; @endphp</td>
        <td>@php echo $apellidou; @endphp</td>
        <td>@php echo $correou; @endphp</td> 
      </tbody>   

<!--     <div class="first"> <p class="ppro">Nombre    Apellido     Correo</p></div>
    <div class="first"> <p class="ppro">@php echo $nombreu, $apellidou, $correou; @endphp</p> </div> -->
<!--     <div class="first"> <p class="ppro">TKT # 4356: Caida del Campus</p> </div>
    <div class="first"> <p class="ppro">TKT # 4358: No puedo entrar a mi cuenta del campus</p> </div>
    <div class="first"> <p class="ppro">TKT # 4359: Licencia de Office Caducada</p> </div>
    <div class="first"> <p class="ppro">TKT # 4361: No puedo abrir archivo de Excel</p> </div>
    <div class="first"> <p class="ppro">TKT # 4362: Mi Class Web no funciona...</p> </div> -->

    @php } @endphp
      
    </table>
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
