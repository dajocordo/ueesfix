{{--| admin |--}}

@extends('building')
@section('title', 'Nueva gestion tipo')
@section('content')

 @include('tool.topnav')

  <div class="container">
    <!--|==========| Boton | Regresar |==========|-->
    <div class="btn-left-pro"> <a href="{{ url('/gestion-tipo') }}" title="Regresar" class="aarrooww"><</a> </div>
    <!--|==========| Gestion | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p><img src="/img/add.png"> Gestion Tipo [ nuevo ]</p> </div>

    <form action="{{ url('/gestion-tipo/store') }}" method="post">
      @csrf
      <label class="lblformuser">Nombre</label>
      <input type="text" class="form-control form-control-lg" name="valor" autocomplete="off" required>
      <div class="d-grid gap-2">
        <input type="submit" class="btn btn-primary btn-lg" name="btnEnviarGestionTipo" value="Crear">
      </div>
    </form>
  </div>
 
@endsection