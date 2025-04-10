  <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>Editar Soporte</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
 
  <link rel="stylesheet" type="text/css" href="/css/estail.css"> 
</head>
<body>
 @include('tool.topnav')

  <!-- {{ $id=3 }} -->

  <!--|====| Container | ↓ | → | inicio |====|--><div class="container">
    <!--|==========| Bienvenida | ↓ |==========|-->
    <h1 id="greeting">Editar Soporte</h1>
    
    <!--|==========| Formulario | ↓ | inicio |==========|-->
    <form action="{{url('/s/update/')}}" method="post">
      @csrf
      <input type="hidden" class="form-control form-control-lg" name="ii" value="@php echo $ii; @endphp" autocomplete="off" required>
      <label class="lblformuser">Nombre</label>
      <input type="text" class="form-control form-control-lg" name="txtEditNombre" value="@php echo $name; @endphp" autocomplete="off" required>
      <label class="lblformuser">Apellido</label>
      <input type="text" class="form-control form-control-lg" name="txtEditApellido" value="@php echo $apellido; @endphp" autocomplete="off" required>
      <label class="lblformuser">Correo</label>
      <input type="email" class="form-control form-control-lg" name="txtEditCorreo" value="@php echo $correo; @endphp" autocomplete="off" required>
      <label class="lblformuser">Telefono</label>
      <input type="number" class="form-control form-control-lg" name="txtEditTelefono" value="@php echo $telefono; @endphp" autocomplete="off" required>     
      <div class="d-grid gap-2">
        <input type="submit" class="btn btn-primary btn-lg" name="btnActualizarSoporte" value="Actualizar">
      </div>
    </form><!--|==========| Formulario | ↑ | fin |==========|-->
  <!--|==========| Container | fin | ← | ↑ |==========|--></div>

  
</body>
</html>