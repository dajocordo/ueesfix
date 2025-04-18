{{--| support |--}}

@extends('building')
@section('title', 'Ticket Nuevo')
@section('content')

  <div class="topnav" id="myTopnav">
    <a href="dashboard">Inicio</a>
    <a href="perfil">Perfil</a>
    <a href="#CerrarSesion" data-bs-toggle="modal" title="Salir">Salir</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>

  <div class="container">
    <!--|==========| Boton | Regresar |==========|-->
    <div class="btn-left-pro"> <a href="{{ url('/stinicio') }}" title="Regresar" class="aarrooww"><</a> </div>
    <!--|==========| Ticket | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p><img src="/img/add.png"> Ticket [ nuevo ]</p> </div>
    <!--|==========| Formulario | ↓ | inicio |==========|-->
    <form action="{{url('/ts/create')}}" name="frmTicketCreateAdm" method="post">
      @csrf
      <div class="row">
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
          </select>
        </div>
      </div>
      <label class="lblformuser">Detalles</label>
      <input type="text" class="form-control form-control-lg" name="txtDetalles" autocomplete="off" required>
      <div class="row">
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
          <select name="selUsuario" class="form-control form-control-lg" aria-label="Default select example">
          @php foreach ($usuarioo as $selusuarioo) {
            $uid = $selusuarioo->usuariocif;
            $uname = $selusuarioo->unombre;
          @endphp
            <option value="@php echo $uid; @endphp">@php echo $uname; @endphp</option>
          @php } @endphp
          </select>
        </div>
      </div>
      <input type="submit" class="btn-enviar-form" name="btnCrearTicketFromAdm" value="Enviar">
    </form>
  </div>



  @endsection