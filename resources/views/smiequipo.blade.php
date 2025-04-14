{{--| support |--}}

@extends('building')
@section('title', 'soporte equipo')
@section('content')
  
  <link rel="stylesheet" type="text/css" href="/css/soportestyle.css" />

  <div class="container">
      @php  $supportt = DB::SELECT('SELECT * FROM soporte WHERE soportecif = ?',[$_SESSION['support']]); 
            foreach ($supportt as $suporte) {
              $id = $suporte->soportecif;
              $name = $suporte->soporte_name;

    @endphp
    <!--|==========| Boton | ir a izquierda |==========|-->
     <div class="btn-left-pro"> <a href="/sperfil" title="Regresar" class="aarrooww"><img src="/img/back.png"></a> </div>
    <!--|==========| Nuevo | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p>Mi Equipo</p> </div>
    <!--|==========| Boton | ir a derecha |==========|-->
    <div class="btn-right-pro"> <a href="/sp/@php echo $id; @endphp/edit" title="Nuevo" class="aarrooww">></a></div>
 @php
      }
      @endphp
    <!--|==========| Tabla Usuarios | ↓ | inicio |==========|-->
    <table class="table table-bordered">
      <thead>
        <th>No.</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Correo</th>
        <th colspan="1">Opcion</th>
      </thead>
      @php
      $num=1;
      foreach ($soport as $sopor) {
        $id = $sopor->soportecif;
        $sopnombre = $sopor->soporte_name;
        $sopapellido = $sopor->soporte_apellido;
        $sopcorreo = $sopor->soporte_mail;

      @endphp
      <tbody><td>@php echo $num++; @endphp</td>
        <td>@php echo $sopnombre; @endphp</td>
        <td>@php echo $sopapellido; @endphp</td>
        <td>@php echo $sopcorreo; @endphp</td> 
        <td><a class="optionsu" href="/sp/@php echo $id; @endphp;"><img src="img/info.png"></a></td> 
      </tbody>  
     @php } @endphp  
    </table> <!--|==========| Tabla Usuarios | ↑ | fin |==========|-->
  </div>


@endsection