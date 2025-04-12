{{--| support |--}}

@extends('building')
@section('title', 'mi cuenta')
@section('content')
  
  <link rel="stylesheet" type="text/css" href="/css/soportestyle.css" />

  <!--|==========| Barra de navegacion | ↓ | inicio |==========|-->
  <div class="topnav" id="myTopnav">
    <a href="dashboard">Inicio</a>
    <a href="#CerrarSesion" data-bs-toggle="modal" title="Salir">Salir</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div> <!--|==========| Barra de navegacion | ↑ | fin |==========|-->

    <!--|====| Container | ↓ | → | inicio |====|-->
    <div class="container">
       @php  $supportt = DB::SELECT('SELECT * FROM soporte WHERE soportecif = ?',[$_SESSION['support']]); 
            foreach ($supportt as $suporte) {
              $id = $suporte->soportecif;
              $name = $suporte->soporte_name;

    @endphp
    <!--|==========| Boton | ir a izquierda |==========|-->
     <div class="btn-left-pro"> <a href="/sperfil" title="Regresar" class="aarrooww"><img src="/img/back.png"></a> </div>
    <!--|==========| Usuario | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p><img src="/img/info.png">Mi Cuenta</p> </div>
    <!--|==========| Boton | ir a derecha |==========|-->
    <div class="btn-right-pro"> <a href="/sp/@php echo $id; @endphp/edit" title="Nuevo" class="aarrooww">></a></div>

        @php
      }
      @endphp

      <!--|==========|FIN |==========|-->
@csrf
      @php   $soporte_show = DB::SELECT('SELECT * FROM soporte WHERE soportecif = ?',[$_SESSION['support']]); 
            foreach ($soporte_show as $soporteshoow) {
            $id = $soporteshoow->soportecif;
            $sname = $soporteshoow->soporte_name;
            $apellido = $soporteshoow->soporte_apellido;
            $correo = $soporteshoow->soporte_mail;
            $telefono = $soporteshoow->soporte_tel;
            $creado = $soporteshoow->created_at;
            $modificado = $soporteshoow->updated_at;
            
         
      }
      @endphp
    <table class="table table-bordered">  
    <tr>
      <th class="table-primary">No. </th>
      <td>@php echo $id; @endphp</td>
    </tr> 
    <tr> 
      <th class="table-primary">Nombre</th>
      <td>@php echo $name; @endphp </td>
    </tr>
    <tr> 
      <th class="table-primary">Apellido</th>
      <td>@php echo $apellido; @endphp</td>
    </tr>
    <tr>
      <th class="table-primary">Correo</th>
      <td>@php echo $correo; @endphp</td>
    </tr>
    <tr>
      <th class="table-primary">Tel</th>
      <td>@php echo $telefono; @endphp</td>
    </tr>
    <tr> 
      <th class="table-primary">Creado</th>
      <td>@php echo $creado; @endphp</td>
    </tr>
    <tr>
      <th class="table-primary">Modificado</th>
      <td>@php echo $modificado; @endphp</td>
    </tr>
    </table>
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
