{{--| usuario |--}}

@extends('building')
@section('title', 'ticket nuevo')
@section('content')

  <link rel="stylesheet" type="text/css" href="/css/usuariostyle.css"> 

  <!--|==========| Barra de navegacion | ↓ | inicio |==========|-->
  <div class="topnav" id="myTopnav">
    <a href="inicio">Inicio</a>
    <a href="perfil">Perfil</a>
    <a href="#CerrarSesion" data-bs-toggle="modal" title="Salir">Salir</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>

  <div class="container">
    <!--|==========| Boton | Regresar |==========|-->
    <div class="btn-left-pro"> <a href="{{ url('/inicio') }}" title="Regresar" class="aarrooww"><</a> </div>
    <!--|==========| Ticket | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p><img src="/img/add.png"> Ticket [ nuevo ]</p> </div>
    <!--|==========| Formulario | ↓ | inicio |==========|-->
    <form action="{{url('/tu/create')}}" name="frmTicketCreateAdm" method="post">
      @csrf
      @php
      $user_show = DB::SELECT('SELECT * FROM usuario WHERE usuariocif = ?',[$_SESSION['student']]); 
        foreach ($user_show as $usershoow) {
          $id = $usershoow->usuariocif;
          $uname = $usershoow->usuario_name;
          echo '<input type="hidden" class="form-control form-control-lg" name="userid" value="'.$id.'" autocomplete="off" required>';
        }
      @endphp
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
        <div class="col-6">
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
          <div class="col-6">
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
      <!--|==========| Div | Row I | ↑ |==========|--></div>
      <input type="submit" class="btn-enviar-form" name="btnCrearTicketFromAdm" value="Enviar">
    </form><!--|==========| Formulario | ↑ | fin |==========|-->
  </div>
  
@endsection