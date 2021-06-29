<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <style type="text/css">
      body{
        background-color: #22293D;
        color: white;
        font-family: 'Open Sans', sans-serif;
      }

      .container{
        text-align: center;
        justify-content: center;
        align-items: center;
      }
        
      .first {
        margin: 0.9em;
        height: 4em;
        width: 25%;
        font-weight: bold;
        font-size: 1.25em;
        color: #22293D;
        display: inline-block;
        background-color: #F8BBD0;
      }
        
      .second {
        margin: 0.9em;
        height: 4em;
        width: 25%;
        font-weight: bold;
        font-size: 1.25em;
        color: #22293D;
        display: inline-block;
        background-color: #FFF176;
      }
        
      .third {
        margin: 0.9em;
        height: 4em;
        width: 25%;
        font-weight: bold;
        font-size: 1.25em;
        color: #22293D;
        display: inline-block;
        background-color: #81D4FA;
      }

      #greeting{
        margin-top: 1em;
        margin-bottom: 1em;
      }

      a.a1:link {color: #22293D;}
      a.a1:visited {color: #22293D;}
      a.a1:hover {color: #6A1B9A;}

      a.a2:link {color: #22293D;}
      a.a2:visited {color: #22293D;}
      a.a2:hover {color: #6A1B9A;}

      a.a3:link {color: #22293D;}
      a.a3:visited {color: #22293D;}
      a.a3:hover {color: #6A1B9A;}

      .ppro {padding-top: 1.2em;}

      .btn-primary {background-color: #22293D;}

      .modal-body, .modal-title {
        color: #22293D;
        font-weight: bold;            
      }

      .topnav {
        overflow: hidden;
        background-color: #22293D;
        font-weight: bold;
      }
      
      .topnav a {
        margin-top: 0.7em;
        margin-left: 0.7em;
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding-top: 0.7em;
        padding-bottom: 0.7em;
        padding-left: 2.15em;
        padding-right: 2.15em;
        text-decoration: none;
        font-size: 1.2em;
      }

      .topnav a:hover {
        background-color: #ddd;
        color: black;
      }

      .topnav a.active {
        background-color: #ddd;
        color: #22293D;
      }

      .topnav .icon {
        display: none;
      }

      @media screen and (max-width: 600px) {
        .topnav a:not(:first-child) {display: none;}
        .topnav a.icon {
          float: right;
          display: block;
        }
      }

      @media screen and (max-width: 600px) {
        .topnav.responsive {position: relative;}
        .topnav.responsive .icon {
          position: absolute;
          right: 0;
          top: 0;
        }
        .topnav.responsive a {
          float: none;
          display: block;
          text-align: left;
        }
      }
          
      @media screen and (max-width: 600px) {
        .first,
        .second,
        .third {
          width: 70%;
          height: 5em;
        }
        .ppro{
          padding-top: 1.7em;
        }
      }
      </style>
    </head>
    <body>

      <!--|==========| Barra de navegacion | ↓ | inicio |==========|-->
      <div class="topnav" id="myTopnav">
        <a href="home.php" class="active">Inicio</a>
        <a href="notas.php">Notas</a>
        <a href="perfil.php">Perfil</a>
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
        <!--|==========| Bienvenida | ↓ |==========|-->
        <h1 id="greeting">Bienvenido crack</h1>
        <!--|==========| Nuevo | ↓ |==========|-->
        <div class="first">
          <p class="ppro"><a href="todo.php" class="a1">Nuevo</a></p>
        </div>
        <!--|==========| Pendiente | ↓ |==========|-->
        <div class="second">
          <p class="ppro"><a href="doing.php" class="a2">Pendiente</a></p>
        </div>
        <!--|==========| Completado | ↓ |==========|-->
        <div class="third">
          <p class="ppro"><a href="done.php" class="a3">Completado</a></p>
        </div>
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
          <div class="modal-body">
            ¿Desea salir de la plataforma?
          </div>
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