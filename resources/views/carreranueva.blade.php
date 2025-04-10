@php
  session_start();
  if(isset($_SESSION['admin'])){
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>Carrera Nueva</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
 
  <link rel="stylesheet" type="text/css" href="/css/estail.css"> 
</head>
<body>
 @include('tool.topnav')

  <!--|====| Container | ↓ | → | inicio |====|--><div class="container">
    <!--|==========| Boton | Regresar |==========|-->
    <div class="btn-left-pro"> <a href="{{ url('/c') }}" title="Regresar" class="aarrooww"><</a> </div>
    <!--|==========| Carrera | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p><img src="/img/add.png"> Carrera [ nueva ]</p> </div>
    <!--|==========| Formulario | ↓ | inicio |==========|-->
    <form action="{{url('/c/create')}}" method="post" name="frmCreateCarrera">
      @csrf
      <div class="row"><!--|==========| Div | Row I | ↓ |==========|-->
        <div class="col-6">
          <label class="lblformuser">Nombre de la Carrera</label>
          <input type="text" class="form-control form-control-lg" name="txtNombreCarrera" autocomplete="off" required>
        </div>
        <div class="col-6">
          <!--|==========| Select Tipo | ↓ | inicio |==========|-->
          <label class="lblformuser">Tipo</label>
          <select name="selFacultad" class="form-control form-control-lg" aria-label="Default select example">
          @php foreach ($facultaad as $selfacultaad) {
                $facultadid = $selfacultaad->facultadid;
                $facultadname = $selfacultaad->facultad_name;
          @endphp
            <option value="@php echo $facultadid; @endphp">@php echo $facultadname; @endphp</option>
          @php } @endphp
          </select><!--|==========| Select Tipo | ↑ | fin |==========|-->
      </div><!--|==========| Div | Row I | ↑ |==========|--></div>
      <input type="submit" class="btn-enviar-form" name="btnEnviarCarrera" value="Crear">
    <!--|==========| Formulario | ↑ | fin |==========|--></form>
  <!--|==========| Container | fin | ← | ↑ |==========|--></div>

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
            <a href="{{ url('/logout') }}" type="button" class="modal-btn-cerrar">Si</a>
        </div>
      </div>
    </div>
  </div><!--|======| New Modal - CerrarSesion |fin| ↑ |======|--> 
</body>
</html>
@php  } else{
      echo "<script>
            alert('Debes iniciar sesión primero');
            window.location.href='/index';
          </script>";
}  @endphp