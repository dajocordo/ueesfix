{{--| admin |--}}

@extends('building')

@section('title', 'Ticket info')

@section('content')

  @include('tool.topnav')

    <!--|====| Container | ↓ | → | inicio |====|-->
  <div class="container">
    <!--|==========| Boton | Regresar |==========|-->
    <div class="btn-left-pro"> <a href="{{ url('/t') }}" title="Regresar" class="aarrooww"><</a> </div>
    <!--|==========| Ticket | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p><img src="/img/info.png"> Ticket [ info ]</p> </div>
    <input type="button" class="btn-danger" value="PDF" id="btPrint" onclick="createPDF()" />

    <!--|====| Tabla Ticket [info ] | ↓ | inicio |====|-->
    <div id="tab">
    <table class="table table-bordered">  
    <tr>
      <th class="table-primary">Ticket</th>
      <td>@php echo $id; @endphp</td>
    </tr> 
    <tr> 
      <th class="table-primary">Titulo</th>
      <td>@php echo $titulo; @endphp </td>
    </tr>
    <tr> 
      <th class="table-primary">Detalles</th>
      <td>@php echo $detalles; @endphp</td>
    </tr>
    <tr> 
      <th class="table-primary">Gestion</th>
      <td>@php echo $gname; @endphp </td>
    </tr>
    <tr> 
      <th class="table-primary">Gestion Tipo</th>
      <td>@php echo $gtname; @endphp</td>
    </tr>
    <tr> 
      <th class="table-primary">Creado</th>
      <td>@php echo $creado; @endphp</td>
    </tr>
    <tr>
      <th class="table-primary">Modificado</th>
      <td>@php echo $modificado; @endphp</td>
    </tr>
    </table><!--|======| Tabla Ticket [info] | ↑ | fin |======|-->
    <!--|==========| Container | fin | ← | ↑ |==========|-->
  </div></div>

  <script>
      function createPDF() {
          var sTable = document.getElementById('tab').innerHTML;

          var style = "<style>";
          style = style + "table {width: 100%;font: 17px Calibri;}";
          style = style + "table, th, td {border: solid 1px #DDD; border-collapse: collapse;";
            style = style + "padding: 2px 3px;text-align: center;}";
          style = style + "</style>";

          // CREATE A WINDOW OBJECT.
          var win = window.open('', '', 'height=700,width=1000' );

          win.document.write('<html><head>');
          win.document.write('<title>Detalle Ticket UEESFIX</title>');   // <title> FOR PDF HEADER.
          win.document.write(style);          // ADD STYLE INSIDE THE HEAD TAG.
          win.document.write('</head>');
          win.document.write('<body>');
          win.document.write(sTable);         // THE TABLE CONTENTS INSIDE THE BODY TAG.
          win.document.write('</body></html>');

          win.document.close(); 	// CLOSE THE CURRENT WINDOW.

          win.print();    // PRINT THE CONTENTS.
      }
  </script>

@endsection