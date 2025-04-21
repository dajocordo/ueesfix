{{--| admin |--}}

@extends('building')
@section('title', 'Carrera nueva')
@section('content')

  @include('tool.topnav')

  <!--|====| Container | ↓ | → | inicio |====|-->
  <div class="container">
    <!--|==========| Boton | Regresar |==========|-->
    <div class="btn-left-pro"> <a href="{{ url('/c') }}" title="Regresar" class="aarrooww"><</a> </div>
    <!--|==========| Carrera | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p><img src="/img/add.png"> Carrera [ nueva ]</p> </div>

    <form action="{{url('/c/create')}}" method="post" name="frmCreateCarrera">
      @csrf
      <div class="row">
        <div class="col-6">
          <label class="lblformuser">Nombre de la Carrera</label>
          <input type="text" class="form-control form-control-lg" name="valor" autocomplete="off" required>
        </div>
        <div class="col-6">
          <label class="lblformuser">Facultad</label>
          <select name="facultad" class="form-control form-control-lg" required>
            @foreach ($facultad as $value)
              <option value="{{ $value->id }}">{{ $value->name }}</option>
            @endforeach
          </select>
        </div>
      </div>
      <input type="submit" class="btn-enviar-form" name="btnEnviarCarrera" value="Crear">
    </form>
  </div>

@endsection