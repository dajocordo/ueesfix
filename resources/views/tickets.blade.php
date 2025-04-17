{{--| admin |--}}

@extends('building')
@section('title', 'Tickets')
@section('content')

  @include('tool.topnav')

  <div class="container">
    <!--|==========| Boton | ir a izquierda |==========|-->
    <div class="btn-left-pro"> <a href="{{ url('/home' )}}" title="Inicio" class="aarrooww"><</a> </div>
    <!--|==========| Tickets | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p>Tickets</p> </div>
    <!--|==========| Boton | ir a derecha |==========|-->
    <input type="button" class="btn-danger" value="PDF" id="btPrint" onclick="createPDF()" />
    <div class="btn-right-pro"> <a href="{{ url('/ticketnuevo' )}}" title="Nuevo" class="aarrooww">+</a></div>
    
    <div id="tab">
      <table class="table table-bordered">
        <thead>
          <th>Ticket</th>
          <th>Titulo</th>
          <th>Estado</th>
          <th>Modificado</th>
          <th colspan="3">Opciones</th>
        </thead>
        <tbody>
          @foreach ($tickets as $value)
            <tr>
              <td>{{ $value->id }}</td>
              <td>{{ $value->titulo }}</td> 
              <td>{{ $value->estado }}</td> 
              <td>{{ $value->fecha }}</td>
              <td><a class="optionsu" href="/t/{{ $value->id }}/edit"><img src="img/edit.png"></a></td>
              <td><a class="optionsu" href="/t/{{ $value->id }}"><img src="img/info.png"></a></td> 
              <td><a class="optionsu" href="/t/delete"><p class="btndelete">X</p></a></td>
            </tr>
          @endforeach
        </tbody>
      </table> 
    </div>
  </div>

  <script>
      function createPDF() {
          var sTable = document.getElementById('tab').innerHTML;

          var style = "<style>";
          style = style + "table {width: 100%;font: 17px Calibri;}";
          style = style + "table, th, td {border: solid 1px #DDD; border-collapse: collapse;";
            style = style + "padding: 2px 3px;text-align: center;}";
          style = style + "</style>";

          // CREAMOS EL OBJETO WINDOWS
          var win = window.open('', '', 'height=700,width=1000' );

          win.document.write('<html><head>');
          win.document.write('<title>Tickets UEESFIX</title>');   // <title> FOR PDF HEADER.
          win.document.write(style);          // AÑADIMOS ESTILO DENTRO DEL TITULO
          win.document.write('</head>');
          win.document.write('<body>');
          win.document.write(sTable);         // SE PONE EL CUERPO DE LA TABLA
          win.document.write('</body></html>');

          win.document.close(); 	// SE CIERRA LA VENTANA

          win.print();    // SE IMPRIME EL CONTENIDO
      }
  </script>

@endsection