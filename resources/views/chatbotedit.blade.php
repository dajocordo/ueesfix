{{--| admin |--}}

@extends('building')

@section('title', 'Editar chatbot')

@section('content')

  @include('tool.topnav')

  <!--|====| Container | ↓ | → | inicio |====|-->
  <div class="container">
      <!--|==========| Boton | Regresar |==========|-->
      <div class="btn-left-pro"> <a href="{{ url('/ch') }}" title="Regresar" class="aarrooww"><</a> </div>
      <!--|==========| Roles | ↓ | titulo |==========|-->
      <div class="middle-pro"> <p>Editar Usuario</p> </div>
      
      <!--|==========| Formulario | ↓ | inicio |==========|-->
      <form action="{{url('/ch/update/')}}" method="post">
        @csrf
        <input type="hidden" class="form-control form-control-lg" name="ii" value="@php echo $ii; @endphp" autocomplete="off" required>
        <label class="lblformuser">Nombre</label>
        <input type="text" class="form-control form-control-lg" name="txtEditNombre" value="@php echo $name; @endphp" autocomplete="off" required>
        <label class="lblformuser">Apellido</label>
        <input type="text" class="form-control form-control-lg" name="txtEditApellido" value="@php echo $apellido; @endphp" autocomplete="off" required>
        <label class="lblformuser">Correo</label>
        <input type="mail" class="form-control form-control-lg" name="txtEditCorreo" value="@php echo $correo; @endphp" autocomplete="off" required>
        <div class="d-grid gap-2">
          <input type="submit" class="btn btn-primary btn-lg" name="btnActualizarU" value="Actualizar">
        </div>
      </form><!--|==========| Formulario | ↑ | fin |==========|-->
    <!--|==========| Container | fin | ← | ↑ |==========|-->
  </div>

@endsection
