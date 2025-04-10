@php
  session_start();
  if(isset($_SESSION['admin'])){
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
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
            text-align: center;
            margin: 0.9em;
            height: 4em;
            width: 25%;
            font-weight: bold;
            font-size: 1.25em;
            color: #22293D;
            display: inline-block;
            background-color: rgba(255, 180, 95, 0.85);
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
        .ppro{
            padding-top: 1.2em;
        }
        .modal-body, .modal-title {
            color: #22293D;
            font-weight: bold;
        }
       
        .btn-primary{
            background-color: #CFD7FF;
            font-weight: bold;
            font-size: 1.25em;
            margin-right: 1em;
            margin-bottom: 1em !important;
            border: 5em;
            width: 20em;
            height: 5em;
            color: #22293D;
        }

        .btn-secondaryy{
            background-color: #3A3B3B;
            color: #FFFFFF;
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
    <h1 id="greeting">Bienvenido UEES-FIX</h1>
    <!--|==========| Nuevo | ↓ |==========|-->

        <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#CrearTicketModal" data-bs-whatever="@mdo">Ver Reportes</button><br>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AgregarPersonal" data-bs-whatever="@mdo">Agregar Personal</button><br>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Modificar Personal</button>
</div>

<div class="modal fade" id="AgregarPersonal" tabindex="-1" aria-labelledby="AgregarPersonalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="AgregarPersonal">Nuevo Usuario IT</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Carnet o CIF:</label>
                        <input type="text" class="form-control" id="recipient-name" placeholder="Ingresar # Carnet o CIF">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Nombres:</label>
                        <input type="text" class="form-control" id="recipient-name" placeholder="Ingresar Nombres">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Apellidos:</label>
                        <input type="text" class="form-control" id="recipient-name" placeholder="Ingresar Apellidos">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Cargo:</label>
                        <input type="text" class="form-control" id="recipient-name" placeholder="Cargo a desempeñar">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Privilegios:</label>
                        <input type="text" class="form-control" id="recipient-name" placeholder="Privilegios asignados">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-secondaryy">Crear</button>
            </div>
        </div>
    </div>
</div>

<!--|==========| Container | fin | ↑ |==========|-->
</body>
</html>
@php  } else{
      echo "<script>
            alert('Debes iniciar sesión primero');
            window.location.href='/index';
          </script>";
}  @endphp
