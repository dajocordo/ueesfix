{{--| admin |--}}
@extends('building')
@section('title', 'Nuevo soporte tipo')
@section('content')

 @include('tool.topnav')

  <div class="container">
    <!--|==========| Boton | Regresar |==========|-->
    <div class="btn-left-pro"> <a href="{{ url('/st') }}" title="Regresar" class="aarrooww"><</a> </div>
    <!--|==========| Soporte Tipo | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p><img src="/img/add.png"> Soporte Tipo [ nuevo ]</p> </div>
    <!--|==========| Formulario | ↓ | inicio |==========|-->
    <form action="{{url('/st/create')}}" name="frmSoporteTipoCreate" method="post">
      @csrf
      <label class="lblformuser">Nombre de soporte tipo</label>
      <input type="text" class="form-control form-control-lg" name="txtSoporteTipoNombre" autocomplete="off" required>
      <div class="d-grid gap-2">
        <input type="submit" class="btn btn-primary btn-lg" name="btnEnviarSoporteTipo" value="Enviar">
      </div>
    </form><!--|==========| Formulario | ↑ | fin |==========|-->
  </div>

@endsection