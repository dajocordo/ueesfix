@php
  session_start();
  if(isset($_SESSION['admin'])){
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>Prioridad Info</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
 
  <link rel="stylesheet" type="text/css" href="/css/estail.css"> 
</head>
<body>
 @include('tool.topnav')
  
 <!--|====| Container | ↓ | → | inicio |====|--><div class="container">
    <!--|==========| Boton | Regresar |==========|-->
    <div class="btn-left-pro"> <a href="{{ url('/p') }}" title="Regresar" class="aarrooww"><</a> </div>
    <!--|==========| Roles | ↓ | Prioridad |==========|-->
    <div class="middle-pro"> <p><img src="/img/info.png"> Prioridad [ info ]</p> </div>
    <!--|=======| Tabla Prioridad [info]  | ↓ | inicio |=======|-->
    <table class="table table-bordered">  
    <tr>
      <th class="table-primary">ID</th>
      <td>@php echo $id; @endphp</td>
    </tr> 
    <tr> 
      <th class="table-primary">Nombre</th>
      <td>@php echo $name; @endphp </td>
    </tr>
    <tr> 
      <th class="table-primary">Creado</th>
      <td>@php echo $creado; @endphp</td>
    </tr>
    <tr>
      <th class="table-primary">Modificado</th>
      <td>@php echo $modificado; @endphp</td>
    </tr>
    </table><!--|=======| Tabla Prioridad [info]  | ↑ | fin |=======|-->
    <!--|==========| Container | fin | ← | ↑ |==========|--></div>

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