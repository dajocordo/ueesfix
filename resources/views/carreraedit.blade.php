{{--| admin |--}}

@extends('building')

@section('title', 'Carrera editar')

@section('content')

  @include('tool.topnav')

    <!--|====| Container | ↓ | → | inicio |====|-->
  <div class="container">
    <!--|==========| Boton | Regresar |==========|-->
    <div class="btn-left-pro">
      <a href="{{ url('/c') }}" title="Regresar" class="aarrooww"><</a>
    </div>
    <!--|==========| Estado | ↓ | titulo |==========|-->
    <div class="middle-pro">
      <p><img src="/img/edit.png"> Carrera [edit]</p>
    </div>
    
      <!--|==========| Formulario | ↓ | inicio |==========|-->
    <form action="{{url('/c/update/')}}" method="post">
      @csrf
      <input type="hidden" class="form-control form-control-lg" name="ii" value="@php echo $ii; @endphp" autocomplete="off" required>

      <div class="row"><!--|==========| Div | Row I | ↓ |==========|-->
        <div class="col-6">
          <label class="lblformuser">Nombre</label>
          <input type="text" class="form-control form-control-lg" name="txtEditNombre" value="@php echo $name; @endphp" autocomplete="off" required>
        </div>
        <div class="col-6">
          <!--|==========| Select Tipo | ↓ | inicio |==========|-->
          <label class="lblformuser">Facultad</label>
          <select name="selFacultadCa" class="form-control form-control-lg" aria-label="Default select example">
            <option value="@php echo $facuid; @endphp">@php echo $facuname; @endphp</option>
          @php foreach ($facultad_diferent as $selfacultadSelectt) {
                $facultadid = $selfacultadSelectt->facultadid;
                $facultadname = $selfacultadSelectt->facultad_name;
          @endphp
            <option value="@php echo $facultadid; @endphp">@php echo $facultadname; @endphp</option>
          @php } @endphp
          </select><!--|==========| Select Tipo | ↑ | fin |==========|-->
        </div><!--|==========| Div | Row I | ↑ |==========|-->
      </div>


      <div class="d-grid gap-2">
        <input type="submit" class="btn btn-primary btn-lg" name="btnActualizar" value="Actualizar">
      </div>
    </form><!--|==========| Formulario | ↑ | fin |==========|-->
    <!--|==========| Container | fin | ← | ↑ |==========|-->
  </div>

@endsection