{{--| admin |--}}

@extends('building')

@section('title', 'Info chatbot')

@section('content')

  @include('tool.topnav')

    <!--|====| Container | ↓ | → | inicio |====|-->
  <div class="container">
      <!--|==========| Boton | Regresar |==========|-->
      <div class="btn-left-pro"> <a href="{{ url('/ch') }}" title="Regresar" class="aarrooww"><</a> </div>
      <!--|==========| Roles | ↓ | titulo |==========|-->
      <div class="middle-pro"> <p>Chatbot [info]</p> </div>

      <!--|====| Tabla Usuario [info ]| ↓ | inicio |====|-->
      <table class="table table-bordered">  
      <tr>
        <th class="table-primary">No. </th>
        <td>@php echo $id; @endphp</td>
      </tr> 
      <tr> 
        <th class="table-primary">Nombre</th>
        <td>@php echo $name; @endphp </td>
      </tr>
      <tr> 
        <th class="table-primary">Apellidon</th>
        <td>@php echo $apellido; @endphp</td>
      </tr>
      <tr>
        <th class="table-primary">Correo</th>
        <td>@php echo $correo; @endphp</td>
      </tr>
      <tr> 
        <th class="table-primary">Creado</th>
        <td>@php echo $creado; @endphp</td>
      </tr>
      <tr>
        <th class="table-primary">Modificado</th>
        <td>@php echo $modificado; @endphp</td>
      </tr>
    </table><!--|======| Tabla Usuario [info] | ↑ | fin |======|-->
    <!--|==========| Container | fin | ← | ↑ |==========|-->
  </div>

@endsection