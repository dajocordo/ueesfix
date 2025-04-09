
@extends('building')

@section('content')

    <!--|==========| Perfil | ↓ |==========|-->
    <div class="middle-pro"><p><img src="/img/logo.png">  UEES FIX<p></div>

    <div class="row"><!--|==========| Div | Row I | ↓ |==========|-->
      <div class="colin"> <p class="ppro"> <a href="{{ url('/loginui') }}" class="a1">Estudiante / Empleado</a> </p> </div>
    <!--|==========| Div | Row I | ↑ |==========|--></div>

    <div class="row"><!--|==========| Div | Row II | ↓ |==========|-->
      <div class="colin"> <p class="ppro"> <a href="{{ url('/loginsi') }}" class="a2">Soporte</a> </p> </div>
    <!--|==========| Div | Row II | ↑ |==========|--></div>

    <div class="row"><!--|==========| Div | Row II | ↓ |==========|-->
      <div class="colin"> <p class="ppro"> <a href="{{ url('/loginai') }}" class="a3">Administrador</a> </p> </div>
    <!--|==========| Div | Row II | ↑ |==========|--></div>

  <!--|==========| Container | fin | ← | ↑ |==========|--></div>    
</body>
</html>
@endsection