<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>Nueva Prioridad</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
 
  <link rel="stylesheet" type="text/css" href="/css/estail.css"> 
</head>
<body>
 @include('tool.topnav')

  <!--|====| Container | ↓ | → | inicio |====|-->
<div class="container">
    <!--|==========| Boton | Regresar |==========|-->
    <div class="btn-left-pro"> <a href="{{ url('/p') }}" title="Regresar" class="aarrooww"><</a> </div>
    <!--|==========| Prioridad | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p><img src="/img/add.png"> Prioridad [ nueva ]</p> </div>
    <!--|==========| Formulario | ↓ | inicio |==========|-->
    <form action="{{url('/p/create')}}" name="frmPrioridadCreate" method="post">
      @csrf
      <label class="lblformuser">Nombre de prioridad</label>
      <input type="text" class="form-control form-control-lg" name="txtNombrePrioridad" autocomplete="off" required>
      <div class="d-grid gap-2">
        <input type="submit" class="btn btn-primary btn-lg" name="btnEnviarPriori" value="Enviar">
      </div>
    </form><!--|==========| Formulario | ↑ | fin |==========|-->
  <!--|==========| Container | fin | ← | ↑ |==========|-->
</div>

  

   
</body>
</html>