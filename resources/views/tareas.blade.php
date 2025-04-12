{{--| support |--}}

@extends('building')
@section('title', 't. pendiente')
@section('content')

  <link rel="stylesheet" type="text/css" href="/css/soportestyle.css">    

  <!--|==========| Barra de navegacion | ↓ | inicio |==========|-->
  <div class="topnav" id="myTopnav">
    <a href="{{ url('/dashboard') }}">Tareas</a>
    <a href="#CerrarSesion" data-bs-toggle="modal" title="Salir">Salir</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div><!--|=========| Barra de navegacion | ← | fin |=========|-->

  <div class="container">
    <!--|==========| Boton | ir a izquierda |==========|-->
    <div class="btn-left-pro"> <a href="" title="Inicio" class="aarrooww"><</a> </div>
    <!--|==========| Tickets | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p>Tareas</p> </div>
    <!--|==========| Boton | ir a derecha |==========|-->
    <div class="btn-right-pro"> <a href="" title="Nuevo" class="aarrooww">></a></div>

    <!--|==========| Tabla Ticket (nuevo) | ↓ | inicio |==========|-->
    <table class="table table-bordered">
      <thead>
        <th>Ticket</th>
        <th>Estado</th>
        <th>Titulo</th>
        <th>Modificado</th>
        <th colspan="2">Opciones</th>
      </thead>
      @php // FOREACH TABLA TICKET
            foreach ($tickeetpendiente as $tickeetpendientee) {
              $id = $tickeetpendientee->ticketid;
              $titulo = $tickeetpendientee->ticket_titulo;
              $estadoid = $tickeetpendientee->festadoid;
              $fecha = $tickeetpendientee->updated_at;
              $testadoo_show = DB::SELECT('SELECT * FROM estado WHERE estadoid = ?',[$estadoid]);

                // FOREACH TABLA ESTADO
                foreach($testadoo_show as $testadoo_queri){
                $estadoid = $testadoo_queri->estadoid;
                $state = 2;
                $estado = $testadoo_queri->estado_name;

                if($estadoid == $state){
      @endphp
      <tbody>
        <td>@php echo $id; @endphp</td>
        <td class="table-danger">@php echo $estado; @endphp</td>
        <td>@php echo $titulo; @endphp</td>
        <td>@php echo $fecha; @endphp</td>
        <td><a class="optionsu" href="/t/@php echo $id; @endphp"><img src="/img/info.png"></a></td> 
        <td><a class="optionsu" href="/t/@php echo $id; @endphp/edit"><img src="/img/edit.png"></a></td> 
      </tbody>  
     @php       }
              }
            } 
      @endphp  
    </table><!--|==========| Tabla Ticket (nuevo) | ↑ | fin |==========|-->

  </div>

@endsection