{{--| admin |--}}

@extends('building')

@section('title', 'Crear nota')

@section('content')

  <!--|==========| Barra de navegacion | ↓ | inicio |==========|-->
  <div class="topnav" id="myTopnav">
    <a href="inicio">Inicio</a>
    <a href="perfil">Perfil</a>
    <a href="#CerrarSesion" data-bs-toggle="modal" title="Salir">Salir</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div> <!--|==========| Barra de navegacion | ↑ | fin |==========|-->

  <!--|====| Container | ↓ | → | inicio |====|-->
  <div class="container">
      <!--|==========| Bienvenida | ↓ |==========|-->
      <h1 id="greeting">Agregar Nota</h1>
      
      <!--|==========| Formulario | ↓ | inicio |==========|-->
      <form action="{{ url('/nt/create/') }}" name="frmSoporteTipoEdit" method="post">
        @csrf
        <div class="row">
          <div class="col-6">
            <label class="lblformuser">Ticket</label><br>
            <input type="text" class="form-control form-control-lg" value="@php echo $id; @endphp" name="txtTicket" autocomplete="off" required>    
          </div>
          <div class="col-6">
            <label class="lblformuser">CIF</label><br>
            <input type="text" class="form-control form-control-lg" name="txtCIF" value="@php echo $usuario; @endphp" autocomplete="off" required>
          </div>
        </div>
        <input type="hidden" class="form-control" name="txtSoporte" value="@php echo $soporte; @endphp" autocomplete="off" required>
        
      @php
      if(isset($_SESSION['student'])){
        $Validar = 1;
      @endphp
          <input type="hidden" class="form-control" name="txtValidar" value="@php echo $Validar; @endphp" autocomplete="off" required>
      @php } @endphp

        <label class="lblformuser">Nota</label>
        <input type="text" class="form-control form-control-lg" name="txtNota" value="" autocomplete="off" required>
        <input type="submit" class="btn-enviar-form" name="btnCreaNotaUsr" value="Enviar">
      </form><!--|==========| Formulario | ↑ | fin |==========|-->
    <!--|==========| Container | fin | ← | ↑ |==========|-->
  </div>

@endsection
