{{--| admin |--}}
@extends('building')
@section('title', 'Ticket nuevo')
@section('content')

  @include('tool.topnav')

  <!--|==========| Container | ↓ | inicio |==========|-->
  <div class="container">
    <!--|==========| Boton | ir a izquierda |==========|-->
    <div class="btn-left-pro"> <a href="{{ url('/home') }}" title="Inicio" class="aarrooww"><</a> </div>
    <!--|==========| Tickets | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p>Nuevo</p> </div>
    <!--|==========| Boton | ir a derecha |==========|-->
    <div class="btn-right-pro"> <a href="{{ url('/ticketnuevo') }}" title="Nuevo" class="aarrooww">></a></div>

    <!--|==========| Tabla Ticket (nuevo) | ↓ | inicio |==========|-->
    <table class="table table-bordered">
      <thead>
        <th>Ticket</th>
        <th>Estado</th>
        <th>Titulo</th>
        <th>Modificado</th>
        <th colspan="3">Opciones</th>
      </thead>
      @php // FOREACH TABLA TICKET
            foreach ($tickeetnuevo as $tickeetnuevoo) {
              $id = $tickeetnuevoo->ticketid;
              $titulo = $tickeetnuevoo->ticket_titulo;
              $estadoid = $tickeetnuevoo->estadolid;
              $fecha = $tickeetnuevoo->updated_at;
              $testadoo_show = DB::SELECT('SELECT * FROM estado WHERE estadoid = ?',[$estadoid]);

                // FOREACH TABLA ESTADO
                foreach($testadoo_show as $testadoo_queri){
                $estadoid = $testadoo_queri->estadoid;
                $state = 1;
                $estado = $testadoo_queri->estado_name;

                if($estadoid == $state){
      @endphp
      <tbody>
        <td>@php echo $id; @endphp</td>
        <td class="table-primary">@php echo $estado; @endphp</td>
        <td>@php echo $titulo; @endphp</td>
        <td>@php echo $fecha; @endphp</td>
        <td><a class="optionsu" href="/t/@php echo $id; @endphp/edit"><img src="img/edit.png"></a></td>
        <td><a class="optionsu" href="/t/@php echo $id; @endphp"><img src="img/info.png"></a></td> 
        <td><a class="optionsu" href="/t/delete"><p class="btndelete">X</p></a></td>
      </tbody>  
     @php       }
              }
            } 
      @endphp  
    </table><!--|==========| Tabla Ticket (nuevo) | ↑ | fin |==========|-->
  </div>

@endsection