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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script type="text/javascript" src="/js/barra.js"></script>
  <link rel="stylesheet" type="text/css" href="/css/estail.css"> 
</head>
<body>
  <!--|==========| Barra de navegacion | ↓ | inicio |==========|-->
  <div class="topnav" id="myTopnav">
    <a href="home">Inicio</a>
    <a href="perfil">Perfil</a>
    <a href="#CerrarSesion" data-bs-toggle="modal" title="Salir">Salir</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div> <!--|==========| Barra de navegacion | ↑ | fin |==========|-->

  <!--|====| Container | ↓ | → | inicio |====|--><div class="container">
    <!--|==========| Boton | Regresar |==========|-->
    <div class="btn-left-pro"> <a href="{{ url('/t') }}" title="Regresar" class="aarrooww"><</a> </div>
    <!--|==========| Ticket | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p><img src="/img/add.png"> Ticket [ nuevo ]</p> </div>
    <!--|==========| Formulario | ↓ | inicio |==========|-->
    <form action="{{url('/t/create')}}" name="frmTicketCreateAdm" method="post">
      @csrf
      <div class="row"><!--|==========| Div | Row III | ↓ |==========|-->
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
      <label class="lblformuser">Detalles</label>
      <input type="text" class="form-control form-control-lg" name="txtDetalles" autocomplete="off" required>
      <div class="row"><!--|==========| Div | Row III | ↓ |==========|-->
        <div class="col-4">
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
          <div class="col-4">
          <!--|==========| Select Usuario | ↓ | inicio |==========|-->
          <label class="lblformuser">Usuario</label>
          <select name="selUsuari" class="form-control form-control-lg" aria-label="Default select example">
          @php foreach ($usuarioo as $selusuarioo) {
            $uid = $selusuarioo->usuariocif;
            $uname = $selusuarioo->unombre;
          @endphp
            <option value="@php echo $uid; @endphp">@php echo $uname; @endphp</option>
          @php } @endphp
          </select><!--|==========| Select Usuario | ↑ | fin |==========|--></div>
      <!--|==========| Div | Row I | ↑ |==========|--></div>
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
}  @endphps