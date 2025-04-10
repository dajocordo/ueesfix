@php
  session_start();
  if(isset($_SESSION['admin'])){
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ver Tickets</title>
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
       

        .card-header{
            background-color: #CFD7FF;
            color: #000000;
            font-weight: bold;
        }

        .card-body{
            background-color: #CFD7FF;
            
           
        }

        
        .btn-primary{
            background-color: #100086;
            font-weight: bold;
            font-size: 1.25em;
            margin-right: 1em;
            margin-bottom: 1em !important;
            border: 5em;
            width: 20em;
            height: 5em;
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

        td.details-control {
    background: url('../resources/details_open.png') no-repeat center center;
    cursor: pointer;
}
tr.shown td.details-control {
    background: url('../resources/details_close.png') no-repeat center center;
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
    <h1 id="greeting">Bienvenido UEES-FIX</h1>
    <!--|==========| Nuevo | ↓ |==========|-->


    <div class="card-header">
                <h3 class="card-title">Gestión de Tickets</h3>
              </div>
              <!-- /.card-header -->
              <div class="table-responsive card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>ID</th>
                      <th>Categoria</th>
                      <th>Notas</th>
                      <th>Progress</th>
                      <th style="width: 40px">Label</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>001</td>
                      <td>Administración</td>
                      <td>Actualización de Software</td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar progress-bar-danger" style="width: 100%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-danger">100%</span></td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>002</td>
                      <td>Ingenieria</td>
                      <td>Cambio CPU</td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-warning" style="width: 70%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-warning">70%</span></td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>003</td>
                      <td>Medicina</td>
                      <td>Poryector Dañado</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar bg-primary" style="width: 30%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-primary">30%</span></td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>004</td>
                      <td>Colecturia</td>
                      <td>Cambio de teclado</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar bg-success" style="width: 90%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-success">90%</span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">4</a></li>
                  <li class="page-item"><a class="page-link" href="#">5</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>










<!--|==========| Container | fin | ↑ |==========|-->

<!-- jQuery, Popper.js, Bootstrap JS -->
<script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="datatables/datatables.min.js"></script>    
     
    <script type="text/javascript" src="main.js"></script>  
    
</body>
</html>
@php  } else{
      echo "<script>
            alert('Debes iniciar sesión primero');
            window.location.href='/index';
          </script>";
}  @endphp
