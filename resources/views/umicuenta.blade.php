{{--| usuario |--}}

@extends('building')
@section('title', 'mi cuenta')
@section('content')

  <link rel="stylesheet" type="text/css" href="/css/usuariostyle.css"> 

  <!--|==========| Barra de navegacion | ↓ | inicio |==========|-->
  <div class="topnav" id="myTopnav">
    <a href="dashboard">Inicio</a>
    <a href="#CerrarSesion" data-bs-toggle="modal" title="Salir">Salir</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
  <div class="container">
    <!--|==========| Boton | Regresar |==========|-->
    <div class="btn-left-pro"> <a href="{{ url('/up') }}" title="Regresar" class="aarrooww"><</a> </div>
    <!--|==========| Usuario | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p><img src="/img/info.png"> Mi Cuenta</p> </div>
      @csrf
      @php   $soporte_show = DB::SELECT('SELECT * FROM usuario WHERE usuariocif = ?',[$_SESSION['student']]); 
            foreach ($soporte_show as $soporteshoow) {
            $id = $soporteshoow->usuariocif;
            $sname = $soporteshoow->usuario_name;
            $apellido = $soporteshoow->usuario_apellido;
            $correo = $soporteshoow->usuario_correo;
            $telefono = $soporteshoow->usuario_tel;
            $creado = $soporteshoow->created_at;
            $modificado = $soporteshoow->updated_at;
            
         
      }
      @endphp
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
      <th class="table-primary">Apellido</th>
      <td>@php echo $apellido; @endphp</td>
    </tr>
    <tr>
      <th class="table-primary">Correo</th>
      <td>@php echo $correo; @endphp</td>
    </tr>
    <tr>
      <th class="table-primary">Tel</th>
      <td>@php echo $telefono; @endphp</td>
    </tr>
    <tr> 
      <th class="table-primary">Creado</th>
      <td>@php echo $creado; @endphp</td>
    </tr>
    <tr>
      <th class="table-primary">Modificado</th>
      <td>@php echo $modificado; @endphp</td>
    </tr>
    </table>
  <!--|==========| Container | fin | ← | ↑ |==========|-->
</div>

@endsection