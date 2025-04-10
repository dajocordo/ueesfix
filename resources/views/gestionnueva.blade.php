@php
  session_start();
  if(isset($_SESSION['admin'])){
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>Gestion nueva</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
 
  <link rel="stylesheet" type="text/css" href="/css/estail.css"> 
</head>
<body>
 @include('tool.topnav')

  <!--|====| Container | ↓ | → | inicio |====|-->
<div class="container">
    <!--|==========| Boton | Regresar |==========|-->
    <div class="btn-left-pro"> <a href="{{ url('/g') }}" title="Regresar" class="aarrooww"><</a> </div>
    <!--|==========| Gestion | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p><img src="/img/add.png"> Gestion [ nueva ]</p> </div>
    <!--|==========| Formulario | ↓ | inicio |==========|-->
    <form action="{{ url('/g/create') }}" method="post">
      @csrf
      <div class="row"><!--|==========| Div | Row I | ↓ |==========|-->
        <div class="col-6">
          <label class="lblformuser">Nombre</label>
          <input type="text" class="form-control form-control-lg" name="txtNombreGestion" autocomplete="off" required>
        </div>
        <div class="col-6">
          <!--|==========| Select Gestion Tipo | ↓ | inicio |==========|-->
          <label class="lblformuser">Gestion Tipo</label>
          <select name="selGestionTipo" class="form-control form-control-lg" aria-label="Default select example">
          @php foreach ($gestiontipooid as $selgestiontipoid) {
            $gestiontipoid = $selgestiontipoid->gestiontipoid;
            $gestiontiponame = $selgestiontipoid->gestiontipo_name;
          @endphp
              <option value="@php echo $gestiontipoid; @endphp">@php echo $gestiontiponame; @endphp</option>
          @php } @endphp
          </select><!--|==========| Select Tipo | ↑ | fin |==========|-->
          </div><!--|==========| Div | Row I | ↑ |==========|--></div>
          <input type="submit" class="btn-enviar-form" name="btnEnviarGestion" value="Enviar">
        </div></form><!--|==========| Formulario | ↑ | fin |==========|-->
  <!--|==========| Container | fin | ← | ↑ |==========|-->
</div>

</body>
</html>
@php
  session_start();
  if(isset($_SESSION['admin'])){
@endphp
