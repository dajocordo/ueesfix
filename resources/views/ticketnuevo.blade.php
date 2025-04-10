@php
  session_start();
  if(isset($_SESSION['admin'])){
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>Ticket Nuevo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
 
  <link rel="stylesheet" type="text/css" href="/css/estail.css"> 
</head>
<body>
  <!--|==========| Barra de navegacion | ↓ | inicio |==========|-->
  <div class="topnav" id="myTopnav">
    <a href="dashboard">Inicio</a>
    <a href="">Perfil</a>
    <a href="#CerrarSesion" data-bs-toggle="modal" title="Salir">Salir</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div> <!--|==========| Barra de navegacion | ↑ | fin |==========|-->

  <!--|====| Container | ↓ | → | inicio |====|--><div class="container">
    <!--|==========| Boton | Regresar |==========|-->
    <div class="btn-left-pro"> <a href="{{ url('/home') }}" title="Regresar" class="aarrooww"><</a> </div>
    <!--|==========| Ticket | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p><img src="/img/add.png"> Ticket [new]</p> </div>
    <!--|==========| Formulario | ↓ | inicio |==========|-->
    <form action="{{url('/t/create')}}" name="frmTicketCreateAdm" method="post">
      @csrf
        @php
          $admini = DB::SELECT('SELECT * FROM soporte WHERE soportecif = ?',[$_SESSION['admin']]); 
          foreach ($admini as $adminq) {
            $id = $adminq->soportecif;
            echo '<input type="hidden" class="form-control form-control-lg" name="adminid" value="'.$id.'" autocomplete="off" required>';
          }
        @endphp
      <div class="row"><!--|==========| Div | Row I | ↓ |==========|-->
        <div class="col-8">
          <label class="lblformuser">Título</label>
          <input type="text" class="form-control form-control-lg" name="txtTitulo" autocomplete="off" required>
        </div>
        <div class="col-4">
          <!--|==========| Select Prioridad | ↓ | inicio |==========|-->
          <label class="lblformuser">Prioridad</label>
          <select name="selPriori" class="form-control form-control-lg" aria-label="Default select example">
          @php foreach ($prioridaad as $selprioridaad) {
            $pid = $selprioridaad->prioridadid;
            $pname = $selprioridaad->prioridad_name;
          @endphp
            <option value="@php echo $pid; @endphp">@php echo $pname; @endphp</option>
          @php } @endphp
          </select><!--|==========| Select Prioridad | ↑ | fin |==========|--></div>
      <!--|==========| Div | Row I | ↑ |==========|--></div>
      <div class="row"><!--|==========| Div | Row II | ↓ |==========|-->
        <div class="col-9">
        <label class="lblformuser">Detalles</label>
        <input type="text" class="form-control form-control-lg" name="txtDetalles" autocomplete="off" required>
      </div>
      <div class="col-3">
        <!--|==========| Select Usuarios | ↓ | inicio |==========|-->
        <label class="lblformuser">Usuario</label>
         <select name="selUsuario" class="form-control form-control-lg" aria-label="Default select example">
          @php foreach ($usuarioo as $selusuarioo) {
            $uid = $selusuarioo->usuariocif;
            $uname = $selusuarioo->usuario_name;
            $uapellido = $selusuarioo->usuario_apellido;
          @endphp
          <option value="@php echo $uid; @endphp">@php echo $uname." ".$uapellido; @endphp</option>
          @php  }  @endphp
        </select><!--|==========| Select Prioridad | ↑ | fin |==========|--></div>
        <!--|==========| Div | Row II | ↑ |==========|--></div>
      <div class="row"><!--|==========| Div | Row III | ↓ |==========|-->
        <div class="col-8">
          <!--|==========| Select Gestion | ↓ | inicio |==========|-->
          <label class="lblformuser">Gestion</label>
          <select name="selGestion" class="form-control form-control-lg" aria-label="Default select example">
          @php foreach ($gestioon as $selgestioon) {
            $gid = $selgestioon->gestionid;
            $gname = $selgestioon->gestion_name;
          @endphp
            <option value="@php echo $gid; @endphp">@php echo $gname; @endphp</option>
          @php } @endphp
          </select><!--|==========| Select Gestion | ↑ | fin |==========|--></div>
          <div class="col-4">
          <!--|==========| Select GestionTipo | ↓ | inicio |==========|-->
          <label class="lblformuser">Gestion Tipo</label>
          <select name="selGestionTipo" class="form-control form-control-lg" aria-label="Default select example">
          @php foreach ($gestioontipoo as $selgestioontipoo) {
            $gtid = $selgestioontipoo->gestiontipoid;
            $gtname = $selgestioontipoo->gestiontipo_name;
          @endphp
            <option value="@php echo $gtid; @endphp">@php echo $gtname; @endphp</option>
          @php } @endphp
          </select><!--|==========| Select GestionTipo | ↑ | fin |==========|--></div>
      <!--|==========| Div | Row III | ↑ |==========|--></div>

      <input type="submit" class="btn-enviar-form" name="btnCrearTicketFromAdm" value="Enviar">
    </form><!--|==========| Formulario | ↑ | fin |==========|-->
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
            <a href="{{ url('/logout') }}" type="button" class="modal-btn-cerrar">Si</a>
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
}  @endphps