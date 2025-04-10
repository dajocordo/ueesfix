@php
  session_start();
  if(isset($_SESSION['support'])){
@endphp
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
    <a href="dashboard">Inicio</a>
    <a href="perfil" class="active">Perfil</a>
    <a href="#CerrarSesion" data-bs-toggle="modal" title="Salir" data-bs-target="#CerrarSesion">Salir</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div><!--|==========| Barra de navegacion | ↑ | fin |==========|-->

  <div class="container"><!--| Container | ← | ↓ |-->
    <!--|==========| Perfil | ↓ |==========|-->
    <h1 id="greeting">Perfil</h1> 
    @csrf
      @php   $soporte_show = DB::SELECT('SELECT * FROM soporte WHERE soportecif = ?',[$_SESSION['support']]); 
            foreach ($soporte_show as $soporteshoow) {
            $id = $soporteshoow->soportecif;
            $sname = $soporteshoow->snombre;
            
          @endphp
           <!--|==========| Editar perfil | ↓ |==========|-->
    <div class="editprofile"> <p class="ppro"> <a href="/sp/@php echo $id; @endphp/edit" class="a2">Editar perfil</a> </p> </div>
    @php
      }
      @endphp
    <!--|==========| Ver perfil | ↓ |==========|-->
      <div class="seeprofile"> <p class="ppro"> <a href="/sp/@php echo $id; @endphp" class="a1">Mi cuenta</a> </p> </div>
   
    <!--|==========| Conocer equipo | ↓ |==========|-->
    <div class="knowteam"> <p class="ppro"> <a href="{{ url('/sp') }}" class="a3">Mi equipo</a> </p> </div>
  </div><!--|=====| Container | fin | ← | ↑ |======|-->

</body>
</html>
@php  } else{
      echo "<script>
            alert('Debes iniciar sesión primero');
            window.location.href='/index';
          </script>";
}  @endphp
