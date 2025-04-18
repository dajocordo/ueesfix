{{--| admin |--}}

@extends('building')
@section('title', 'Ticket nuevo')
@section('content')

  <!--|==========| Barra de navegacion | ↓ | inicio |==========|-->
  <div class="topnav" id="myTopnav">
    <a href="dashboard">Inicio</a>
    <a href="">Perfil</a>
    <a href="#CerrarSesion" data-bs-toggle="modal" title="Salir">Salir</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>

  <div class="container">
    <!--|==========| Boton | Regresar |==========|-->
    <div class="btn-left-pro">
      <a href="{{ url('/home') }}" title="Regresar" class="aarrooww"><</a>
    </div>
    <!--|==========| Ticket | ↓ | titulo |==========|-->
    <div class="middle-pro"> 
      <p><img src="/img/add.png">Ticket [new]</p>
    </div>

    <form action="{{url('/t/create')}}" name="frmTicketCreateAdm" method="post">
      @csrf
      <div class="row">
        <div class="col-8">
          <label class="lblformuser">Título</label>
          <input type="text" class="form-control form-control-lg" name="txtTitulo" autocomplete="off" required>
        </div>
        <div class="col-4">
          <label class="lblformuser">Prioridad</label>
          <select name="selPriori" class="form-control form-control-lg" aria-label="Default select example">
            @foreach ($data['prioridad'] as $value)
              <option value="{{ $value->id }}">{{ $value->name }}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-9">
          <label class="lblformuser">Detalles</label>
          <input type="text" class="form-control form-control-lg" name="txtDetalles" autocomplete="off" required>
        </div>
        <div class="col-3">
          <label class="lblformuser">Usuario</label>
          <select name="selUsuario" class="form-control form-control-lg" aria-label="Default select example">
            @foreach ($data['usuario'] as $value)
              <option value="{{ $value->id }}">{{ $value->name }}</option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="row">
        <div class="col-8">
          <label class="lblformuser">Gestion</label>
          <select name="selGestion" class="form-control form-control-lg" aria-label="Default select example">
            @foreach ($data['gestion'] as $value)
              <option value="{{ $value->id }}">{{ $value->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="col-4">
          <label class="lblformuser">Gestion Tipo</label>
          <select name="selGestionTipo" class="form-control form-control-lg" aria-label="Default select example">
            @foreach ($data['gestionTipo'] as $value)
              <option value="{{ $value->id }}">{{ $value->name }}</option>
            @endforeach
          </select>
        </div>
      </div>

      <input type="submit" class="btn-enviar-form" name="btnCrearTicketFromAdm" value="Enviar">
    </form>
  </div>
  
@endsection