<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>Pendiente</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
 
  <link rel="stylesheet" type="text/css" href="/css/estail.css">
</head>
<body>
  <!--|==========| Barra de navegacion | ↓ | inicio |==========|-->
  <div class="topnav" id="myTopnav">
    <a href="home">Inicio</a>
    <a href="notas">Notas</a>
    <a href="perfil">Perfil</a>
    <a href="#CerrarSesion" data-bs-toggle="modal" title="Salir">Salir</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div><!--|=========| Barra de navegacion | ← | fin |=========|-->
  
  <!--|==========| Container | ↓ | inicio |==========|-->
  <div class="container">
    <!--|==========| Boton | ir a izquierda |==========|-->
    <div class="btn-left-pro"> <a href="todo" title="Nuevo" class="aarrooww"><</a> </div>
    <!--|==========| Pendiente | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p>Pendiente</p> </div>
    <!--|==========| Boton | ir a derecha |==========|-->
    <div class="btn-right-pro"> <a href="done" title="Completado" class="aarrooww">></a> </div>
    <!--|==========| Second | ↓ |==========|-->
    <div class="second"> <p class="ppro">TKT # 4356: Caida del Campus</p> </div>
    <div class="second"> <p class="ppro">TKT # 4358: No puedo entrar a mi cuenta del campus</p> </div>
    <div class="second"> <p class="ppro">TKT # 4359: Licencia de Office Caducada</p> </div>
    <div class="second"> <p class="ppro">TKT # 4361: No puedo abrir archivo de Excel</p> </div>
    <div class="second"> <p class="ppro">TKT # 4362: Mi Class Web no funciona...</p> </div>
  </div>
  <!--|==========| Container | fin | ↑ |==========|-->
    
  <!--|========| Modal - CerrarSesion |inicio| ↓ |========|-->
  <div class="modal fade" id="CerrarSesion" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Cerrar Sesion</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
          <div class="modal-body"> ¿Desea salir de la plataforma? </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
          <a href="welcome" type="button" class="btn btn-primary">Si</a>
        </div>
      </div>
    </div>
  </div><!--|======| Modal - CerrarSesion |fin| ↑ |======|-->
</body>
</html>