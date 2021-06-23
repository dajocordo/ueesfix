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

        <style type="text/css">
        body{
            background-color: #2A2F52;
            color: white;
            font-family: 'Open Sans', sans-serif;
        }

        div {
            margin: 0.9em;
            text-align: center;
        }

        .container{
            text-align: center;
            justify-content: center;
            align-items: center;
        }
  
        .first {
            height: 4em;
            width: 25%;
            font-weight: bold;
            color: #2A2F52;
            display: inline-block;
            background-color: #F8BBD0;
        }
  
        .second {
            height: 4em;
            width: 25%;
            font-weight: bold;
            color: #2A2F52;
            display: inline-block;
            background-color: #FFF176;
        }
  
        .third {
            height: 4em;
            width: 25%;
            font-weight: bold;
            color: #2A2F52;
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

        .topnav {
            overflow: hidden;
            background-color: #2A2F52;
            font-weight: bold;
        }

        .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
          background-color: #ddd;
          color: black;
        }

        .topnav a.active {
          background-color: #ddd;
          color: #2A2F52;
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
        <!------------ Barra de navegacion ------------>
        <div class="topnav" id="myTopnav">
          <a href="home.php" class="active">ueesfix</a>
          <a href="#news">News</a>
          <a href="#contact">Contact</a>
          <a href="#about">About</a>
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

        <!------------ Container |inicio| ------------>
        <div class="container">

            <!------------ Bienvenida ------------>
            <h1 id="greeting">Bienvenido crack</h1>

            <!------------ Nuevo ------------>
            <div class="first">
                <p class="ppro">Nuevo</p>
            </div>

            <!------------ Pendiente ------------>
            <div class="second">
                <p class="ppro">Pendiente</p>
            </div>

            <!------------ Completado ------------>
            <div class="third">
                <p class="ppro">Completado</p>
            </div>

        </div>
        <!------------ Container |fin| ------------>

    </body>
</html>