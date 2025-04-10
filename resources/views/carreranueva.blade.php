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
    <!--|==========| Formulario | ↓ | inicio |==========|-->
    <form action="{{url('/c/create')}}" method="post" name="frmCreateCarrera">
      @csrf
      <div class="row"><!--|==========| Div | Row I | ↓ |==========|-->
        <div class="col-6">
          <label class="lblformuser">Nombre de la Carrera</label>
          <input type="text" class="form-control form-control-lg" name="txtNombreCarrera" autocomplete="off" required>
        </div>
        <div class="col-6">
          <!--|==========| Select Tipo | ↓ | inicio |==========|-->
          <label class="lblformuser">Tipo</label>
          <select name="selFacultad" class="form-control form-control-lg" aria-label="Default select example">
          @php foreach ($facultaad as $selfacultaad) {
                $facultadid = $selfacultaad->facultadid;
                $facultadname = $selfacultaad->facultad_name;
          @endphp
            <option value="@php echo $facultadid; @endphp">@php echo $facultadname; @endphp</option>
          @php } @endphp
          </select><!--|==========| Select Tipo | ↑ | fin |==========|-->
      </div><!--|==========| Div | Row I | ↑ |==========|--></div>
      <input type="submit" class="btn-enviar-form" name="btnEnviarCarrera" value="Crear">
    <!--|==========| Formulario | ↑ | fin |==========|--></form>
  <!--|==========| Container | fin | ← | ↑ |==========|-->
  </div>

@endsection