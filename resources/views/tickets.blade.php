@php
  session_start();
  if(isset($_SESSION['admin'])){
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>Tickets</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
 
  <link rel="stylesheet" type="text/css" href="/css/estail.css">    
</head>
<body>
  <!--|==========| Barra de navegacion | ↓ | inicio |==========|-->
  @include('tool.topnav')
<!--|=========| Barra de navegacion | ← | fin |=========|-->

  <!--|==========| Container | ↓ | inicio |==========|-->
  <div class="container">
    <!--|==========| Boton | ir a izquierda |==========|-->
    <div class="btn-left-pro"> <a href="{{ url('/home' )}}" title="Inicio" class="aarrooww"><</a> </div>
    <!--|==========| Tickets | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p>Tickets</p> </div>
    <!--|==========| Boton | ir a derecha |==========|-->
    <input type="button" class="btn-danger" value="PDF" id="btPrint" onclick="createPDF()" />
    <div class="btn-right-pro"> <a href="{{ url('/ticketnuevo' )}}" title="Nuevo" class="aarrooww">+</a></div>
    
    <!--|==========| Tabla Ticket | ↓ | inicio |==========|-->
    <div id="tab">
    <table class="table table-bordered">
      <thead>
        <th>Ticket</th>
        <th>Titulo</th>
        <th>Modificado</th>
        <th colspan="3">Opciones</th>
      </thead>
      @php
      foreach ($tickett as $tickt) {
        $id = $tickt->ticketid;
        $titulo = $tickt->ticket_titulo;
        $fecha = $tickt->updated_at;
      @endphp
      <tbody>
        <td>@php echo $id; @endphp</td>
        <td>@php echo $titulo; @endphp</td> 
        <td>@php echo $fecha; @endphp</td>
        <td><a class="optionsu" href="/t/@php echo $id; @endphp/edit"><img src="img/edit.png"></a></td>
        <td><a class="optionsu" href="/t/@php echo $id; @endphp"><img src="img/info.png"></a></td> 
        <td><a class="optionsu" href="/t/delete"><p class="btndelete">X</p></a></td>
      </tbody>  
     @php } @endphp  
    </table> <!--|==========| Tabla Ticket | ↑ | fin |==========|-->
  </div></div>
  <!--|==========| Container | fin | ↑ |==========|-->

  <!--|========| New Modal - CerrarSesion |inicio| ↓ |========|-->
  <div class="modal fade" id="CerrarSesion" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Cerrar Sesion</h5>
          <a class="modal-btn-closee" data-bs-dismiss="modal" aria-label="Close">X</a>
        </div>
          <div class="modal-body"> ¿Desea salir de la plataforma? </div>
        <div class="modal-footer">
            <a class="modal-btn-cerrar" data-bs-dismiss="modal">No</a>
            <a href="logout" type="button" class="modal-btn-cerrar">Si</a>
        </div>
      </div>
    </div>
  </div><!--|======| New Modal - CerrarSesion |fin| ↑ |======|--> 
</body>
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
</html>
@php  } else{
      echo "<script>
            alert('Debes iniciar sesión primero');
            window.location.href='/index';
          </script>";
}  @endphp
