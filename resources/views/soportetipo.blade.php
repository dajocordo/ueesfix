<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>Soporte Tipo</title>
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
    <div class="btn-left-pro"> <a href="home" title="Inicio" class="aarrooww"><</a> </div>
    <!--|==========| Nuevo | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p>Soporte Tipo</p> </div>
    <!--|==========| Boton | ir a derecha |==========|-->
    <div class="btn-right-pro"> <a href="/soportetiponuevo" title="Nuevo" class="aarrooww">+</a> </div>
    <!--|==========| Nuevo | ↓ |==========|-->
    
    <!--|=======| Tabla Soporte Tipo | ↓ | inicio |=======|-->
    <table class="table table-bordered">
      <thead>
        <th>No.</th>
        <th>Soporte Tipo</th>
        <th>Modificado</th>
        <th colspan="3">Opciones</th>
      </thead>
      @php
      $num=1;
      foreach ($sopotipo as $st) {
        $id = $st->soportetipoid;
        $nombrest = $st->soportetipo_name;
        $fechaActual = $st->updated_at;
      @endphp
      <tbody><td>@php echo $num++; @endphp</td>
        <td>@php echo $nombrest; @endphp</td>
        <td>@php echo $fechaActual; @endphp</td>
        <td><a class="optionsu" href="/st/@php echo $id; @endphp/edit"><img src="img/edit.png"></a></td>
        <td><a class="optionsu" href="/st/@php echo $id; @endphp"><img src="img/info.png"></a></td> 
        <td><a class="optionsu" href="/st/delete"><p class="btndelete">X</p></a></td> 
      </tbody>  
     @php } @endphp  
    </table><!--|=======| Tabla Soporte Tipo | ↑ | fin |=======|-->
  <!--|==========| Container | fin | ↑ |==========|--></div>

  
</body>
</html>