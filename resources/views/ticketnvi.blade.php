@php
  session_start();
  if(isset($_SESSION['student'])){
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>Ticket Info</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
 
  <link rel="stylesheet" type="text/css" href="/css/estail.css"> 
</head>
<body>
  <!--|==========| Barra de navegacion | ↓ | inicio |==========|-->
  @include('tool.topnav')
<!--|==========| Barra de navegacion | ↑ | fin |==========|-->

    <!--|====| Container | ↓ | → | inicio |====|--><div class="container">
    <!--|==========| Boton | Regresar |==========|-->
    <div class="btn-left-pro"> <a href="{{ url('/ticketnv') }}" title="Regresar" class="aarrooww"><</a> </div>
    <!--|==========| Ticket | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p><img src="/img/info.png"> Ticket [ info ]</p> </div>
    <div class="btn-right-pro"> <a href="/toto/@php echo $id; @endphp" title="Agregar Nota" class="aarrooww"><img src="/img/note.png"></a> </div>
    <!--|====| Tabla Ticket [info ] | ↓ | inicio |====|-->
    <table class="table table-bordered">  
    <tr>
      <th class="table-primary">Ticket</th>
      <td>@php echo $id; @endphp</td>
    </tr> 
    <tr> 
      <th class="table-primary">Titulo</th>
      <td>@php echo $titulo; @endphp </td>
    </tr>
    <tr> 
      <th class="table-primary">Detalles</th>
      <td>@php echo $detalles; @endphp</td>
    </tr>
    <tr> 
      <th class="table-primary">Gestion</th>
      <td>@php echo $gname; @endphp </td>
    </tr>
    <tr> 
      <th class="table-primary">Gestion Tipo</th>
      <td>@php echo $gtname; @endphp</td>
    </tr>
    <tr>
      <th class="table-primary">Prioridad</th>
      <td>@php echo $pname; @endphp</td>
    </tr>
    <tr>
      <th class="table-primary">Estado</th>
      <td>@php echo $ename; @endphp</td>
    </tr>
    <tr> 
      <th class="table-primary">Creado</th>
      <td>@php echo $creado; @endphp</td>
    </tr>
    <tr>
      <th class="table-primary">Modificado</th>
      <td>@php echo $modificado; @endphp</td>
    </tr>
  </table><!--|======| Tabla Ticket [info] | ↑ | fin |======|-->
  <!--|==========| Container | fin | ← | ↑ |==========|--></div>
 <!--|==========| Container | ↓ | inicio |==========|-->
 <div class="container">
    <!--|==========| Boton | ir a izquierda |==========|-->
    <!--|==========| Tickets | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p>Mis Notas</p> </div>
    
    <!--|==========| Tabla Ticket | ↓ | inicio |==========|-->
    <table class="table table-bordered">
      <thead>
        <th>Ticket</th>
        <th>Titulo</th>
        <th>Modificado</th>
        <th>Detalles</th>
      </thead>
      @php
      $tickett = DB::SELECT('SELECT * FROM ticket WHERE fusuarioid = ?',[$_SESSION['student']]);

      foreach ($tickett as $tickt) {
        $id = $tickt->ticketid;
        $titulo = $tickt->ticket_titulo;
        $fecha = $tickt->updated_at;
      @endphp
      <tbody>
        <td>@php echo $id; @endphp</td>
        <td>@php echo $titulo; @endphp</td> 
        <td>@php echo $fecha; @endphp</td>
        <td><a class="optionsu" href="/ticketnvi/@php echo $id; @endphp"><img src="img/info.png"></a></td> 
      </tbody>  
     @php } @endphp  
    </table> <!--|==========| Tabla Ticket | ↑ | fin |==========|-->
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