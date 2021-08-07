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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>



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

        .tablareporte {
            background-color: #E6E6FA;
            color: #000000;
            font-weight: bold;
        }
        
        .admintable {
            background-color: #E6E6FA;
            color: #000000;

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
    <h1 id="greeting">Reportes UEES-FIX</h1>
    <!--|==========| Nuevo | ↓ |==========|-->
    

<div>
    <canvas class="tablareporte responsive" id="myChart" width="400" height="150"></canvas>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Incidencias Registradas', 'Por Hacer', 'En Proceso', 'Hecho', ],
        datasets: [{
            label: '#Grafica Incidencias',
            data: [100, 19, 3, 5],
            backgroundColor: [
                'rgb(244, 164, 96)',
                'rgb(255, 215, 0)',
                'rgb(65, 105, 225)',
                'rgb(50, 205, 50)'
            ],
            borderColor: [
                'rgb(245, 222, 179)',
                'rgb(240, 230, 140)',
                'rgb(173, 216, 230)',
                'rgb(152, 251, 152)'
            ],
            borderWidth: 3
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
</div><br>

<div class="admintable">
<script>
$(document).ready(function() {
    $('#tableadm').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>





<table class="admintable" id="tableadm" class="display nowrap" style="width:100%">
        <thead>
        <br>
            <tr>
                <th>ID</th>
                <th>Gestion</th>
                <th>Categoria</th>
                <th>estado</th>
                <th>Fecha Ingreso</th>
                <th>Fecha Fin</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>001</td>
                <td>Mantenimiento PC</td>
                <td>CPU</td>
                <td>En Proceso</td>
                <td>05/07/21</td>
                <td>06/07/21</td>
            </tr>
            <tr>
                <td>002</td>
                <td>Mantenimiento PC</td>
                <td>CPU</td>
                <td>En Proceso</td>
                <td>05/07/21</td>
                <td>06/07/21</td>
            </tr>
            <tr>
                <td>003</td>
                <td>Mantenimiento PC</td>
                <td>CPU</td>
                <td>En Proceso</td>
                <td>05/07/21</td>
                <td>06/07/21</td>
            </tr>
            <tr>
                <td>004</td>
                <td>Mantenimiento PC</td>
                <td>CPU</td>
                <td>En Proceso</td>
                <td>05/07/21</td>
                <td>06/07/21</td>
            </tr>
            <tr>
                <td>005</td>
                <td>Mantenimiento PC</td>
                <td>CPU</td>
                <td>En Proceso</td>
                <td>05/07/21</td>
                <td>06/07/21</td>
            </tr>
            <tr>
                <td>006</td>
                <td>Mantenimiento PC</td>
                <td>CPU</td>
                <td>En Proceso</td>
                <td>05/07/21</td>
                <td>06/07/21</td>
            </tr>
            <tr>
                <td>007</td>
                <td>Mantenimiento PC</td>
                <td>CPU</td>
                <td>En Proceso</td>
                <td>05/07/21</td>
                <td>06/07/21</td>
            </tr>
            <tr>
                <td>008</td>
                <td>Mantenimiento PC</td>
                <td>CPU</td>
                <td>En Proceso</td>
                <td>05/07/21</td>
                <td>06/07/21</td>
            </tr>
            <tr>
                <td>009</td>
                <td>Mantenimiento PC</td>
                <td>CPU</td>
                <td>En Proceso</td>
                <td>05/07/21</td>
                <td>06/07/21</td>
            </tr>
            <tr>
                <td>010</td>
                <td>Mantenimiento PC</td>
                <td>CPU</td>
                <td>En Proceso</td>
                <td>05/07/21</td>
                <td>06/07/21</td>
            </tr>
            <tr>
                <td>001</td>
                <td>Mantenimiento PC</td>
                <td>CPU</td>
                <td>En Proceso</td>
                <td>05/07/21</td>
                <td>06/07/21</td>
            </tr>
            <tr>
                <td>002</td>
                <td>Mantenimiento PC</td>
                <td>CPU</td>
                <td>En Proceso</td>
                <td>05/07/21</td>
                <td>06/07/21</td>
            </tr>
            <tr>
                <td>003</td>
                <td>Mantenimiento PC</td>
                <td>CPU</td>
                <td>En Proceso</td>
                <td>05/07/21</td>
                <td>06/07/21</td>
            </tr>
            <tr>
                <td>004</td>
                <td>Mantenimiento PC</td>
                <td>CPU</td>
                <td>En Proceso</td>
                <td>05/07/21</td>
                <td>06/07/21</td>
            </tr>
            <tr>
                <td>005</td>
                <td>Mantenimiento PC</td>
                <td>CPU</td>
                <td>En Proceso</td>
                <td>05/07/21</td>
                <td>06/07/21</td>
            </tr>
            <tr>
                <td>006</td>
                <td>Mantenimiento PC</td>
                <td>CPU</td>
                <td>En Proceso</td>
                <td>05/07/21</td>
                <td>06/07/21</td>
            </tr>
            <tr>
                <td>007</td>
                <td>Mantenimiento PC</td>
                <td>CPU</td>
                <td>En Proceso</td>
                <td>05/07/21</td>
                <td>06/07/21</td>
            </tr>
            <tr>
                <td>008</td>
                <td>Mantenimiento PC</td>
                <td>CPU</td>
                <td>En Proceso</td>
                <td>05/07/21</td>
                <td>06/07/21</td>
            </tr>
            <tr>
                <td>009</td>
                <td>Mantenimiento PC</td>
                <td>CPU</td>
                <td>En Proceso</td>
                <td>05/07/21</td>
                <td>06/07/21</td>
            </tr>
            <tr>
                <td>010</td>
                <td>Mantenimiento PC</td>
                <td>CPU</td>
                <td>En Proceso</td>
                <td>05/07/21</td>
                <td>06/07/21</td>
            </tr>
        </tfoot>
    </table>

</div>

<div>
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
