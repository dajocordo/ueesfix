@php
  session_start();
  if(isset($_SESSION['student'])){
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>Perfil</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
 
  <link rel="stylesheet" type="text/css" href="/css/usuariostyle.css">
</head>
<body>
  <!--|==========| Barra de navegacion | ↓ | inicio |==========|-->
  <div class="topnav" id="myTopnav">
    <a href="dashboard">Inicio</a>
    <a href="#CerrarSesion" data-bs-toggle="modal" title="Salir" data-bs-target="#CerrarSesion">Salir</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div><!--|==========| Barra de navegacion | ↑ | fin |==========|-->

<!--|====| Container | ↓ | → | inicio |====|-->
<div class="container">
    <!--|==========| Boton | Regresar |==========|-->
    <div class="btn-left-pro"> <a href="{{ url('/inicio') }}" title="Regresar" class="aarrooww"><</a> </div>
    <!--|==========| Ticket | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p><img src="/img/add.png"> Perfil [ Usuario ]</p> </div>
 
    <div class="container">
    @csrf
      @php   $soporte_show = DB::SELECT('SELECT * FROM usuario WHERE usuariocif = ?',[$_SESSION['student']]); 
            foreach ($soporte_show as $soporteshoow) {
            $id = $soporteshoow->usuariocif;
            $sname = $soporteshoow->usuario_name;
            
          @endphp
           <!--|==========| Editar perfil | ↓ |==========|-->
    <div class="editprofile"> <p class="ppro"> <a href="/up/@php echo $id; @endphp/edit" class="a2">Editar perfil</a> </p> </div>
    @php
      }
      @endphp
    <!--|==========| Ver perfil | ↓ |==========|-->
      <div class="seeprofile"> <p class="ppro"> <a href="/up/@php echo $id; @endphp" class="a1">Mi cuenta</a> </p> </div>
   
    </div>

  <!--|==========| Container | fin | ← | ↑ |==========|-->
</div>

  

</body>
</html>
@php  } else{
      echo "<script>
            alert('Debes iniciar sesión primero');
            window.location.href='/index';
          </script>";
}  @endphp