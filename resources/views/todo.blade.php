{{--| admin |--}}

@extends('building')

@section('title', 'Nuevo')

@section('content')
  <!--|==========| Barra de navegacion | ↓ | inicio |==========|-->
  @include('tool.topnav')
<!--|=========| Barra de navegacion | ← | fin |=========|-->

  <!--|==========| Container | ↓ | inicio |==========|-->
  <div class="container">
    <!--|==========| Boton | ir a izquierda |==========|-->
    <div class="btn-left-pro"> <a href="done" title="Completado" class="aarrooww"><</a> </div>
    <!--|==========| Nuevo | ↓ | titulo |==========|-->
    <div class="middle-pro"> <p>Usuarios</p> </div>
    <!--|==========| Boton | ir a derecha |==========|-->
    <div class="btn-right-pro"> <a href="doing" title="Pendiente" class="aarrooww">></a> </div>
    <!--|==========| Nuevo | ↓ |==========|-->
    
    <table class="table table-bordered">
      <thead>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Correo</th>
      </thead>
      
      @php 
      foreach ($users as $user) {
        $nombreu = $user->unombre;
        $apellidou = $user->upellido;
        $correou = $user->umail;
      @endphp
      <tbody>
        <td>@php echo $nombreu; @endphp</td>
        <td>@php echo $apellidou; @endphp</td>
        <td>@php echo $correou; @endphp</td> 
      </tbody>   

<!--     <div class="first"> <p class="ppro">Nombre    Apellido     Correo</p></div>
    <div class="first"> <p class="ppro">@php echo $nombreu, $apellidou, $correou; @endphp</p> </div> -->
<!--     <div class="first"> <p class="ppro">TKT # 4356: Caida del Campus</p> </div>
    <div class="first"> <p class="ppro">TKT # 4358: No puedo entrar a mi cuenta del campus</p> </div>
    <div class="first"> <p class="ppro">TKT # 4359: Licencia de Office Caducada</p> </div>
    <div class="first"> <p class="ppro">TKT # 4361: No puedo abrir archivo de Excel</p> </div>
    <div class="first"> <p class="ppro">TKT # 4362: Mi Class Web no funciona...</p> </div> -->

    @php } @endphp
      
    </table>
  </div>
  <!--|==========| Container | fin | ↑ |==========|-->


@endsection