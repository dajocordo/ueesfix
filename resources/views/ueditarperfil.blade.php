{{--| usuario |--}}

@extends('building')
@section('title', 'editar usuario')
@section('content')

  <!--|==========| Barra de navegacion | ↓ | inicio |==========|-->
  <div class="topnav" id="myTopnav">
    <a href="dashboard">Inicio</a>
    <a href="#CerrarSesion" data-bs-toggle="modal" title="Salir">Salir</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
  
  <!-- {{ $id=3 }} -->

  <div class="container">
    <!--|==========| Boton | Regresar |==========|-->
    <div class="btn-left-pro"> <a href="{{ url('/up') }}" title="Regresar" class="aarrooww"><</a> </div>
    <!--|==========| Ticket | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p><img src=""> Editar [ Usuario ]</p> </div>
    
    <!--|==========| Formulario | ↓ | inicio |==========|-->
    <form action="{{url('/up/update')}}" method="post"> 
      @csrf
      <input type="hidden" class="form-control form-control-lg" name="ii" value="@php echo $ii; @endphp" autocomplete="off" required>
      <label class="lblformuser">Nombre</label>
      <input type="text" class="form-control form-control-lg" name="txtEditNombre" value="@php echo $name; @endphp" autocomplete="off" required>
      <label class="lblformuser">Apellido</label>
      <input type="text" class="form-control form-control-lg" name="txtEditApellido" value="@php echo $apellido; @endphp" autocomplete="off" required>
      <label class="lblformuser">Correo</label>
      <input type="email" class="form-control form-control-lg" name="txtEditCorreo" value="@php echo $correo; @endphp" autocomplete="off" required>
      <label class="lblformuser">Telefono</label>
      <input type="number" class="form-control form-control-lg" name="txtEditTelefono" value="@php echo $telefono; @endphp" autocomplete="off" required>     
      <div class="d-grid gap-2">
        <input type="submit" class="btn btn-primary btn-lg" name="btnActualizarSoporte" value="Actualizar" >
      </div>
    </form><!--|==========| Formulario | ↑ | fin |==========|-->
  </div>

@endsection