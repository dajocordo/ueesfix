<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <title>Nuevo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="/css/estail.css">    
  </head>
  <body>
    <!--|==========| Barra de navegacion | ↓ | inicio |==========|-->
    <div class="topnav" id="myTopnav">
      <a href="home" class="active">Inicio</a>
      <a href="notas">Notas</a>
      <a href="perfil">Perfil</a>
      <a href="#CerrarSesion" data-bs-toggle="modal" title="Salir">Salir</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
    </div>
    <script>
      function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
          x.className += " responsive";
        } else {
          x.className = "topnav";
        }
      }
    </script>
    <!--|==========| Barra de navegacion | ↑ | fin |==========|-->

    <!--|==========| Container | ↓ | inicio |==========|-->
    <div class="container">
      <!--|==========| Boton | ir a izquierda |==========|-->
      <div class="btn-left-pro"> <a href="done" title="Completado" class="aarrooww"><</a> </div>
      <!--|==========| Nuevo | ↓ | titulo |==========|-->
      <div class="middle-pro"> <p>Nuevo</p> </div>
      <!--|==========| Boton | ir a derecha |==========|-->
      <div class="btn-right-pro"> <a href="doing" title="Pendiente" class="aarrooww">></a> </div>
      <!--|==========| Nuevo | ↓ |==========|-->
      <div class="first"> <p class="ppro">TKT # 4356: Caida del Campus</p> </div>
      <div class="first"> <p class="ppro">TKT # 4358: No puedo entrar a mi cuenta del campus</p> </div>
      <div class="first"> <p class="ppro">TKT # 4359: Licencia de Office Caducada</p> </div>
      <div class="first"> <p class="ppro">TKT # 4361: No puedo abrir archivo de Excel</p> </div>
      <div class="first"> <p class="ppro">TKT # 4362: Mi Class Web no funciona...</p> </div>
    </div>
    <!--|==========| Container | fin | ↑ |==========|-->

    <!--|==========| Modal | inicio | ↓ | Cerrar Sesion |==========|-->
    <div class="modal fade" id="CerrarSesion" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Cerrar Sesion</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">¿Desea salir de la plataforma?</div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
            <a href="welcome.blade.php" type="button" class="btn btn-primary">Si</a>
          </div>
        </div>
      </div>
    </div>
    <!--|==========| Modal | fin | ↓ | Cerrar Sesion |==========|-->
  </body>
</html>