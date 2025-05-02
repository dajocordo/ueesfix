{{--| admin |--}}

@extends('building')
@section('title', 'Carrera editar')
@section('content')

  @include('tool.topnav')

    <!--|====| Container | ↓ | → | inicio |====|-->
  <div class="container">
    <!--|==========| Boton | Regresar |==========|-->
    <div class="btn-left-pro">
      <a href="{{ url('/carrera') }}" title="Regresar" class="aarrooww"><</a>
    </div>
    <!--|==========| Estado | ↓ | titulo |==========|-->
    <div class="middle-pro">
      <p><img src="/img/edit.png"> Carrera [edit]</p>
    </div>
    <form action="{{ url('/carrera/update') }}" method="post">
      @csrf
      <input type="hidden" class="form-control form-control-lg" name="id" value="{{ $carrera->id }}" autocomplete="off" required>
      <div class="row">
        <div class="col-6">
          <label class="lblformuser">Nombre</label>
          <input type="text" class="form-control form-control-lg" name="name" value="{{ $carrera->valor }}" autocomplete="off" required>
        </div>
        <div class="col-6">
          <label class="lblformuser">Facultad</label>
          <select name="facultad" class="form-control form-control-lg" required>
            <option value=""></option>
            @foreach ($facultad as $value)
              <option value="{{ $value->id }}" {{ $value->id == $carrera->id_origin ? "selected" : "" }}>{{ $value->name }}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="d-grid gap-2">
        <input type="submit" class="btn btn-primary btn-lg" name="btnActualizar" value="Actualizar">
      </div>
    </form>
  </div>

@endsection