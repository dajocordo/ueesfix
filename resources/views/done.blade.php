@php
  session_start();
  if(isset($_SESSION['admin'])){
    echo '<script> window.location="home"; </script>';
  } else {
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>Completado</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
 
  <link rel="stylesheet" type="text/css" href="/css/estail.css">
</head>
<body>
  <!--|==========| Barra de navegacion | ↓ | inicio |==========|-->
  @include('tool.topnav')
<!--|=========| Barra de navegacion | ← | fin |=========|-->
  
  @php
    $ido = "Hola"; 
    echo $ido;
  @endphp
  <!--|==========| Container | ↓ | inicio |==========|-->
  <div class="container">
    <!--|==========| Boton | ir a izquierda |==========|-->
    <div class="btn-left-pro"> <a href="/doing" title="Pendiente" class="aarrooww"><</a> </div>
    <!--|==========| Completado | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p>Completado</p> </div>
    <!--|==========| Boton | ir a derecha |==========|-->
    <div class="btn-right-pro"> <a href="/todo" title="Nuevo" class="aarrooww">></a> </div>
    <!--|==========| Nuevo | ↓ |==========|-->
    <div class="third"> <p class="ppro">TKT # 4356: Caida del Campus</p> </div>
    <div class="third"> <p class="ppro">TKT # 4358: No puedo entrar a mi cuenta del campus</p> </div>
    <div class="third"> <p class="ppro">TKT # 4359: Licencia de Office Caducada</p> </div>
    <div class="third"> <p class="ppro">TKT # 4361: No puedo abrir archivo de Excel</p> </div>
    <div class="third"> <p class="ppro">TKT # 4362: Mi Class Web no funciona...</p> </div>
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