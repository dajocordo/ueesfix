<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>Perfil</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
 
  <link rel="stylesheet" type="text/css" href="/css/estail.css">
</head>
<body>
  <!--|==========| Barra de navegacion | ↓ | inicio |==========|-->
  <div class="topnav" id="myTopnav">
    <a href="home">Inicio</a>
    <a href="notas">Notas</a>
    <a href="perfil" class="active">Perfil</a>
    <a href="#CerrarSesion" data-bs-toggle="modal" title="Salir" data-bs-target="#CerrarSesion">Salir</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div><!--|==========| Barra de navegacion | ↑ | fin |==========|-->

  <div class="container"><!--| Container | ← | ↓ |-->
    <!--|==========| Perfil | ↓ |==========|-->
    <h1 id="greeting">Perfil</h1>
    <!--|==========| Ver perfil | ↓ |==========|-->
    <div class="seeprofile"><p class="ppro">Mi cuenta</p></div>
    <!--|==========| Editar perfil | ↓ |==========|-->
    <div class="editprofile"><p class="ppro">Editar perfil</p></div>
    <!--|==========| Conocer equipo | ↓ |==========|-->
    <div class="knowteam"><p class="ppro">Mi equipo</p></div>
  </div><!--|=====| Container | fin | ← | ↑ |======|-->

  

   
</body>
</html>