{{--| admin |--}}

@extends('building')

@section('title', 'Nueva prioridad')

@section('content')

 @include('tool.topnav')

  <!--|====| Container | ↓ | → | inicio |====|-->
  <div class="container">
    <!--|==========| Boton | Regresar |==========|-->
    <div class="btn-left-pro"> <a href="{{ url('/p') }}" title="Regresar" class="aarrooww"><</a> </div>
    <!--|==========| Prioridad | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p><img src="/img/add.png"> Prioridad [ nueva ]</p> </div>
    <!--|==========| Formulario | ↓ | inicio |==========|-->
    <form action="{{url('/p/create')}}" name="frmPrioridadCreate" method="post">
      @csrf
      <label class="lblformuser">Nombre de prioridad</label>
      <input type="text" class="form-control form-control-lg" name="txtNombrePrioridad" autocomplete="off" required>
      <div class="d-grid gap-2">
        <input type="submit" class="btn btn-primary btn-lg" name="btnEnviarPriori" value="Enviar">
      </div>
    </form><!--|==========| Formulario | ↑ | fin |==========|-->
  <!--|==========| Container | fin | ← | ↑ |==========|-->
  </div>

@endsection