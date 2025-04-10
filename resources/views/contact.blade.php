{{--| admin |--}}

@extends('building')

@section('title', 'notas')

@section('content')

  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <!--|==========| Barra de navegacion | ↓ | inicio |==========|-->
  <div class="topnav" id="myTopnav">
    <a href="home.php">Inicio</a>
    <a href="perfil.php" class="active">Perfil</a>
    <a href="#CerrarSesion" data-bs-toggle="modal" title="Salir" data-bs-target="#CerrarSesion">Salir</a>
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
      <!--|==========| Notas | ↓ |==========|-->
      <h1 id="greeting">Contact page</h1>
    </div>
    <!--|==========| Container | fin | ↑ |==========|-->

@endsection