{{--| admin |--}}

@extends('building')

@section('title', 'Nueva gestion tipo')

@section('content')

 @include('tool.topnav')

  <!--|====| Container | ↓ | → | inicio |====|-->
  <div class="container">
      <!--|==========| Boton | Regresar |==========|-->
      <div class="btn-left-pro"> <a href="{{ url('/gt') }}" title="Regresar" class="aarrooww"><</a> </div>
      <!--|==========| Gestion | ↓ | titulo |==========|-->
      <div class="middle-pro"> <p><img src="/img/add.png"> Gestion Tipo [ nuevo ]</p> </div>

      <!--|==========| Formulario | ↓ | inicio |==========|-->
      <form action="{{ url('/gt/create') }}" method="post">
        @csrf
        <label class="lblformuser">Nombre</label>
        <input type="text" class="form-control form-control-lg" name="txtNombreGestionTipo" autocomplete="off" required>
        
        <div class="d-grid gap-2">
          <input type="submit" class="btn btn-primary btn-lg" name="btnEnviarGestionTipo" value="Crear">
        </div>
      </form><!--|==========| Formulario | ↑ | fin |==========|-->
    <!--|==========| Container | fin | ← | ↑ |==========|-->
  </div>
 
@endsection