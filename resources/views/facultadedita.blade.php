{{--| admin |--}}

@extends('building')
@section('title', 'Facultad edit')
@section('content')

  @include('tool.topnav') 

    <!--|====| Container | ↓ | → | inicio |====|-->
  <div class="container">
    <!--|==========| Boton | Regresar |==========|-->
    <div class="btn-left-pro"> <a href="{{ url('/f') }}" title="Regresar" class="aarrooww"><</a> </div>
    <!--|==========| Facultad | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p><img src="/img/edit.png"> Facultad [edit]</p> </div>
    <form action="{{url('/f/update/')}}" method="post" name="frmFacultadEdit">
      @csrf
      <input type="hidden" class="form-control form-control-lg" name="id" value="{{ $facultad->id }}" autocomplete="off" required>
      <label class="lblformuser">Nombre</label>
      <input type="text" class="form-control form-control-lg" name="valor" value="{{ $facultad->valor }}" autocomplete="off" required>
      <div class="d-grid gap-2">
        <input type="submit" class="btn btn-primary btn-lg" name="btnActualizar" value="Actualizar">
      </div>
    </form>
  </div>

@endsection
