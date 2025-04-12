{{--| usuario |--}}

@extends('building')
@section('title', 'tickets')
@section('content')

  <!--|==========| Barra de navegacion | ↓ | inicio |==========|-->
  @include('tool.topnav')
  <!--|=========| Barra de navegacion | ← | fin |=========|-->

  <div class="container">
    <!--|==========| Boton | ir a izquierda |==========|-->
    <div class="btn-left-pro"> <a href="{{ url('/inicio' )}}" title="Inicio" class="aarrooww"><</a> </div>
    <!--|==========| Tickets | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p>Mis Tickets</p> </div>
    <!--|==========| Boton | ir a derecha |==========|-->
    <div class="btn-right-pro"> <a href="{{ url('/ticketn' )}}" title="Nuevo" class="aarrooww">+</a> </div>
    
    <!--|==========| Tabla Ticket | ↓ | inicio |==========|-->
    <table class="table table-bordered">
      <thead>
        <th>Ticket</th>
        <th>Titulo</th>
        <th>Modificado</th>
        <th>Detalles</th>
      </thead>
      @php
      $tickett = DB::SELECT('SELECT * FROM ticket WHERE fusuarioid = ?',[$_SESSION['student']]);

      foreach ($tickett as $tickt) {
        $id = $tickt->ticketid;
        $titulo = $tickt->ticket_titulo;
        $fecha = $tickt->updated_at;
      @endphp
      <tbody>
        <td>@php echo $id; @endphp</td>
        <td>@php echo $titulo; @endphp</td> 
        <td>@php echo $fecha; @endphp</td>
        <td><a class="optionsu" href="/ticketnvi/@php echo $id; @endphp"><img src="img/info.png"></a></td> 
      </tbody>  
     @php } @endphp  
    </table> <!--|==========| Tabla Ticket | ↑ | fin |==========|-->
  </div>

@endsection