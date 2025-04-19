@extends('building')
@section('title', 'Facultad')
@section('content')

  @include('tool.topnav') 

  <!--|====| Container | ↓ | → | inicio |====|-->
  <div class="container">
    <!--|==========| Boton | Regresar |==========|-->
    <div class="btn-left-pro"> <a href="{{ url('/f') }}" title="Regresar" class="aarrooww"><</a> </div>
    <!--|==========| Facultad | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p><img src="/img/add.png"> Facultad [new]</p> </div>
    <!--|==========| Formulario | ↓ | inicio |==========|-->
    <form action="{{url('/f/create')}}" method="post" name="frmCrearFacultad">
      @csrf
      <label class="lblformuser">Nombre</label>
      <input type="text" class="form-control form-control-lg" name="valor" autocomplete="off" required>
      <div class="d-grid gap-2">
        <input type="submit" class="btn btn-primary btn-lg" name="btnEnviarFacultad" value="Enviar">
      </div>
    </form>
  </div>

@endsection