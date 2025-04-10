<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>Usuario Tipo nuevo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
 
  <link rel="stylesheet" type="text/css" href="/css/estail.css"> 
</head>
<body>
 @include('tool.topnav')

  <!--|====| Container | ↓ | → | inicio |====|--><div class="container">
    <!--|==========| Boton | Regresar |==========|-->
    <div class="btn-left-pro"> <a href="{{ url('/ut') }}" title="Regresar" class="aarrooww"><</a> </div>
    <!--|==========| Usuario Tipo | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p><img src="/img/add.png"> Usuario Tipo [ nuevo ]</p> </div>

    <!--|==========| Formulario | ↓ | inicio |==========|-->
    <form action="{{url('/ut/create')}}" method="post">
      @csrf
      <label class="lblformuser">Nombre</label>
      <input type="text" class="form-control form-control-lg" name="txtNombreUsuarioTipo" autocomplete="off" required>
      
      <div class="d-grid gap-2">
        <input type="submit" class="btn btn-primary btn-lg" name="btnEnviarUsuarioTipo" value="Enviar">
      </div>
    </form><!--|==========| Formulario | ↑ | fin |==========|-->
  <!--|==========| Container | fin | ← | ↑ |==========|--></div>

  <!--|========| Modal - CerrarSesion |inicio| ↓ |========|-->
  <div class="modal fade" id="CerrarSesion" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Cerrar Sesion</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
          <div class="modal-body"> ¿Desea salir de la plataforma? </div>
        <!-- <div class="modal-footer"> -->
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
          <a href="welcome" type="button" class="btn btn-primary">Si</a>
        </div>
      </div>
    </div>
  </div><!--|======| Modal - CerrarSesion |fin| ↑ |======|--> 
</body>
</html>