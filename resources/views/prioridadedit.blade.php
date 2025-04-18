{{--| admin |--}}
@extends('building')
@section('title', 'Editar prioridad')
@section('content')

  @include('tool.topnav')

  <div class="container">
    <!--|==========| Boton | Regresar |==========|-->
    <div class="btn-left-pro"> <a href="{{ url('/e') }}" title="Regresar" class="aarrooww"><</a> </div>
    <!--|==========| Roles | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p><img src="/img/edit.png"> Estado [ edit ]</p> </div>
      
    <form action="{{url('/p/update/')}}" method="post" name="frmEditPrioridad">
      @csrf
      <input type="hidden" class="form-control form-control-lg" name="ii" value="@php echo $ii; @endphp" autocomplete="off" required>
      <label class="lblformuser">Nombre</label>
      <input type="text" class="form-control form-control-lg" name="txtEditNombre" value="@php echo $name; @endphp" autocomplete="off" required>
    
      <div class="d-grid gap-2">
        <input type="submit" class="btn btn-primary btn-lg" name="btnActualizarP" value="Actualizar">
      </div>
    </form>
  </div>

@endsection